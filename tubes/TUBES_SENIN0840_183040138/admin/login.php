<?php  
$error = "";
if (isset($_POST['submit'])) {
	if ($_POST['username'] == 'admin' && $_POST['password'] == 'abcd1234') {
		header('Location: admin.php');
	} else {
		$error = 'username / password salah!';
	}	
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log In</title>
</head>
<style>
	body{
		background-color: #98ae5b;
	}
	.container{
		width: 300px;
		height: 400px;
		background-color: #23313d;
		margin: 80px auto;
		text-align: center;
		padding-top: 15px;
		font-family: arial;

	}
	h3{
		font-size: 56px;
		color:white;
		
	}
	table{
		margin: auto;
		padding-top: 15px;
		padding-bottom: 30px;
		color: white;
		font-weight: bold;
	}
	p{
		color: red;
	}
	button{
		padding: 10px;
		background-color: #51434e;
		color: #fff;
	}
	i{
		color : white;
	}
</style>
<body>
	<div class="container">
		<h3>LOG IN</h3>
		<form action="" method="post">
			<p><?php echo $error;?></p>
			<table border="0">
				<tr>
				<td>
					<label for="username">Username :</label>
					<input type="text" name="username">
				</td>
			</tr>
			<tr>
				<td>
					<label for="password">Password :</label>
					<input type="password" name="password">
				</td>
			</tr>
		</table>
		<button type="submit" name="submit">Login</button>
		</form>
		<br>
		<br>
		<i>login : admin / abcd1234</i>
	</div>
	
</body>
</html>