<?php 
function taillerepertoire($repertoire)
{
	$racine=opendir($repertoire);
	$taille=0;
	while ($dossier=readdir($racine)) {
		if ($dossier!='.' && $dossier!='..') {
			if (is_dir($repertoire.'/'.$dossier)) {
				$taille+=taillerepertoire($repertoire.'/'.$dossier);
			}else{
				$taille+=filesize($repertoire.'/'.$dossier);
			}
		}
	}
	return $taille;
}
?>