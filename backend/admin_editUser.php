<?php

include '../backend/myConnection.php'; 

if (isset($_POST['updateUser'])) {
    if (!isset($_POST['userID']) || empty($_POST['userID'])) {
        echo json_encode(['status' => 'error', 'message' => 'User ID is missing!']);
        exit();
    }

    $userID = $_POST['userID'];
    $username = $_POST['username'];
    $userType = $_POST['userType'];
    $password = $_POST['password'];

    // Debugging Log
    file_put_contents('debug_log.txt', "Received: userID=$userID, username=$username, userType=$userType, password=$password\n", FILE_APPEND);

    // Validate user type
    if ($userType != 'user' && $userType != 'admin') {
        echo json_encode(['status' => 'error', 'message' => 'Invalid user type!']);
        exit();
    }

    if (!empty($password)) {
        $password = md5($password);
        $query = "UPDATE users SET username=?, password=?, userType=? WHERE userID=? AND (username != ? OR userType != ? OR password != ?)";
        $stmt = $con->prepare($query);
        $stmt->bind_param("ssssiss", $username, $password, $userType, $userID, $username, $userType, $password);
    } else {
        $query = "UPDATE users SET username=?, userType=? WHERE userID=? AND (username != ? OR userType != ?)";
        $stmt = $con->prepare($query);
        $stmt->bind_param("ssiss", $username, $userType, $userID, $username, $userType);
    }

    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo json_encode(["status" => "success", "message" => "User updated successfully!"]);
        } else {
            echo json_encode(["status" => "warning", "message" => "No changes detected."]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to update user: " . $stmt->error]);
    }
    
    exit();
}

// Fetch users for search
if (isset($_GET['search'])) {
    $search = "%" . $_GET['search'] . "%";
    $query = "SELECT userID, username, userType FROM users WHERE username LIKE ? AND (userType='user' OR userType='admin')";
    $stmt = $con->prepare($query);
    $stmt->bind_param("s", $search);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $users = [];
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
    echo json_encode($users);
    exit();
}
?>
