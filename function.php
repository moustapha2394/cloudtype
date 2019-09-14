<?php 
session_start();
if (isset($_SESSION['ID']) && isset($_GET['func'])) {
    if ($_SESSION['ID']==$_GET['ID']) {
    try {
            $bdd=new PDO('mysql:host=localhost;dbname=cloudtype;charset=utf8','root','');
        } catch (Exception $e) {
            die('Erreur :'.$e->getMessage());
        }
    $req=$bdd->prepare('SELECT * FROM functions WHERE auteur=?');
    $req->execute(array($_SESSION['user']));
    }else{
        header('Location:deconnexion.php?error=404');
    }
}else{
    header('Location:deconnexion.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="function.css">
	<link rel="stylesheet" type="text/css" href="nav.css">
	<link rel="stylesheet" type="text/css" href="header.css">
</head>
<body>
<div id="page">
<?php include('header.inc.php');
include('nav.inc.php');?>
<div id="wrapper">&nbsp;</div>
<div class="container">
<main>
<?php
if ($_GET['func']=="default") {
    include('listfunc.inc.php');
}else {
$req1=$bdd->prepare('SELECT * FROM functions WHERE ID=? AND auteur=?');
$req1->execute(array($_GET['func'],$_SESSION['user']));
$req1->fetch();
$nb=$req1->rowCount();
if ($nb==1) {
    echo '<script>alert(\'il existe\')</script>';
}else {
    header('Location:function.php?ID=1&func=default&error=401');
    echo '<h1 style="text-align:center">OOPPSSSS ERROR'.$_GET['error'].'...</h1>';
    include('error.php');
}
}
echo '</div>';
include('butnew.php');
?>
</main>
</div>
</body>
</html>