<?php 
session_start();
if (isset($_GET['error']) && $_GET['error']=='404') {
	echo '<script>alert(\'Veuillez vous (re)connectez.\')</script>';
}
try {
	$bdd=new PDO('mysql:host=localhost;dbname=cloudtype;charset=utf8','root','');
} catch (Exception $e) {
	die('Erreur :'.$e->getMessage());
}
if (isset($_POST['user']) && isset($_POST['psswd'])) {
$req=$bdd->prepare('SELECT pseudo ,password,ID FROM user WHERE pseudo = ? AND password = ?');
$user = htmlspecialchars($_POST['user']) ;
$pwd = htmlspecialchars($_POST['psswd']) ;
if (isset($_POST['submit'])) {
	if (!empty($user) && !empty($pwd)) {
		$req->execute(array($user,$pwd));
		$donnees=$req->fetch();
		$nb=$req->rowCount();
		echo '<h1>'.$nb.'</h1>';
		if ($nb>0) {
			$_SESSION['user']=$donnees['pseudo'];
			$_SESSION['ID']=$donnees['ID'];
			header('location:acceuil.php?ID='.$donnees['ID']);
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
		<input type="text" name="user" id="user" value="cloudtype">
	</div>
	<div>
		<label for="psswd">Password :</label>
		<input type="password" name="psswd" id="psswd" value="123890">
	</div>
	<div class="button">
		<button type="submit" name="submit">Login</button>
	</div>
</form>
<a href="acceuil.php">Home</a>
</body>
</html>
