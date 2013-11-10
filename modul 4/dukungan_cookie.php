<html>
<head>
	<title>Cek Dukungan Cookie</title>
</head>
<body>
	<?php 
		if (isset($_GET['q']) && $_GET['q']==1) {
			if (isset($_COOKIE['test'])) {
				echo "Cookie Enabled";
			}
			else{
				echo "Cookie Disabled";
			}
		}
		else
		{
			setcookie('test', 'aku cookie');
			$self=$_SERVER['PHP_SELF'];

			header("Location:".$self."?q=1");
		}
	 ?>

	 <h4>Tekan Refresh (F5)</h4>
</body>
</html>