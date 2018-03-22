<?php
  include("conection.php");
  $query = mysqli_query($conn,"select * from tbl_xe order by rand() limit 4"); 
  while($row= mysqli_fetch_array($query)){?>
<div class="col-md-3">
  <div class="xe"> <img src="<?php echo $row['hinhanh'] ?>">
    <div class="tenxe"> <?php echo $row["tenxe"] ?> </div>
    <div class="giaxe"> <a style="color:blue; margin-left:40px;">Đơn Giá: <?php echo $row["dongia"] ?> vnd/giờ</a> </div>
    <div class="datxe">
      <button class="btn btn-success" style="border-radius: 15px">Đặt xe</button>
    </div>
  </div>
</div>
<?php }?>