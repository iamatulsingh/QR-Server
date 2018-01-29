<?php
include('phpqrcode/qrlib.php');
class UUID{
	public static function v4() {
    return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',

      // 32 bits for "time_low"
      mt_rand(0, 0xffff), mt_rand(0, 0xffff),

      // 16 bits for "time_mid"
      mt_rand(0, 0xffff),

      // 16 bits for "time_hi_and_version",
      // four most significant bits holds version number 4
      mt_rand(0, 0x0fff) | 0x4000,

      // 16 bits, 8 bits for "clk_seq_hi_res",
      // 8 bits for "clk_seq_low",
      // two most significant bits holds zero and one for variant DCE1.1
      mt_rand(0, 0x3fff) | 0x8000,

      // 48 bits for "node"
      mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );
  }
  
}

  $v4uuid = UUID::v4();
  
	$my_file = 'session.txt';
	$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
	$data = $v4uuid;
	fwrite($handle, $data);
  
  echo "<script>console.log('UUID: ".$v4uuid."');</script>";
	QRcode::png($v4uuid,"gx.png","H",6,4); 
echo "<div class='card' id='f'>";	
echo "<img src='gx.png' style='width:100%'></img><br><hr>";
echo "<div class='containe'>
    <b>Scan to Login</b>
  </div></div>"; 
  