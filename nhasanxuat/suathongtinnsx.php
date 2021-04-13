<!DOCTYPE html>
<html>
<head>
	<title>Sửa nhà sản xuất</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<style type="text/css">
	body {
		background-image: url("4.jpg");
	}</style>
</head>
<body>
	<?php
		$mansx=$_REQUEST['mansx'];
		
		include ("connect_db.php");	
		if(!$con)
		{
			echo "Lỗi kết nối";
            }else
            
		{
			$sql_hienthi="select * from t_nhasanxuat where mansx='".$mansx."'";
			$kq=mysqli_query($con,$sql_hienthi);
			if(mysqli_num_rows($kq)>0)
			{
				while($r=mysqli_fetch_array($kq))
				{
					$mansx=$r['mansx'];
                              $tennsx=$r['tennsx'];
                              $diachi=$r['diachi'];
                              $sdt=$r['sdt'];
                              
					
                  
				}
			}
		}
	?>
	<form action="updatensx.php" method="POST">
	<center>
		<h2>CẬP NHẬT THÔNG TIN DANH MỤC</h2>
		<table border="0" width="40%">
		<tr>
			<td> Mã nhà sản xuất</td>
			<td> <input type="text"  name ="mansx" value="<?php echo $mansx;?>" size="30" ></td>
            </tr>
            <tr>
			<td> Tên nhà sản xuất</td>
			<td> <input type="text"  name ="tennsx" value="<?php echo $tennsx;?>" size="30" ></td>
		</tr>
		<tr>
			<td>Địa chỉ</td>
			<td> <input type="text"   name = "diachi" value="<?php echo $diachi;?>" size="30"></td>
            </tr>
            <tr>
			<td>Số điện thoại</td>
			<td> <input type="text"   name = "sdt" value="<?php echo $sdt;?>" size="30"></td>
            </tr>
            <tr>
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