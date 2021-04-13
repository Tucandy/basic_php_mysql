<!DOCTYPE html>
<html>
<head>
	<title>Cập nhật thông tin sản phẩm</title>
	<style type="text/css">
	body {
		background-image: url("5.jpg");
	}</style>
</head>
<body>
	<?php
	//Lấy dữ liệu trên form
	$madm=$_POST['madm'];
	$tendm=$_POST['tendm'];
	//Kết nối đến MySQL
	include ("connect_db.php");
		if(!$con)
		{
			echo "Lỗi kết nối";
		}
		else
		{		
			echo "kết nôi thành công";  	
			$sql_update="update t_danhmuc set madm='".$madm."',tendm='".$tendm."' where madm='".$madm."'";
			mysqli_query($con,$sql_update);	
			echo "\nthêm thành công\n";
             echo $sql_update;		
			header('location:ttdanhmuc.php');
		}
	?>

</body>
</html>