<html>
<head>
	<title>Hapus Session</title>
</head>
<body>
<?php 
session_start();

if (isset($_SESSION['test'])) {
	unset($_SESSION['test']);
	echo "Session Dihapus";
}
else
{
	echo "unset";
	print_r($_SESSION['test']);
}
 ?>

 <h4>Tekan Refresh(F5)</h4>
</body>
</html>