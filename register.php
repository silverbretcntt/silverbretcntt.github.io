<?php
session_start();
include('header.php');
?>
	<?php
		require_once("conection.php");
		if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			$username = $_POST["username"];
  			$password = $_POST["pass"];
 			 $name = $_POST["name"];
  			$email = $_POST["email"];
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($username == "" || $password == "" || $name == "" || $adress == "" || $phone == "" || $birthday == "" || $email == "") {
				   echo '<script language="javascript">alert("Vui lòng điền đầy đủ thông tin !");</script>';
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from users where username='$username'";
					$kt=mysqli_query($conn, $sql);
 
					if(mysqli_num_rows($kt)  > 0){
						echo "Tài khoản đã tồn tại";
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql = "INSERT INTO tbl_user(
	    					username,
	    					password,
	    					name,
						    adress,
						    phonenumber,
						    birthday,
						    email

	    					) VALUES (
	    					'$username',
	    					'$password',
						    '$name',
	    					'$adress',
	    					'$phonenumber',
	    					'$birthday',
	    					'$email'
	    					)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
   						mysqli_query($conn,$sql);
				   		echo "Chúc mừng bạn đã đăng ký thành công";
					}
									    
					
			  }
	}
	?>
	<div class="dangnhap">
	<form class="register" action="register.php" method="post">
		<table>
			<tr>
				<td id="formtext" colspan="2">Đăng ký tài khoản</td>
			</tr>	
			<tr>
				<td>Username :</td>
				<td><input type="text" id="username" name="username"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" id="pass" name="pass"></td>
			</tr>
			<tr>
				<td>Ho Ten :</td>
				<td><input type="text" id="name" name="name"></td>
			</tr>
			<tr>
				<td>Địa chỉ :</td>
				<td><input type="text" id="adress" name="adress"></td>
			</tr>
			<tr>
				<td>Số ĐT :</td>
				<td><input type="text" id="phone" name="phone"></td>
			</tr>
			<tr>
				<td>Ngày Sinh :</td>
				<td><input type="text" id="birthday" name="birthday"></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="text" id="email" name="email"></td>
			</tr>
			<tr>
				<td id="btndangky" colspan="2" align="center"><input  class='btn btn-success' type="submit" name="btn_submit" value="Đăng Ký"></td>
			</tr>
 
		</table>
		
	</form>
</div>
<?php
include('footer.php');
?>