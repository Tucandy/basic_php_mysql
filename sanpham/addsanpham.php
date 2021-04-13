<!DOCTYPE html>
<html>
<head>
	<title>Thêm thông tin sản phẩm</title>
	<style type="text/css">
	body {
		background-image: url("3.jpg");
	}</style>
</head>
<body>

	<?php
	//Lấy dữ liệu trên form
	$masp=$_POST['masp'];
	$tensp=$_POST['tensp'];
	$giaban=$_POST['giaban'];
	$gianhap=$_POST['gianhap'];
	$mota=$_POST['mota'];
	$ngaynhap=$_POST['ngaynhap'];
      $madm=$_POST['madm'];
	$mansx=$_POST['mansx'];
	$soluong=$_POST['soluong'];
      // Kết nối đến SQL
	include ("connect_db.php");
	if(!$con){
		echo "Lỗi kết nối";
	}
	else{	
		echo "kết nôi thành công";  
		$target_dir = "img/";
		$target_file = $target_dir.basename($_FILES["img"]["name"]);
		if($_FILES["img"]["error"] != 0 ){
		exit();
		}else{
		move_uploaded_file($_FILES["img"]["tmp_name"],$target_file);
		$hinh =  $_FILES["img"]["name"];
			}
			
		$sql_insert="insert into t_sanpham value ('".$masp."','".$tensp."','".$giaban."'
		,'".$gianhap."','".$mota."','".$hinh."','".$ngaynhap."','".$madm."','".$mansx."','".$soluong."')";
		echo $sql_insert;
			$tv = mysqli_query($con,$sql_insert);
			header('location:ttsanpham.php');
	}
	
 ?>
  
 </body>
</html>