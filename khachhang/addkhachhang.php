<!DOCTYPE html>
<html>
<head>
	<title>Thêm thông khách hàng</title>
</head>
<body>

	<?php
	//Lấy dữ liệu trên form
	$makh=$_POST['makh'];
	$tenkh=$_POST['tenkh'];
      // Kết nối đến SQL
	include ("connect_db.php");
	if(!$con){
		echo "Lỗi kết nối";
	}
	else{
			
		$sql_insert="insert into t_khachhang value ('".$makh."','".$tenkh."')";
		echo $sql_insert;
			$tv = mysqli_query($con,$sql_insert);
			header('location:ttkhachhang.php');
	}
	
 ?>
  
 </body>
</html>