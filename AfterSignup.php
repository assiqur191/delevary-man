<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Submission (PHP)</title>
</head>
<body>

	<?php 

		if ($_SERVER['REQUEST_METHOD'] === "POST") {

			function test($data) {
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



			if (empty($name) or empty($password)) {
				/*echo "Please fill up the form properly";*/

				/*header("Location: form.html");*/
				header("Location: Form.php?errorMsg=Please fill up the form properly.");
			}
			else {
				echo "Name: " . $name;
				echo "<br><br>";
				echo "Pass: " . $password;
			}
		}
	?>

	<hr><hr>

	<a href="form.html">Go Back</a>

</body>
</html>