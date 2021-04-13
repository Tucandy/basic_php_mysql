<!DOCTYPE html>
<html>
<head>
	<title>Thêm User</title>
</head>
<body>

	<?php
	//Lấy dữ liệu trên form
	$id=$_POST['id'];
	$username=$_POST['username'];
      $password=$_POST['password'];
	$email=$_POST['email'];
      // Kết nối đến SQL
	include ("connect_db.php");
	if(!$con){
		echo "Lỗi kết nối";
	}
	else{	

		$sql_insert="insert into t_taikhoan value ('".$id."','".$username."','".$password."','".$email."')";

		$sql_kt="select * from t_taikhoan where username='".$username."'";
		$kt=mysqli_query($con,$sql_kt);
		if(mysqli_num_rows($kt)>0)
		{
			echo"Username đã tồn tại ";	

		} 
		else
		{
			mysqli_query($con,$sql_insert);
			echo "Thêm thành công" ;
		}
	}     
 ?>
 </body>
</html>