<!DOCTYPE html>
<html>
<head>
	<title>Thêm thông tin nhân viên</title>
	<style type="text/css">
	body {
		background-image: url("2.jpg");
	}</style>
</head>
</head>
<body>

	<?php
	//Lấy dữ liệu trên form
	$manv=$_POST['manv'];
	$tennv=$_POST['tennv'];
	$diachi=$_POST['diachi'];
	$sdt=$_POST['sdt'];
      // Kết nối đến SQL
	include ("connect_db.php");
	if(!$con){
		echo "Lỗi kết nối";
	}
	else{
			
		$sql_insert="insert into t_nhanvien value ('".$manv."','".$tennv."','".$diachi."','".$sdt."')";
		echo $sql_insert;
			$tv = mysqli_query($con,$sql_insert);
			header('location:ttnhanvien.php');
	}
	
 ?>
  
 </body>
</html>