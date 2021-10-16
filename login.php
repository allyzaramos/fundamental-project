<?php
	session_start();

	include("connection.php");
	include("functions.php");

	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			//read to database
			$query = "select * from users where user_name = '$user_name' limit 1";

			$result = mysqli_query($con,$query);

			if($result)
			{
				if($result && mysqli_num_rows($result) >0)
				{
					$user_data = mysqli_fetch_assoc($result);

					if($user_data['password'] === $password)
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<style>
	body {
 		background-image: url('b.gif'), url('a.gif');
 		background-repeat: no-repeat;
  		background-attachment: fixed, fixed;
  		background-size: cover, cover;
  		background-blend-mode:lighten;  		
  		}
</style>
	
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: #8B7355;
		border-right-style: black;
		background: #4a251b;
	}

	#box{

		background-color: none;
		border: none;
		margin: auto;
		width: 450px;
		padding: 100px;
		background: fixed;
	}

	</style>	

	<div id ="box">
		<form method = "post">
			<span style="font-size: 85px;margin: 20px; text-align: justify; color: red;">LIVE|EVIL</span>
			<div style="font-size: 35px;margin: 10px;text-align: center; color: #E2E5DE;">WELCOME!</div><hr>
			<div style="font-size: 20px;margin: 10px;color: white;">LOGIN</div>

			<input id="text" type="text" name="user_name" placeholder="Username" required><br><br>
			<input id="text" type="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required><br><br>

			<input id="button" type="SUBMIT" values="Login"><br><br>

			<div style= "color: white;"</div><br>Not Registered?<a href="signup.php"> Create an Account!</a><br><br><br><br>
			<div style= "color: red;text-align: center;"</div><br>© 2021 LIVE | EVIL <br>

		</form>
	</div>
</body>
</html>