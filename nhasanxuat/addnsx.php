<!DOCTYPE html>
<html>
<head>
	<title>Thêm thông tin nhà sản xuất</title>
</head>
<body>

	<?php
	//Lấy dữ liệu trên form
	$mansx=$_POST['mansx'];
      $tennsx=$_POST['tennsx'];
      $diachi=$_POST['diachi'];
	$sdt=$_POST['sdt'];
      // Kết nối đến SQL
	include ("connect_db.php");
	if(!$con){
		echo "Lỗi kết nối";
	}
	else{	
		echo "kết nôi thành công";  
			
		$sql_insert="insert into t_nhasanxuat value ('".$mansx."','".$tennsx."','".$diachi."','".$sdt."')";
		echo $sql_insert;
			$tv = mysqli_query($con,$sql_insert);
			header('location:ttnsx.php');
	}
	
 ?>
  
 </body>
</html>