<html>
<head>
	<title>Menghapus Cookie</title>
</head>
<body>
<?php 
setcookie("my_cookie", 1234);

if (isset($_COOKIE['my_cookie'])) {
	echo "Cookie telah diset";
	setcookie("my_cookie", "", time()-3*3600);
	echo "cookie Dihapus";
}
else
{
	echo "unset";

}
 ?>
 <h4>Tekan Refresh (F5)</h4>
</body>
</html>