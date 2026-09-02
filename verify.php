<?php

include 'config.php';

$id = $_GET['id'];

mysqli_query(
$conn,
"UPDATE members
SET status='verified'
WHERE member_id='$id'"
);

header("Location: admin_dashboard.php");

?>