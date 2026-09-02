<?php

include 'config.php';

if(isset($_POST['submit'])){

$name = $_POST['member_name'];

$prayer = $_POST['prayer_text'];

$sql = "INSERT INTO prayer_requests
(member_name, prayer_text, request_date)
VALUES
('$name','$prayer',CURDATE())";

mysqli_query($conn, $sql);

echo "Prayer Request Submitted";

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Prayer Request</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<section class="hero">

<h1>Prayer Request</h1>

<p>

Submit your prayer request here.

</p>

<div class="card">

<form method="POST">

<input type="text"
name="member_name"
placeholder="Your Name"
required>

<br><br>

<textarea
name="prayer_text"
rows="5"
placeholder="Enter Prayer Request"
required></textarea>

<br><br>

<button type="submit"
name="submit"
class="btn">

Submit

</button>

</form>

</div>

</section>

</body>
</html>