<?php
session_start();

if(!isset($_SESSION['email']) || $_SESSION['role'] != 'admin'){
    header("Location: login.php");
    exit();
}

include 'config.php';

$result = mysqli_query(
$conn,
"SELECT * FROM members WHERE role='member'"
);
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Admin Dashboard</h1>

<h2>Registered Members</h2>

<table border="1" cellpadding="10">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['member_id']; ?></td>

<td><?php echo $row['full_name']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['status']; ?></td>

<td>

<a href="verify.php?id=<?php echo $row['member_id']; ?>">
Verify
</a>

|

<a href="delete.php?id=<?php echo $row['member_id']; ?>">
Delete
</a>

</td>

</tr>

<?php } ?>

</table>

<br><br>

<a href="view_prayers.php">
View Prayer Requests
</a>

</body>
</html>