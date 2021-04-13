<!DOCTYPE html>
<html>
<head>
	<title>Thêm chi tiết hóa đơn</title>
	
</head>
<body>

	<?php
	//Lấy dữ liệu trên form
	$mahd=$_POST['mahd'];
	$tenhd=$_POST['masp'];
      $makh=$_POST['soluong'];
      // Kết nối đến SQL
	include ("connect_db.php");
	if(!$con){
		echo "Lỗi kết nối";
	}
	else{	
		
		$sql_insert="insert into t_hoadonchitiet value ('".$mahd."','".$masp."','".$soluong."')";
		echo $sql_insert;
			$tv = mysqli_query($con,$sql_insert);
			header('location:tthoadonchitiet.php');
	}
	
 ?>
  
 </body>
</html>