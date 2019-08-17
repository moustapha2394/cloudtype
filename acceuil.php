<!DOCTYPE html>
<?php
$adresse="./cloud"; //Adresse du dossier sans oublier le / à la fin.
$dossier=Opendir($adresse); //Ouverture du dossier.
?> 
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="acceuil.css">
	<link rel="stylesheet" type="text/css" href="nav.css">
	<link rel="stylesheet" type="text/css" href="header.css">
</head>
<body>
<?php include('header.inc.php'); ?>
<?php include('nav.inc.php'); ?>

<main>
	<h1>Infos general</h1>
	<table>
		<tr>
			<th>cloud</th>
			<th>fonction</th>
		</tr>
			<?php 
			while ($Fichier = readdir($dossier)){
	if ($Fichier!=="." && $Fichier!="..") {
	     echo '<tr>
     <td><a href='.$adresse.$Fichier.' target="_blank">'.$Fichier.'</a><td>
     </tr>';
 }

}
closedir($dossier);
			?>
	</table>
</main>

</body>
</html>