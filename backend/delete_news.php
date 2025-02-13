<?php
include "../backend/myConnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    // Fetch image path to delete from the server
    $query = "SELECT image FROM news WHERE id='$id'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $imagePath = $row["image"];

    // Delete the news record
    $sql = "DELETE FROM news WHERE id='$id'";
    if (mysqli_query($con, $sql)) {
        // Delete the image file if it exists
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["error" => "Failed to delete news"]);
    }
}
?>
