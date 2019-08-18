<!DOCTYPE html>
<?php
$adresse1="./cloud/"; //Adresse du dossier sans oublier le / à la fin.
$adresse2="./functions/";
$dossier1=Opendir($adresse1);
$dossier2=Opendir($adresse2);
$list1 = array();
$list2 = array();
while (false !==($fichier1=readdir($dossier1))) {
	if ($fichier1!=="." && $fichier1!=="..") {
		$list1[]=$fichier1;
	}
}
while (false !==($fichier2=readdir($dossier2))) {
	if ($fichier2!=="." && $fichier2!=="..") {
		$list2[]=$fichier2;
	}
}
if (count($list1)<count($list2)) {
	$supp=count($list2);
}else{$supp=count($list1);
}
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
		<thead>
		<tr><th>#</th>
			<th colspan="3">cloud</th>
			<th>fonction</th>
		</tr>
		<tr>
			<th>-</th>
			<th>nom</th>
			<th>type</th>
			<th>taille</th>
			<th>-</th>
		</tr>
		</thead>
		<tbody>
			<?php 
             for ($i=0; $i <$supp ; $i++) { 
             	if (!isset($list1[$i])) {
             		$list1[$i]="-";
             	}
             	if (!isset($list2[$i])) {
             		$list2[$i]="-";
             	}
             	echo '<tr>
             	<td>'.($i+1).'</td>
             	<td>'.$list1[$i].'</td><td>oiu</td><td>oiu</td>
             	<td>'.$list2[$i].'</td>
             	</tr>';
             }
				

			?>
		</tbody>
	</table>
</main>

</body>
</html>