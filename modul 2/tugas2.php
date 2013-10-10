
<html>

<head>
  <title>Nita | Checkbox Data </title>
</head>

<body>
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    Hobby <br />
    <input type="checkbox" name="hobby[]" value="Membaca"  
    <?php
      if($_POST['hobby[]']="Membaca"){
        echo 'checked="checked"';
      }
    ?>    
    />Membaca <br /> <!--memeriksa apakah yang dipilih "Membaca"-->
    
    <input type="checkbox" name="hobby[]" value="Olahraga"  
    <?php
      if($_POST['hobby[]']="Olahraga"){
        echo 'checked="checked"';
      }
    ?>    
    />Olahraga <br /> <!--memeriksa apakah yang dipilih "Olahraga"-->
    
    <input type="checkbox" name="hobby[]" value="Menyanyi"  
    <?php
      if($_POST['hobby[]']="Menyanyi"){
        echo 'checked="checked"';
      }
    ?>    
    />Menyanyi <br /> <!--memeriksa apakah yang dipilih "menyanyi"-->

    <input type="submit" value="ok" />
  </form>
<?php
  // Ekstraksi nilai
  if (isset($_POST['hobby'])) {
    foreach ($_POST['hobby'] as $key => $val) {
    echo $key . ' -> ' .$val . '<br />';
    }
  }
?>
</body>
</html>