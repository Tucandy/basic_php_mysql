<!DOCTYPE html>
<html>
<head>
	<title>Cập nhật thông khách hàng</title>
</head>
<body>
	<?php
	//Lấy dữ liệu trên form
	$makh=$_POST['makh'];
	$tenkh=$_POST['tenkh'];
	//Kết nối đến MySQL
	include ("connect_db.php");
		if(!$con)
		{
			echo "Lỗi kết nối";
		}
		else
		{		
			echo "kết nôi thành công";  	
			$sql_update="update t_khachhang set makh='".$makh."',tenkh='".$tenkh."' where makh='".$makh."'";
			mysqli_query($con,$sql_update);	
			echo "\nthêm thành công\n";
             echo $sql_update;		
			header('location:ttkhachhang.php');
		}
	?>

</body>
</html>