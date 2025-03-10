<?php
include "../backend/myConnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    $date = $_POST["date_posted"];
    $targetDir = "../news/";
    $targetFilePath = "";

    // Fetch existing data
    $query = "SELECT title, content, date_posted, image FROM news WHERE id='$id'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        echo json_encode(["error" => "News item not found"]);
        exit;
    }

    $existingTitle = $row["title"];
    $existingContent = $row["content"];
    $existingDate = $row["date_posted"];
    $existingImage = $row["image"];

    // Ensure the uploads folder exists
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    // Handle image upload
    if (!empty($_FILES["image"]["name"])) {
        $fileName = basename($_FILES["image"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

        // Allowed file types
        $allowedTypes = ["jpg", "png", "jpeg", "gif"];
        if (in_array($imageFileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                $targetFilePath = "news/" . $fileName;
            } else {
                echo json_encode(["error" => "Failed to upload image"]);
                exit;
            }
        } else {
            echo json_encode(["error" => "Invalid file type"]);
            exit;
        }
    } else {
        // Keep the old image if no new image is uploaded
        $targetFilePath = $existingImage;
    }

    // Check if any changes were made
    if ($title == $existingTitle && $content == $existingContent && $date == $existingDate && $targetFilePath == $existingImage) {
        echo json_encode(["no_changes" => true]);
        exit;
    }

    // Update the news record if changes are detected
    $sql = "UPDATE news SET title='$title', content='$content', date_posted='$date', image='$targetFilePath' WHERE id='$id'";
    if (mysqli_query($con, $sql)) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["error" => "Update failed"]);
    }
}
?>
