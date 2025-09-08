<?php
	include("connection.php");
	$msg='';
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];
		$user_type=$_POST['user_type'];
		
		$select1="SELECT * FROM 'users' WHERE email='$email' AND password='$password'";
		$select_user=mysqli_query($conn,$select1);
		if(mysqli_num_rows($Select_user)>0)
		{
			$msg="user already exist!";
		}
		else
		{
			$insert1="INSERT INTO 'users' ('name','email','password','user_type') VALUES ('$name','$email','$password','$user_type')";
			mysqli_query($conn,$insert1);
			header('location:login.php');
		}
	}
?>
<!Doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Document</title>
		<link rel="stylesheet" href="style1.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
		<div class="form">
			<form action=" " method="post">
			<h2>Registration</h2>
			<p class="msg"><? =$msg?></p>
		<div class="form-group">
			<input type="text" name="name" placeholder="Enter Your Name" class="form-control" required>
		</div>
		<div class="form-group">
			<input type="email" name="email" placeholder="Enter Your Email" class="form-control" required>
		</div>
		<div class="form-group">
			<select name="user-type" id=" " class="form-control">
				<option value="user">User</option>
				<option value="admin">Admin</option>
			</select>
		</div>
		<div class="form-group">
			<input type="password" name="password" placeholder="Enter Your Password" class="form-control" required>
		</div>
		<div class="form-group">
			<input type="password" name="cpassword" placeholder="Confirm Your Password" class="form-control" required>
		</div>
		<button class="btn font-weight-bold" name="submit">Register Now</button>
		<p> Already have an account?<a href="login.php">Login Now</a></p>
		</form>
	</div>
	</body>
</html>
