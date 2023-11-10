<?php
$x=600;
$y=600;
$nbr=8;
  $img=imagecreatetruecolor($x,$y);
  $noir=imagecolorallocate($img,0,0,0);
  $blanc=imagecolorallocate($img,255,255,255);
  $bleu=imagecolorallocate($img,0,0,255);
    imagefill($img,0,0,$noir);
    imagefilledpolygon($img,array(10,10,500,10,200,500,700,40,300,600),5,$bleu);
    imagettftext($img,120,0,40,300,$blanc,"./contrast.ttf","Bonjour");
imagepng($img,'image.png');
?>
<img src="image.png" style="display:block;margin:100px auto">
