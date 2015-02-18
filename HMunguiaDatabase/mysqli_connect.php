<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

DEFINE ('DB_USER', 'hm968');
DEFINE ('DB_PASSWORD', 'hayleyisamazing');
DEFINE ('DB_HOST', 'warehouse');
DEFINE ('DB_NAME', 'hm968_db_2');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die
('Could not connect to
 	MySQL: ' . mysqli_connect_error() );




?>
</body>
</html>