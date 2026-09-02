<?php

include 'config.php';

$result = mysqli_query(
$conn,
"SELECT * FROM prayer_requests
ORDER BY request_id DESC"
);

?>

<!DOCTYPE html>
<html>
<head>
<title>Prayer Requests</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>All Prayer Requests</h1>

<table border="1" cellpadding="10">

<tr>
<th>Name</th>
<th>Prayer Request</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['member_name']; ?></td>

<td><?php echo $row['prayer_text']; ?></td>

</tr>

<?php } ?>

</table>

</body>
</html>