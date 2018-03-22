<?php
session_start();
include('header.php');?>
<div class="container">
  <div class="row" id="header">
    <div class="col-md-6">
     <a href="index.php">
      <img src="images/logo.png" alt="Realestate"/>
    </a>
  </div>
  <?php
  if(isset($_SESSION["username"])){
    echo"<div class='logout' style='padding: 50px 0;padding-left: 350px'><p>Xin chào ".$_SESSION["username"]."</p><a href='logout.php'>Logout</a><div>";
  }
  else{

    echo"<div id='login' class='canmenu' style='padding: 50px 0;padding-left: 300px' >
    <form action='login.php'>
    <input type='submit' class='btn btn-success' value='Đăng Nhập'>
    </form>
    </div>

    <div id='creat' class='canmenu'style='padding: 50px 0; padding-left: 10px' >
    <form action='register.php'>
    <input type='submit' class='btn btn-primary' value='Đăng Ký''>
    </form>
    </div>";
  }
  ?> 
</div>
</div>
</div>
</div>

<!--
<div class="col-md-6" style="margin: 30px 0">
    <div style="width: 100%; text-align:right; margin: 10px 0">
     <a href="login.php"> <button class="btn btn-success" type="button">Đăng nhập</button></a>
      <a href="register.php"><button class="btn btn-primary" type="button">Đăng ký</button></a>
    </div>
  -->
  <div id="banner"></div>
</div>
<div class="container" style="padding: 50px 0">
  <div class="row">
    <?php include("sanpham.php"); ?>
  </div>
</div>
<div class="container" style="padding: 50px 0">
  <div class="row">
    <?php include("sanpham.php"); ?>
  </div>
</div>
</div>
</div>
</div>


<?php
include('footer.php');
?>
