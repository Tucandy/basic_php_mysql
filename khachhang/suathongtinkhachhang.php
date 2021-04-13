<!DOCTYPE html>
<html>
<head>
	<title>Sửa khách hàng</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<style type="text/css">
	body {
		background-image: url("1.jpg");
	}</style>
</head>
<body>
	<?php
		$makh=$_REQUEST['makh'];
		//kết nối
		//SQL => thực thi
		//trình bày
		include ("connect_db.php");	
		if(!$con)
		{
			echo "Lỗi kết nối";
            }else
            
		{
			$sql_hienthi="select * from t_khachhang where makh='".$makh."'";
			$kq=mysqli_query($con,$sql_hienthi);
			if(mysqli_num_rows($kq)>0)
			{
				while($r=mysqli_fetch_array($kq))
				{
					$makh=$r['makh'];
					$tenkh=$r['tenkh'];
					
                  
				}
			}
		}
	?>
	<form action="updatekhachhang.php" method="POST">
	<center>
		<h2>CẬP NHẬT THÔNG TIN KHÁCH HÀNG</h2>
		<table border="0" width="40%">
		<tr>
			<td> Mã khách hàng</td>
			<td> <input type="text" name ="makh" value="<?php echo $makh;?>" size="30" ></td>
		</tr>
		<tr>
			<td>Tên khách hàng</td>
			<td> <input type="text"  name = "tenkh" value="<?php echo $tenkh;?>" size="30"></td>
		</tr>
            </tr>
			<td colspan="2">&nbsp;</td>
		</tr>
			<tr align="center">
				<td colspan="2"><input type="submit" name="" value="Update"></td>
			</tr>

		</table>
<hr>
	</center>
	</form>

</body>
</html>