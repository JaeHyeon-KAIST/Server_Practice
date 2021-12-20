<?php
$conn = mysqli_connect("127.0.0.1:3306", "root", "32673267okk", "opentutorials");

$sql = "select * from topic limit 1000";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo '<h1>'.$row['title'].'</h1>';
echo $row['description'];

?>