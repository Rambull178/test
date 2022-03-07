<html>
  <head>
    <title>6B Collection</title>
   <link rel="stylesheet" href="style.css">
   <script src="index.php"></script>
  </head>
  <body>
    <div class="header">
      <p class="title">6B Collection</p>
       <p class="mini-title">Welcome to 6 Baji Collection</p>
    </div><br><br>
  <form method="POST" action="#">
  <div class="content">
    <input class="input" name="username" type="text" placeholder="Username">
  </div>
 <div class="content">
<input class="input" name="password" type="text" placeholder="Password"></div><div class="content">
 <button class="button-login">Login</button></div><br><center><a href="#" class="mini-title">Create new Account</a></center>
 </form>
  </body>
</html>
<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "demo";

mysql_connect($host,$user,$password);
mysql_select_db($db)

if(isset(['username'])){
  $uname=$_POST['username'];
  $password=$_POST['password']
  
  $sql="select * from loginform where User='".$uname."'AND Pass='".$password."' limit 1";

  $result=mysql_query($sql);
  
  if(mysql_num_rows($result)==1){
    echo " Kamu Telah Login ";
    exit();
  }
  else{
  echo " Kamu Tidak Bisa Login ";
  }
}
?>