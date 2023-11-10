<?php
$x=1000;
$y=700;
$marge=50;
$X=($x-(2*$marge))/12;
$Y=($y-(2*$marge))/10;
$img=imagecreatetruecolor($x,$y);
$mois=array("JAN","FEV","MAR","AVR","MAI","JUI","JUL","AOUT","SEP","OCT","NOV","DEC");
  $ventes=array(250,280,360,410,800,650,740,900,800,500,420,300);
$jaune=imagecolorallocate($img,255,255,0);
$rouge=imagecolorallocate($img,255,0,0);
$blanc=imagecolorallocate($img,255,255,255);
$noir=imagecolorallocate($img,0,0,0);
$bleu=imagecolorallocate($img,0,0,255);
imagefill($img,0,0,$blanc);
imageline($img,$marge,$y-$marge,$x-$marge,$y-$marge,$noir);
imageline($img,$marge,$y-$marge,$marge,$marge,$noir);
imagettftext($img,20,0,$x-$marge-10,$y-$marge+30,$bleu,"./les.ttf","Mois");
imagettftext($img,20,0,$marge-45,$marge-25,$bleu,"./les.ttf","Ventes(KDhs)");

for($i=0;$i<10;$i++){
        imageline($img,$marge-2,$y-$marge-($i*$Y),$marge,$y-$marge-($i*$Y),$noir);
            imagettftext($img,10,0,$marge-45,$y-$marge-($i*$Y),$noir,"./les.ttf",$i*100);
}

for($i=0;$i<12;$i++){
      imageline($img,$marge+$i*$X,$y-$marge-2,$marge+$i*$X,$y-$marge+2,$noir);
      imagettftext($img,10,0,$marge+$i*$X,$y-$marge+20,$noir,"./les.ttf",$mois[$i]);
         imagefilledrectangle($img,$marge+$i*$X+1,$y-$marge-($ventes[$i]*($y-2*$marge)/1000),$marge+$i*$X+40,$y-$marge-1,$bleu);
      //   imagefilledrectangle($img,$marge+$i*$X+1,$y-$marge-($ventes[$i]*($y-2*$marge)/1000),$marge+$i*$X+40,$y-$marge-($ventes[$i]*($y-2*$marge)/1000)+5,$noir);
    }
imagepng($img,'image.png');
?>
<img src="image.png" alt="">
