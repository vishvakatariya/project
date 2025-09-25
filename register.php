<?php
include("connection.php");
session_start();
$msg = '';

if (isset($_POST['submit'])) { 
    if (
        isset($_POST['name']) && 
        isset($_POST['email']) && 
        isset($_POST['password']) && 
        isset($_POST['cpassword']) && 
        isset($_POST['user_type'])
    ) {
        $name      = mysqli_real_escape_string($conn, $_POST['name']);
        $email     = mysqli_real_escape_string($conn, $_POST['email']);
        $password  = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
        $user_type = mysqli_real_escape_string($conn, $_POST['user_type']);

        // 1. Check if passwords match
        if ($password !== $cpassword) {
            $msg = "Passwords do not match!";
        } else {
            // 2. Check if user already exists
            $check_user = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($conn, $check_user);

            if (mysqli_num_rows($result) > 0) {
                $msg = "User already exists!";
            } else {
                // 3. Hash the password
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // 4. Insert user
                $insert = "INSERT INTO users (name, email, password, user_type) 
                           VALUES ('$name', '$email', '$hashed_password', '$user_type')";
                
                if (mysqli_query($conn, $insert)) {
                    header("Location: login.php");
                    exit;
                } else {
                    $msg = "Error: " . mysqli_error($conn);
                }
            }
        }
    } else {
        $msg = "Please fill in all fields.";
    }
}
?>

<!Doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>register</title>
		<link rel="stylesheet" href="style1.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	</head>
	<body>
		<div class="form">
			<form action="register.php" method="post">
			<h2>Registration</h2>
			<p class="msg text-danger"><?php echo $msg; ?></p>

		<div class="form-group">
			<input type="text" name="name" placeholder="Enter Your Name" class="form-control" required>
		</div>
		<div class="form-group">
			<input type="email" name="email" placeholder="Enter Your Email" class="form-control" required>
		</div>
		<div class="form-group">
			<select name="user_type" class="form-control">
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
