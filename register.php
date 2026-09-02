<?php

include 'config.php';

if(isset($_POST['register'])){

$name = $_POST['full_name'];

$email = $_POST['email'];

$password = $_POST['password'];

$hashed_password =
password_hash(
$password,
PASSWORD_DEFAULT
);

$sql = "INSERT INTO members(
full_name,
email,
password,
role,
status
)
VALUES(
'$name',
'$email',
'$hashed_password',
'member',
'pending'
)";

mysqli_query($conn, $sql);

header("Location: login.php");

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Register</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<section class="hero">

<h1>Create Account</h1>

<p>Join ABBA Father Worship Centre.</p>

<div class="card">

<form method="POST">

<input type="text"
name="full_name"
placeholder="Full Name"
required>

<br><br>

<input type="email"
name="email"
placeholder="Email"
required>

<br><br>

<input type="password"
name="password"
placeholder="Password"
required>

<br><br>

<button type="submit"
name="register"
class="btn">

Register

</button>

</form>

</div>

</section>

</body>
</html>