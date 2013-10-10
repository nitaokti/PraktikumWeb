<html>

<head>
  <title>Data Seleksi</title>
</head>

<body>
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    Bulan Kelahiran
    <select name="bulan">
      <option value="Januari"
      <?php
        if(@$_POST['bulan'] == "Januari"){ 
          echo 'selected=selected';
        }
      ?>
      >Januari <!--memeriksa apakah yang dipilih "Januari"-->
      
		<option value="Februari"
      <?php
        if(@$_POST['bulan'] == "Februari"){ 
          echo 'selected=selected';
        }
      ?>
      >Februari <!--memeriksa apakah yang dipilih "Februari"-->
      
     <option value="Maret"
      <?php
        if(@$_POST['bulan'] == "Maret"){ 
          echo 'selected=selected';
        }
      ?>
      >Maret <!--memeriksa apakah yang dipilih "Maret"-->

      
      <option value="April" 
      <?php
        if(@$_POST['bulan'] == "April"){ 
          echo 'selected=selected';
        }
      ?>
      >April <!--memeriksa apakah yang dipilih "April"-->
    </select> <br />
    <input type="submit" value="ok" />
  </form>
<?php
  if (isset($_POST['job'])) {
  echo $_POST['job'];
}
?>
+</body>
+</html>