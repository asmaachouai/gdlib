<?php
//header("content-type:image/gif"); /*specifier l'entete d'encodage en image qui est du texte par defaut*/
//print_r(gd_info()); /*voir si le serveur supporte le gblib*/
//foreach(gd_info() as $key=>$val)  /* afficher une boucle de valeur */
//echo "$key:<b>$val</b></br>";
//$img=imagecreate(600,400); /*creer une image*/
//imagegif($img,'image.gif'); /*exporter l'mage vers le serveur dans son dossier courant avec le nom du ée parametre*/
//$img=imagecreate(600,400); /*juste pour les gif
$x=600;
$y=400;
$img=imagecreatetruecolor($x,$y);
/*toutes les fonctions GD sont declarer entre imagecerate et imagepng */
$jaune=imagecolorallocate($img,255,255,0);
$rouge=imagecolorallocate($img,255,0,0);
$blanc=imagecolorallocate($img,255,255,255);
$bleu=imagecolorallocate($img,0,0,255);
imagefill($img,0,0,$jaune);
//imageline($img,0,0,600,400,$rouge); /*tracer une ligne en indiquant son debut et sa fin
//imagesetthickness($img,1); /*specifier l'epaisseur de la ligne
//imagerectangle($img,100,100,500,300,$rouge);
//imagerectangle($img,100,100,500,300,$rouge); /* avoir un rectangle plein
/*imagefilledrectangle($img,0,0,$x/3,$y,$bleu);
imagefilledrectangle($img,$x/3,0,2*$x/3,$y,$blanc);
imagefilledrectangle($img,2*$x/3,0,$x,$y,$rouge);*/
//imagerectangle($img,0,0,$x-1,$y-1,$rouge); /* specifier des bordures
imageellipse($img,$x/2,$y/2,300,300,$bleu);
// imagefilledellipse($img,$x/2,$y/2,300,300,$bleu); // pour une ellipse pleine on a
imagepng($img,'image.png');
?>
<h1>Code html</h1>
<img src="image.png" alt="">
