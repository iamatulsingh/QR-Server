<?php
session_start();
session_regenerate_id(); 
if(session_destroy()){
	$read = 'check.txt';
			$han = fopen($read, 'w') or die('Cannot open file:  '.$read);
			$da = "1";
			fwrite($han, $da);
			header("Location:index.php");
}
else
	echo 'not';
#header( 'Location: index.php' ) ;
?>