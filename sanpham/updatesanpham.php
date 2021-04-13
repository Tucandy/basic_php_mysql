<!DOCTYPE html>
<html>
<head>
	<title>Cập nhật thông tin sản phẩm</title>
	<style type="text/css">
	body {
		background-image: url("3.jpg");
	}</style>
</head>

<body>
	<?php
	
	$masp=$_POST['masp'];
	$tensp=$_POST['tensp'];
	$giaban=$_POST['giaban'];
	$gianhap=$_POST['gianhap'];
	$mota=$_POST['mota'];
	$img = $_POST['img'];
	$ngaynhap=$_POST['ngaynhap'];
      $madm=$_POST['madm'];
      $mansx=$_POST['mansx'];
	$soluong=$_POST['soluong'];
	include ("connect_db.php");
		if(!$con)
		{
			echo "Lỗi kết nối";
		}
		else
		{		
			echo "kết nôi thành công";  	
			$sql_update="update t_sanpham set masp='".$masp."',tensp='".$tensp."', giaban='".$giaban."',gianhap='".$gianhap."', mota='".$mota."',img='".$img."',ngaynhap='".$ngaynhap."' ,madm='".$madm."',mansx='".$mansx."',soluong='".$soluong."' where masp='".$masp."'";
			mysqli_query($con,$sql_update);	
			echo "\nthêm thành công\n";
             echo $sql_update;		
			header('location:ttsanpham.php');
		}
	?>

</body>
</html>