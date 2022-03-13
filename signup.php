<?php
/* 
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    var_dump($user_name);
    if (!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($gender)) {
        //saving data base
        $user_id = random_num(20);
        $query = "insert into user (user_id,user_name,password,gender) values('$user_id','$user_name','$password','$gender')";

        mysqli_query($con, $query);

        header("Location: loginpage.php");
        die;
    } else {
        echo "please enter some valid information";
    }
}
*/
?>

<!DOCTYPE html>

<html>

<head>
    <title> Singnup </title>
</head>

<body>


    <form action="loginpage.php" method="post">
        <a type="button" href="index.php">Landing Page</a>

        <div style="font-size: 20px;margin: 10px;">Signup </div>

        <lebel for="name">NAME : </lebel>
        <input id="text" type="text" name="user_name" placeholder="write_your_name"><br><br>
        <lebel for="pass">Password : </lebel>
        <input id="password" type="password" name="password" placeholder="Enter password"><br><br>
        <!-- 
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="other">Other -->

        <br><br>
        <input id="button" type="submit" value="Signup"><br><br>
    </form>

    <a href="loginpage.php">Click to Login</a><br><br>
    <?php 
		if (isset($_GET['errorMsg'])) {
			echo $_GET['errorMsg'];
		}
	?>


</body>


</html>