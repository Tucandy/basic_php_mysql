<!DOCTYPE html>
<html>
<head>
	<title>Cập nhật thông tin nhân viên</title>
	<style type="text/css">
	body {
		background-image: url("2.jpg");
	}</style>
</head>
<body>
	<?php
	//Lấy dữ liệu trên form
	$manv=$_POST['manv'];
	$tennv=$_POST['tennv'];
	$diachi=$_POST['diachi'];
	$sdt=$_POST['sdt'];
	$gioitinh=$_POST['gioitinh'];
	//Kết nối đến MySQL
	include ("connect_db.php");
		if(!$con)
		{
			echo "Lỗi kết nối";
		}
		else
		{		
			echo "kết nôi thành công";  	
			$sql_update="update t_nhanvien set manv='".$manv."',tennv='".$tennv."',diachi='".$diachi."',sdt='".$sdt."',sdt='".$gioitinh."' where manv='".$manv."'";
			mysqli_query($con,$sql_update);	
			echo "\nthêm thành công\n";
             echo $sql_update;		
			header('location:ttnhanvien.php');
		}
	?>

</body>
</html>