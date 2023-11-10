<?php
$x=600;
$y=600;
$nbr=8;
  $img=imagecreatetruecolor($x,$y);
  $jaune=imagecolorallocate($img,255,255,0);
  $noir=imagecolorallocate($img,0,0,0);
  $rouge=imagecolorallocate($img,255,0,0);
  $blanc=imagecolorallocate($img,255,255,255);
  $bleu=imagecolorallocate($img,0,0,255);
  $couleur = array($bleu , $noir, $jaune, $rouge);
    imagefill($img,0,0,$blanc);
    for($i=0;$i<$nbr;$i++)
  imagefilledarc($img,$x/2,$y/2,$x-100,$y-100,$i*360/$nbr,($i+1)*360/$nbr,$couleur[$i%count($couleur)],IMG_ARC_PIE);
imagepng($img,'image.png');
?>
<img src="image.png" style="display:block;margin:100px auto">
