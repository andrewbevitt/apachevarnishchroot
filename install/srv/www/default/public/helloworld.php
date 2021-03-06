<html>
<head><title>Hello World</title></head>
<body>
	<h1>Sorry that site is not hosted here!</h1>
	<p>This message is displayed for any hostnames that attempt to use
	this server but are not actually hosted on this server. If you are
	a site or domain administrator check your DNS settings.</p>
	<ul>
		<li>Referer: <?php print(array_key_exists('HTTP_REFERER', $_SERVER) ? $_SERVER['HTTP_REFERER']: 'none'); ?></li>
		<li>Your IP: <?php print(array_key_exists('REMOTE_ADDR', $_SERVER) ? $_SERVER['REMOTE_ADDR'] : 'unknown'); ?></li>
		<li>Browser: <?php print(array_key_exists('HTTP_USER_AGENT', $_SERVER) ? $_SERVER['HTTP_USER_AGENT'] : 'unknown'); ?></li>
	</ul>
	<p>If you are browsing a <strong>SSL</strong> secured site and you are sure the
	address is correct then you are probably browsing with a client that does not
	support <em>server name indication</em>. This usually means you are using Internet
	Explorer on Windows XP. <strong>You should
	<a href="http://browsehappy.com/">upgrade your browser</a>.</strong></p>
</body>
</html>
