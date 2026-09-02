<?php

include 'config.php';

session_start();

if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM members
        WHERE email='$email'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){

    $row = mysqli_fetch_assoc($result);

    if(password_verify($password, $row['password'])){

        $_SESSION['email'] = $row['email'];
        $_SESSION['role'] = $row['role'];

        if($row['status'] == 'pending'){

            echo "Account waiting for admin verification.";

        }else{

            if($row['role'] == 'admin'){

                header("Location: admin_dashboard.php");

            }else{

                header("Location: dashboard.php");

            }
        }

    }else{

        echo "Invalid Password";
    }

}else{

    echo "User Not Found";
}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Login</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<!-- HERO -->

<section class="hero">

<h1>Member Login</h1>

<p>Access your church dashboard.</p>

<div class="card">

<form method="POST">

<input type="email"
name="email"
placeholder="Enter Email"
required>

<br><br>

<input type="password"
name="password"
placeholder="Enter Password"
required>

<br><br>

<button type="submit"
name="login"
class="btn">

Login

</button>

</form>

</div>

</section>

</body>
</html>