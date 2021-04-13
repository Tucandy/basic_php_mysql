<!DOCTYPE html>
<html>
<head>
	<title>Xóa danh mục</title>
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
			$madm=$_REQUEST['madm'];
			$sql_del="delete from t_danhmuc where madm='".$madm."'";
			mysqli_query($con,$sql_del);
			header('location:ttdanhmuc.php');
		}
	?>
</body>
</html>