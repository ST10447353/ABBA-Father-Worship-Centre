<?php

include 'config.php';

$id = $_GET['id'];

mysqli_query(
$conn,
"DELETE FROM members
WHERE member_id='$id'"
);

header("Location: admin_dashboard.php");

?>