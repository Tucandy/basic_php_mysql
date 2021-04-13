<!DOCTYPE html>
<html>
<head>
	<title>Xóa thông tin khách hàng</title>
</head>
<body>
	<?php
		include ("connect_db.php");	
		if(!$con)
		{
			echo "Lỗi kết nối";
		}else
		{
			echo "kết nôi thành công";
			$makh=$_REQUEST['makh'];
			$sql_del="delete from t_khachhang where makh='".$makh."'";
			mysqli_query($con,$sql_del);
			header('location:ttkhachhang.php');
		}
	?>
</body>
</html>