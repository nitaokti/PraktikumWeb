<!DOCTYPE html><head>

<title>Tugas Praktikum</title>
<script type="text/javascript">
function validation() {  //fungsi validasi
  var username = formlogin.username.value; //var username mengakses value dari username formlogin 
  var passwd = formlogin.password.value;  //var passwd mengakses value password formlogin
  var valid = /^[A-Za-z]{1,}$/;  //validasi huruf 
  
  if (passwd=='' && username=='') { //cek apakah value username dan passwd kosong
   alert("Username and Password harus diisi!"); 
  formlogin.username.focus(); //focus kembali pada textbox username
  return false;  
  } else if (passwd==''){ //cek apakah value passwd kosong
    alert("Password harus diisi!"); 
  formlogin.password.focus(); //focus kembali pada password
  return false;  
  } else if (username==''){  // cek apakah value username kosong
  alert("Username harus diisi!");
  formlogin.username.focus(); //focus kembali pada username
  return false;  
  } else if (username !='' && passwd!='' && !username.match(valid) || !passwd.match(valid)){ //cek apakah username dan passwd hanya huruf
  alert("Username/password tidak valid!");
  formlogin.username.value = ""; //mengosongi username
  formlogin.password.value = ""; //mengosongi password
  formlogin.username.focus(); //focus kembali pada username
  return false;  
  } 
 
  }
</script>
</head>

<body bgcolor="#c9e6f8">
<center>
<div>
  <div style="background-color:#f0f8fc;width:450px;height:300px;border:5px solid #6badf6; margin-top:100px;"> 
  <h1 style="color:#3b5998">Login</h1>
  <hr width="350px" color="#6badf6">
  <br />
  
  <form name="formlogin" method="post" action="login.php" onSubmit="return validation()" > <!-- memanggil fungsi validation dan aksi login.php saat submit ditekan -->
  Username <br />
  <input type="text" name="username" value="" size="35px"/><br />
  Password <br />
  <input type="password" name="password" size="35px"/><br /><br />
  <input type="submit" name="Login" value="Login">
  </form>
  
  </div>
</div>
</center>

</body>
</html>