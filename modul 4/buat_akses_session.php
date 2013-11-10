<html>
<head>
	<title>Membuat dan Mengakses Session</title>
</head>
<body>
<?php 
session_start();

if (!isset($_SESSION['test'])) {
	$_SESSION['test']="SessionValue";
}
else
{
	echo "session di-set";
	echo "Isi Session:". $_SESSION['test']."<br/>";

	print_r($_SESSION);
}
 ?>

 <h4>Tekan Refresh(F5)</h4>
</body>
</html>