<!DOCTYPE html>
<?php
include 'functions.php';
try {
	$bdd=new PDO('mysql:host=localhost;dbname=cloudtype;charset=utf8','root','');
} catch (Exception $e) {
	die('Erreur :'.$e->getMessage());
}
$adresse1="./cloud/"; 
$adresse2="./functions/";
$dossier1=Opendir($adresse1);
$dossier2=Opendir($adresse2);
$list1 = array();
$list2 = array();
$size1= array();
while (false !==($fichier1=readdir($dossier1))) {
	if ($fichier1!=="." && $fichier1!=="..") {
		if (is_dir($adresse1.$fichier1)) {
			$list1[]=$fichier1;
			$size1[]=taillerepertoire($adresse1.$fichier1);
		}
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
$list1=array_reverse($list1);
$list2=array_reverse($list2);
$size1=array_reverse($size1);
function GetSizeName($octet)
{
    // Array contenant les differents unités 
    $unite = array('octet','ko','mo','go');
    
    if ($octet < 1000) // octet
    {
        return $octet.$unite[0];
    }
    else 
    {
        if ($octet < 1000000) // ko
        {
            $ko = round($octet/1024,2);
            return $ko.$unite[1];
        }
        else // Mo ou Go 
        {
            if ($octet < 1000000000) // Mo 
            {
                $mo = round($octet/(1024*1024),2);
                return $mo.$unite[2];
            }
            else // Go 
            {
                $go = round($octet/(1024*1024*1024),2);
                return $go.$unite[3];    
            }
        }
    }
}
?>
<html>
<head>
	<title></title>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="acceuil.css">
	<link rel="stylesheet" type="text/css" href="nav.css">
	<link rel="stylesheet" type="text/css" href="header.css">
</head>
<body>
<?php include('header.inc.php'); ?>
<?php include('nav.inc.php'); ?>
<div class="container">
<main>
	<h1>General Info:</h1>
	<div class="table">
	<table>
		<thead>
		<tr><th>#</th>
			<th colspan="3">Cloud</th>
			<th>Function</th>
		</tr>
		<tr>
			<th>-</th>
			<th>Name</th>
			<th>Modification date</th>
			<th>Size</th>
			<th>-</th>
		</tr>
		</thead>
		<tbody>
			<?php 
             for ($i=0; $i<$supp ; $i++) { 
             	if (!isset($list1[$i])) {
             		$list1[$i]="-";
             	}
             	if (!isset($list2[$i])) {
             		$list2[$i]="-";
             	}
             	echo '<tr>
             	<td>'.($i+1).'</td>
             	<td>'.$list1[$i].'</td><td>oiu</td><td>'.GetSizeName($size1[$i]).'</td>
             	<td>'.$list2[$i].'</td>
             	</tr>';
             }
			?>
		</tbody>
	</table>
			</div>
			</div>
	<div class="boite" >
		<h2 style="text-align:center;">New function</h2>
		<button type="button" class="fermer">X</button>
		<form>
			<label for="name">Function's name :</label>
			<input type="text" name="name" ></br>
			<textarea name="code" class="codepart"></textarea>
			<input type="submit" class="savebut" name="submit" value="save">
		</form>
	</div>
</main>
</body>
<script src="function.js" async></script>
</html>