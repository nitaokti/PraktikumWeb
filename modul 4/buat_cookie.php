<html>
<head>
	<title>Membuat cookie</title>
</head>
<body>
<?php 
setcookie('my_cookie', "abcd1234");

echo $_COOKIE['my_cookie'];
 ?>

 <h4>Tekan F5(Refresh)</h4>
</body>
</html>