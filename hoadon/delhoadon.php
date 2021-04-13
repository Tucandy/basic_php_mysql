<!DOCTYPE html>
<html>
<head>
	<title>Xóa hóa đơn</title>
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
			$mahd=$_REQUEST['mahd'];
			$sql_del="delete from t_hoadon where mahd='".$mahd."'";
			mysqli_query($con,$sql_del);
			header('location:tthoadon.php');
		}
	?>
</body>
</html>