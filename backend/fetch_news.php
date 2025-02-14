<?php
header('Content-Type: application/json');
include "../backend/myConnection.php";

$sql = "SELECT * FROM news ORDER BY date_posted DESC LIMIT 6"; // Fetch latest 5 news items
$result = $con->query($sql);

$newsData = array();

while ($row = $result->fetch_assoc()) {
    $newsData[] = $row;
}

header('Content-Type: application/json');
echo json_encode($newsData);
?>
