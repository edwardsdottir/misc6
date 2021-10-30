<?php header("X-XSS-Protection: 0");
  $fix_path=str_replace(DIRECTORY_SEPARATOR,'/',dirname(__FILE__));
  $protocol=empty($_SERVER['HTTPS'])||$_SERVER['HTTPS']==='off'?'http://':'https://';
  $path=str_replace($_SERVER['DOCUMENT_ROOT'],'',$fix_path);
  $fix=$protocol.$_SERVER['SERVER_NAME'].$path;
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>IP Address</title>
</head>
<body>

	<pre>
	<?php
  		if (!(preg_match('/^\d{1,3}\.\d{1,3}\.\d{1,3}.\d{1,3}$/', $_GET['ip']))) {

		}

		system("ping -c 2 " . $_GET['ip']);
		
	?>	
	</pre>

</body>
</html>
