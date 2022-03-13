<?php
// session_start();
// include("connection.php");
// include("functions.php");

// $user_data = check_login($con);
// foreach($_SERVER as $s){
//       echo $s;
//       echo "<br>";
//       echo "<br>";
// }
// var_dump($_POST);
echo "<br>";
echo "<br>";
echo $_SERVER['REQUEST_METHOD'];

if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
function test($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $user_name = test($_POST["user_name"]);
  $given_password = test($_POST["password"]);
var_dump($_POST);
  if (empty($user_name) or empty($given_password)) {
    echo "Please fill up the form properly";

    /*header("Location: form.html");*/
//     header("Location: Form.php?errorMsg=Please fill up the form properly.");
  } 
 else 
 {
      $userjsonfile = file_get_contents('user_data.json');

      $userarray = json_decode($userjsonfile, true);
      foreach ($userarray as $user) 
      {
            echo '<br>';
            echo '<br>';
            var_dump($user);
            
            echo '<br>';
            echo $user["name"];
            echo '<br>';
            echo gettype($user["name"]);
            echo '<br>';
            echo $user["password"];
            echo '<br>';
            echo gettype($user["password"]);
            echo '<br>';
            echo "vars";
            echo '<br>';
            echo $user_name;
            echo '<br>';
            echo gettype($user_name);
            echo '<br>';
            echo $given_password;
            echo '<br>';
            echo gettype($given_password);
            echo '<br>';
            if ($user["name"] === $user_name && $user["password"] === $given_password)
            {
                  echo "HELLO bitechs";
                  echo "USER IS " . $user["id"];
            }
            else{
                  echo "CODE SOLE NA";
            }
            echo '<br>';
            echo '<br>';
            echo '<br>';

      }

 }
}

?>

<!DOCTYPE html>

<html>

<head>
      <title> OMUk</title>
</head>

<body>
      <a href="logout.php">Logout</a>
      <h1>This is the index page </h1>

      <br>
      Hello, Username.

      <button type="button">First order </button>
      <button type="button">Second order </button>
      <button type="button">Third order </button>
      <button type="button">Forth order </button>
</body>

</html>