<html>
<head>
<title>Sample</title>
</head>
<body>
<?php
$localIP = getHostByName(php_uname('n'));
$localIP2 = getHostByName(getHostName());


if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

//echo $_SERVER['HTTP_CLIENT_IP']+"\n";
//echo $_SERVER['HTTP_X_FORWARDED_FOR']+"\n";

echo $localIP;
echo $localIP2;
echo $ip;
echo "hiiii";
echo $_SERVER['REMOTE_ADDR'];
echo $_SERVER['SERVER_ADDR'];
echo $_SERVER['SERVER_NAME'];
?>
</body>
</html>