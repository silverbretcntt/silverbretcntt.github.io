<?php
session_start();
include('header.php');
?>
<link rel="stylesheet" type="text/css" href="css/admin.css">
<div class="hello">
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
<div id="menulist">
 <ul>
 <li><a href="admin.php">Quản Lý Người Dùng</a></li>
 <li><a href="xe.php">Thêm Sửa Xe</a></li>
 <li><a href="#">Khách Hàng Đặt Xe</a></li>
 </ul>
</div>
<div class="content">
<table border="1" cellpadding="5">
	<tr>
		<th>Mã Xe</th>
		<th>Hãng Xe</th>
		<th>Tên Xe</th>
		<th>Màu</th>
		<th>Chỗ Ngồi</th>
		<th>Đơn Giá</th>
		<th>Hình Ảnh</th>
		<th>Edit</th>
	</tr>
	<tr>
		<td>Xe01</td>
		<td>Lambor</td>
		<td>Aventador</td>
		<td>Đỏ</td>
		<td style="text-align: center;">2</td>
		<td>200000</td>
		<td style="text-align: center;">1.jpg</td>
		<td>Sửa - Xóa</td>
	</tr>
</table>
</div>
<a class="them" href="#"> <button class="btn btn-success" type="button">Thêm Xe</button></a>
