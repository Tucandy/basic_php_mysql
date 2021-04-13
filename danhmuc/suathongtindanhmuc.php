<!DOCTYPE html>
<html>
<head>
	<title>Sửa danh mục</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<style type="text/css">
	body {
		background-image: url("5.jpg");
	}</style>
</head>
<body>
	<?php
		$madm=$_REQUEST['madm'];
		//kết nối
		//SQL => thực thi
		//trình bày
		include ("connect_db.php");	
		if(!$con)
		{
			echo "Lỗi kết nối";
            }else
            
		{
			$sql_hienthi="select * from t_danhmuc where madm='".$madm."'";
			$kq=mysqli_query($con,$sql_hienthi);
			if(mysqli_num_rows($kq)>0)
			{
				while($r=mysqli_fetch_array($kq))
				{
					$madm=$r['madm'];
					$tendm=$r['tendm'];
					
                  
				}
			}
		}
	?>
	<form action="updatedanhmuc.php" method="POST">
	<center>
		<h2>CẬP NHẬT THÔNG TIN DANH MỤC</h2>
		<table border="0" width="40%">
		<tr>
			<td> Mã danh mục</td>
			<td> <input type="text" class="boder-sanpham" name ="madm" value="<?php echo $madm;?>" size="30" ></td>
		</tr>
		<tr>
			<td>Tên danh mục</td>
			<td> <input type="text" class="boder-sanpham"  name = "tendm" value="<?php echo $tendm;?>" size="30"></td>
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