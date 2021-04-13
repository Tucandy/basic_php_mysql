<!DOCTYPE html>
<html>
<head>
	<title>Xóa thông tin sản phẩm</title>
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
			$masp=$_REQUEST['masp'];
			$sql_del="delete from t_sanpham where masp='".$masp."'";
			mysqli_query($con,$sql_del);
			header('location:ttsanpham.php');
		}
	?>
</body>
</html>