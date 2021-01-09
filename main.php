<?php include('server.php'); ?>

<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="styles.css">  
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
	<div class="container">
		<div style="width: 30%;margin: 100px auto">
		<div class="header">
			<h2>Register</h2>
		</div>
		<form action="registration.php" method="POST">
			<?php include('errors.php'); ?>

			<div class="form-group">
				<input class="form-control" type="text" name="username" placeholder=" UserName" required>
			</div>
			<div class="form-group">
				<input class="form-control" type="email" name="email" placeholder="Email" required>
			</div>
			<div class="form-group">
				<input class="form-control" type="password" name="password" placeholder="password" id="pwd" required>
			</div>
							<input type="checkbox" onclick="myFunction()"> Show Password

			<div class="form-group">
				<input class="form-control" type="password" name="confirmpassword" placeholder="Confirm Password" id="pwd" required>
			</div>
							<input type="checkbox" onclick="myFunction()"> Show Password

			<div class="form-group">
			<button type="submit" name="register" class="btn btn-block ">Submit</button>
		</div>

			<p>Already a user?<a href="login.php">Login</a></p>
		</form>


		</div>
	</div>

	<script type="text/javascript">
		function myFunction() {
					  var x = document.getElementById("pwd");
					  if (x.type === "password") {
					    x.type = "text";
					  } else {
					    x.type = "password";
					  }
					}


	</script>
</body>
</html>