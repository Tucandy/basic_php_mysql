<!DOCTYPE html>
<html>
<head>
	<title>Quản Lý danh mục</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
	body {
		background-image: url("5.jpg");
	}</style>
</head>
<body >
<form action= "adddanhmuc.php" method ="POST" enctype="multipart/form-data">
		<center>
			<h3>Thêm thông danh mục</h3>
			<table border="0" width="40%">
         <tr>
			<td> Mã danh mục</td>
			<td> <input type="text" class="boder-sanpham" name =" madm" size="30" placeholder="Nhập mã danh mục" required><font color="red">(*)</font></td>
		</tr>
		<tr>
			<td>Tên danh mục</td>
			<td> <input type="text" class="boder-sanpham" name = "tendm" placeholder="Nhập tên danh mục" size="30" required><font color="red">(*)</font></td>
		</tr>
		
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr align="center">
		<td colspan="2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" name="" value="Nhập lại" >
		    <input type="submit" name="submit" value="Thêm">
		</tr>
</table>
</center>
</form>
</body>
</html>