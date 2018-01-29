<?php
		$my_file = 'check.txt';
		$handle = fopen($my_file, 'r');
		$data = fread($handle,filesize($my_file));
		
		if($data == '1'){
			header("Location: index.php");
		}
		else{
			echo 'you\'r logged in successfully';
		}
?>