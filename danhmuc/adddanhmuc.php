<!DOCTYPE html>
<html>
<head>
	<title>Thêm thông tin danh mục</title>
</head>
<body>

	<?php
	//Lấy dữ liệu trên form
	$madm=$_POST['madm'];
	$tendm=$_POST['tendm'];
      // Kết nối đến SQL
	include ("connect_db.php");
	if(!$con){
		echo "Lỗi kết nối";
	}
	else{	
		echo "kết nôi thành công";  
			
		$sql_insert="insert into t_danhmuc value ('".$madm."','".$tendm."')";
		echo $sql_insert;
			$tv = mysqli_query($con,$sql_insert);
			header('location:ttdanhmuc.php');
	}
	
 ?>
  
 </body>
</html>