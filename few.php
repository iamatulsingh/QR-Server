<?php
if(isset($_GET['uuid'])){
		$new = $_GET['uuid'];
		$my_file = 'session.txt';
		$handle = fopen($my_file, 'r');
		$data = fread($handle,filesize($my_file));
		if($data == $new){
			$read = 'check.txt';
			$han = fopen($read, 'w') or die('Cannot open file:  '.$read);
			$da = "0";
			fwrite($han, $da);
			echo '0';
		}
		else{
			$read = 'check.txt';
			$han = fopen($read, 'w') or die('Cannot open file:  '.$read);
			$da = "1";
			fwrite($han, $da);
			echo '1';
		}
}