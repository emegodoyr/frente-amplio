<?php

// cuantas firmas hay en la bd
if ($result = mysqli_query($con, "SELECT id FROM inscritos")) {
    $firmas = mysqli_num_rows($result);
    mysqli_free_result($result);
}
$firmas = $firmas+4321;


// tildes en la bd
$acentos = $con->query("SET NAMES 'utf8'");

// detectar pc, movil o tablet
$tablet_browser = 0;
$mobile_browser = 0;
$body_class = 'desktop';

if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
  $tablet_browser++;
  $body_class = "tablet";
}

if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
  $mobile_browser++;
  $body_class = "mobile";
}

if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
  $mobile_browser++;
  $body_class = "mobile";
}

$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array(
  'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
  'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
  'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
  'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
  'newt','noki','palm','pana','pant','phil','play','port','prox',
  'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
  'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
  'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
  'wapr','webc','winw','winw','xda ','xda-');

if (in_array($mobile_ua,$mobile_agents)) {
  $mobile_browser++;
}

if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {
  $mobile_browser++;
  //Check for tablets on opera mini alternative headers
  $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
  if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
    $tablet_browser++;
  }
}
if ($tablet_browser > 0) {
// Si es tablet has lo que necesites
$dispositivo = 'tablet';
}
else if ($mobile_browser > 0) {
// Si es dispositivo mobil has lo que necesites
$dispositivo = 'smartphone';
}
else {
// Si es ordenador de escritorio has lo que necesites
$dispositivo = 'pc';
}


// detectar sistema operativo y navegador



function detect()
{
	$browser=array("IE","OPERA","MOZILLA","NETSCAPE","FIREFOX","SAFARI","CHROME");
	$os=array("WIN","MAC","LINUX");

	# definimos unos valores por defecto para el navegador y el sistema operativo
	$info['browser'] = "OTHER";
	$info['os'] = "OTHER";

	# buscamos el navegador con su sistema operativo
	foreach($browser as $parent)
	{
		$s = strpos(strtoupper($_SERVER['HTTP_USER_AGENT']), $parent);
		$f = $s + strlen($parent);
		$version = substr($_SERVER['HTTP_USER_AGENT'], $f, 15);
		$version = preg_replace('/[^0-9,.]/','',$version);
		if ($s)
		{
			$info['browser'] = $parent;
			$info['version'] = $version;
		}
	}
	# obtenemos el sistema operativo
	foreach($os as $val)
	{
		if (strpos(strtoupper($_SERVER['HTTP_USER_AGENT']),$val)!==false)
			$info['os'] = $val;
	}
	return $info;
}

// Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}




 ?>
