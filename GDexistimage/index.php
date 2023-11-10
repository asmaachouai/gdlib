<?php
  // $img = imagecreatefromjpeg("back.jpg");
   $src=imagecreatefromjpeg("back.jpg");
   $dest=imagecreatefromjpeg("photo.jpg");
   //imagettftext($img,200,200,200,300,"./les.ttf","sekou");
   imagegammacorrect($dest,1,2);
   imagecopymerge($dest,$src,400,300,300,300,100,100,60);
   imagepng($dest,"exporte.png");
 ?>
 <style >
   img{
     width:600px;
     height:400px;
   }
 </style>
<img src="back.jpg" alt="">
<img src="exporte.png" alt="">
