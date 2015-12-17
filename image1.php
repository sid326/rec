<?php
  
   $font_number=4;
   //$text1=$_POST['randm'];
   $text=rand(10000, 40000);	
   $width=2*strlen($text)*imagefontwidth($font_number);
   $height=1.4*imagefontheight($font_number);
   $image=imagecreate($width,$height);
   $back_color=imagecolorallocate($image,255,200,110);
   $drawing_color=imagecolorallocate($image,255,110,110);
   $x_position=($width-(strlen($text)*imagefontwidth($font_number)))/2;
   $y_position=($height-imagefontheight($font_number))/2;	
   imagestring($image,$font_number,$x_position,$y_position,$text,$drawing_color);
   header('Content-type:image/jpeg');
   imagejpeg($image);
   imagedestroy($image);
   session_start();
   $_SESSION['randm']=$text;
		echo $_SESSION['randm'];
		$x=$_SESSION['randm'];
	
   
?>