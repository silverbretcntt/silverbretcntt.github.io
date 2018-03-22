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
<table border="1" cellpadding="1">
	<tr>
		<th>UserName</th>
		<th>PassWord</th>
		<th>Họ Tên</th>
		<th>Địa Chỉ</th>
		<th>Số Điện Thoại</th>
		<th>Email</th>
		<th>Role</th>
		<th>Edit</th>
	</tr>
	<tr>
		<td>phu</td>
		<td>phu</td>
		<td>Nguyễn Văn Phú</td>
		<td>Vinh - Nghệ An</td>
		<td>0966496793</td>
		<td>nguyenvanphucntt@gmail.com</td>
		<td style="text-align: center;">0</td>
		<td>Sửa - Xóa</td>
	</tr>
</table>
</div>
