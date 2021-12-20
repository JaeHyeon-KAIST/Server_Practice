<?php
$conn = mysqli_connect("127.0.0.1:3306", "root", "32673267okk", "opentutorials");

$sql = "
    insert into topic(
        title, description, created
    ) value(
        'MySQL',
        'MySQL is..',
        now()
    )";

mysqli_query($conn, $sql);

echo mysqli_error($conn);
?>