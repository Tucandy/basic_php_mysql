<!DOCTYPE html>
<html>
<head>
	<title>Xóa chi tiết hóa đơn</title>
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
			$sql_del="delete from t_hoadonchitiet where mahd='".$mahd."'";
			mysqli_query($con,$sql_del);
			header('location:tthoadonchitiet.php');
		}
	?>
</body>
</html>