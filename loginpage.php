<?php
session_start();
include("connection.php");
include("functions.php");

// if ($_SERVER['REQUEST_METHOD'] == "post") {
//   $user_name = $_POST['user_name'];
//   $password = $_POST['password'];
//   if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
//     //reading data base
//     $query = "select * from users where user_name = '$user_name' limit 1";

//     $result = mysqli_query($con, $query);
//     if ($result) {
//       if ($result && mysqli_num_rows($result) > 0) {
//         $user_data = mysqli_fetch_assoc($result);
//         if ($user_data['password'] === $password) {
//           $_SESSION["user_id"] = $user_data['user_id'];
//           header("Location: index.php");
//           die;
//         }
//       }
//     }
//   } else {
//     echo "please enter some valid information";
//   }
// }
var_dump($_POST);
if ($_SERVER['REQUEST_METHOD'] === "POST") {

  function test($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  /* empty() vs isset() */

  $name = test($_POST['user_name']);
  $password = test($_POST['password']);
  // $middlename = test($_POST['middlename']);
  // $middlename = test($_POST['middlename']);
    echo "Name: " . $name;
    echo "<br><br>";
    echo "Pass: " . $password;
 
  

  if (empty($name) or empty($password)) {
    /*echo "Please fill up the form properly";*/

    /*header("Location: form.html");*/
    header("Location: Form.php?errorMsg=Please fill up the form properly.");
  } else {


   // $userObj->name = $name;
    // $userObj->password = $password;
    // echo gettype($userObj);
    // echo "Eikhane naem";
    // echo $userObj['name'];

    // $userJson = json_encode($userObj);

    $userdata = array("name" => $name, "password" => $password);
        echo "User data".'<br>';
    var_dump($userdata);
        echo '<br>';
    $userjsonfile = file_get_contents('user_data.json');
        echo "user JSOn".'<br>';
    var_dump($userjsonfile);
    $tempArray = json_decode($userjsonfile, true);

    echo '<br>';
    echo "temparray".'<br>';
    echo "Sze".'<br>'.sizeof($tempArray);
    $userid = sizeof($tempArray);
    $userdata["id"] = $userid;

    echo '<br>';
    echo '<br>';
    echo "user data".var_dump($userdata);
    echo '<br>';
    // var_dump($tempArray);
    echo '<br>';
    echo "Dekho ". gettype($tempArray);
    echo '<br>';
    array_push($tempArray, $userdata);

    echo "Eikhane data array";
    // echo $userJson;
    $jsonData = json_encode($tempArray);
    file_put_contents('user_data.json', $jsonData);

   echo "Khushir khobor";


  }
}
?>

<!DOCTYPE html>

<html>

<head>
  <title> Login </title>
</head>

<body>



  <form action="home.php" method="post" >
    <a type="button" href="index.php">Landing Page</a>

    <div style="font-size: 20px;margin: 10px;">Login</div>
    <input id="user_name" type="text" name="user_name"><br><br>
    <input id="password" type="password" name="password"><br><br>

    <input id="button" type="submit" value="Login"><br><br>

  </form>
  <a href="signup.php">Click to signup</a><br><br>

</body>


</html>