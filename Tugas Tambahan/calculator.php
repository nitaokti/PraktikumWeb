<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Nita | Kalkulator</title>
</head>
<p> Tugas Praktikum Pemrograman Web </p>
<p> Kalkulator </p>
<body>
<?php 
	$bil1=@$_POST['bil1'];
	$bil2=@$_POST['bil2'];
	$operator=@$_POST['operator'];

	if ($operator=='+') {
		$hasil = $bil1 + $bil2;
	}elseif ($operator=='-') {
		$hasil = $bil1 - $bil2;
	}elseif ($operator=='x') {
		$hasil = $bil1 * $bil2;
	}elseif ($operator=='/') {
		$hasil = $bil1 / $bil2;
	}
?>
<form id="calculator" name="form1" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
  <input type="text" name="bil1" value="<?php 
		echo isset($_POST['bil1']) ? $_POST['bil1']:''
	?>">
  <select name="operator">
  			<option value="+"
            <?php
			if (@$_POST['operator'] == '+') { 
				echo 'selected="selected"';	
			}
			?> 
            >+
			
            <option value="-"
            <?php
			if (@$_POST['operator'] == '-') {
				echo 'selected="selected"';	
			}
			?> 
            >-
			
            <option value="x"
            <?php
			if (@$_POST['operator'] == 'x') { 
				echo 'selected="selected"';	
			}
			?> 
            >x
            
			<option value="/"
            <?php
			if (@$_POST['operator'] == '/') { 
				echo 'selected="selected"';	
			}
			?> 
            >/
  </select>
  <input type="text" name="bil2" id="bil2" value = "<?php 
		echo isset($_POST['bil2']) ? $_POST['bil2']:''
	?>"/>
  <input type="submit" name="equal" id="equal" value="=" />
  <input type="text" name="hasil" id="hasil" value="<?php 
		echo isset($hasil) ? $hasil:''
	?>"/>
</form>


</body>
</html>