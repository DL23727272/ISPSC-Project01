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

    // Fetch existing password
    $query = "SELECT password FROM users WHERE userID=?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $userID);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $currentPassword = $user['password'];

    // Only hash password if it's being updated
    if (!empty($password)) {
        $hashedPassword = md5($password);

        // Only update password if it's different
        if ($hashedPassword !== $currentPassword) {
            $query = "UPDATE users SET username=?, password=?, userType=? WHERE userID=?";
            $stmt = $con->prepare($query);
            $stmt->bind_param("sssi", $username, $hashedPassword, $userType, $userID);
        } else {
            $query = "UPDATE users SET username=?, userType=? WHERE userID=?";
            $stmt = $con->prepare($query);
            $stmt->bind_param("ssi", $username, $userType, $userID);
        }
    } else {
        $query = "UPDATE users SET username=?, userType=? WHERE userID=?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("ssi", $username, $userType, $userID);
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

if (isset($_POST['deleteUser'])) {
    if (!isset($_POST['userID']) || empty($_POST['userID'])) {
        echo json_encode(['status' => 'error', 'message' => 'User ID is missing!']);
        exit();
    }

    $userID = $_POST['userID'];

    // Delete the user from the database
    $query = "DELETE FROM users WHERE userID=?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $userID);

    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo json_encode(["status" => "success", "message" => "User deleted successfully!"]);
        } else {
            echo json_encode(["status" => "warning", "message" => "User not found or already deleted."]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to delete user: " . $stmt->error]);
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
