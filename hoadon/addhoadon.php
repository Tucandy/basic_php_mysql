<!DOCTYPE html>
<html>
<head>
	<title>Thêm hóa đơn</title>
	
</head>
<body>

	<?php
	//Lấy dữ liệu trên form
	$mahd=$_POST['mahd'];
	$tenhd=$_POST['tenhd'];
      $makh=$_POST['makh'];
      $sdt=$_POST['sdt'];
      $diachi=$_POST['diachi'];
	$manv=$_POST['manv'];
      // Kết nối đến SQL
	include ("connect_db.php");
	if(!$con){
		echo "Lỗi kết nối";
	}
	else{	
		
		$sql_insert="insert into t_hoadon value ('".$mahd."','".$tenhd."','".$makh."'
		,'".$sdt."','".$diachi."','".$manv."')";
		echo $sql_insert;
			$tv = mysqli_query($con,$sql_insert);
			header('location:tthoadon.php');
	}
	
 ?>
  
 </body>
</html>