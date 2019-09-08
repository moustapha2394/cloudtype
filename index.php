<?php 
session_start();
try {
	$bdd=new PDO('mysql:host=localhost;dbname=cloudtype;charset=utf8','root','');
} catch (Exception $e) {
	die('Erreur :'.$e->getMessage());
}
if (isset($_POST['user']) && isset($_POST['psswd'])) {
$req=$bdd->prepare('SELECT pseudo ,password FROM user WHERE pseudo = ? AND password = ?');
$user = htmlspecialchars($_POST['user']) ;
$pwd = htmlspecialchars($_POST['psswd']) ;
if (isset($_POST['submit'])) {
	if (!empty($user) && !empty($pwd)) {
		$req->execute(array($user,$pwd));
		$nb=$req->rowCount();
		echo '<h1>'.$nb.'</h1>';
		if ($nb>0) {
			$_SESSION['user']=$user;
			header('location:acceuil.php');
		}else{
			echo '<h1>'.$nb.'</h1>';
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
		<button type="submit" name="submit">Login</button>
	</div>
</form>
<a href="acceuil.php">Home</a>
</body>
</html>
