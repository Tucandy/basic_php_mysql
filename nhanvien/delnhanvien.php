<!DOCTYPE html>
<html>
<head>
	<title>Xóa thông tin nhân viên</title>
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
			$manv=$_REQUEST['manv'];
			$sql_del="delete from t_nhanvien where manv='".$manv."'";
			mysqli_query($con,$sql_del);
			header('location:ttnhanvien.php');
		}
	?>
</body>
</html>