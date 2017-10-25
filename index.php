<?php
include 'lib/Database.php';


if (isset($_POST['login'])) {
	$error = "";
	$email 	  = trim(mysqli_real_escape_string($db, $_POST['email']));
	$password = trim(mysqli_real_escape_string($db, $_POST['password']));

	$query = mysqli_query($db,"SELECT * FROM users WHERE email = '$email' && password = '$password'");


	if (mysqli_num_rows($query) == 1) {
		$_SESSION['username'] = $email;
		header("Location: home.php?msg=congratulations!!");
	}else{
		$error = "E-mail and Password did not match!!!";
	}



}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login System in PHP</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container" style="margin-top:40px;">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
<?php if (isset($error)) {
	echo "<div class='alert alert-danger'>".$error."</div>";
}  ?>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2>Login System</h2>
					</div>  <!-- close panel-heading -->
					<div class="panel-body">
						<form action="" method="POST">
							<div class="form-group">
								<input type="email" name="email" class="form-control"
								 	placeholder="Enter E-mail..." required/>
								<input type="password" name="password" 
									class="form-control" placeholder="Enter password..." required/>
								<input type="submit" name="login" class="btn btn-default" value="Login" />

							</div>  <!-- close form-group -->
						</form>  <!-- close form -->
					</div>  <!-- close panel-body -->
				</div>  <!-- close panel -->
			</div>  <!-- close col -->
		</div> <!-- close row -->
	</div> <!-- close container -->
</body>
</html>