<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www/w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Data Seleksi</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Pekerjaan
		<select name="job">
			<option value="Mahasiswa"
			<?php
				if(@$_POST['job'] == "Mahasiswa"){ 
					echo 'selected=selected';
				}
			?>
			>Mahasiswa <!--memeriksa apakah yang dipilih "Mahasiswa"-->
			
			<option value="ABRI" 
			<?php
				if(@$_POST['job'] == "ABRI"){ 
					echo 'selected=selected';
				}
			?>
			>ABRI <!--memeriksa apakah yang dipilih "ABRI"-->
			
			<option value="PNS" 
			<?php
				if(@$_POST['job'] == "PNS"){ 
					echo 'selected=selected';
				}
			?>
			>PNS <!--memeriksa apakah yang dipilih "PNS"-->
			
			<option value="Swasta" 
			<?php
				if(@$_POST['job'] == "Swasta"){ 
					echo 'selected=selected';
				}
			?>
			>Swasta <!--memeriksa apakah yang dipilih "Swasta"-->
		</select> <br />
		<input type="submit" value="ok" />
	</form>
<?php
	if (isset($_POST['job'])) {
	echo $_POST['job'];
}
?>
</body>
</html>