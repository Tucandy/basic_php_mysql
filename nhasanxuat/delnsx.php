<!DOCTYPE html>
<html>
<head>
	<title>Xóa nhà sản xuất</title>
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
			$mansx=$_REQUEST['mansx'];
			$sql_del="delete from t_nhasanxuat where mansx='".$mansx."'";
			mysqli_query($con,$sql_del);
			header('location:ttnsx.php');
		}
	?>
</body>
</html>