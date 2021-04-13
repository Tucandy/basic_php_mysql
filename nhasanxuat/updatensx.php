<!DOCTYPE html>
<html>
<head>
	<title>Cập nhật thông tin nhà sản xuất</title>
	<style type="text/css">
	body {
		background-image: url("4.jpg");
	}</style>
</head>
<body>
	<?php
	//Lấy dữ liệu trên form
	$mansx=$_POST['mansx'];
      $tennsx=$_POST['tennsx'];
      $diachi=$_POST['diachi'];
	$sdt=$_POST['sdt'];
	//Kết nối đến MySQL
	include ("connect_db.php");
		if(!$con)
		{
			echo "Lỗi kết nối";
		}
		else
		{		
			echo "kết nôi thành công";  	
			$sql_update="update t_nhasanxuat set mansx='".$mansx."',tennsx='".$tennsx."',diachi='".$diachi."',sdt='".$sdt."'  where mansx='".$mansx."'";
			mysqli_query($con,$sql_update);	
			echo "\nthêm thành công\n";
             echo $sql_update;		
			header('location:ttnsx.php');
		}
	?>

</body>
</html>