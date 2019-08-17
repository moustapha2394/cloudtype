<?php 
if (isset($_POST['user']) && isset($_POST['psswd'])) {

$user = $_POST['user'];
$pwd = $_POST['psswd'];
if (isset($_POST['submit'])) {
	if (!empty($user) && !empty($pwd)) {
		if ($user=="toto" && $pwd=="1234") {
			header('location:acceuil.php');
		}else{
			echo "faux";
			
		}
	}
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="" method="POST">
	<h1>CONNEXION</h1>
	<div>
		<label for="name">Username :</label>
		<input type="text" name="user" id="user">
	</div>
	<div>
		<label for="psswd">Password :</label>
		<input type="password" name="psswd" id="psswd">
	</div>
	<div class="button">
		<button type="submit" name="submit">Se connecter</button>
	</div>
</form>
<a href="acceuil.php">acceuil</a>
</body>
</html>
