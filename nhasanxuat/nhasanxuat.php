<!DOCTYPE html>
<html>
<head>
	<title>Quản Lý nhà sản xuất</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
	body {
		background-image: url("4.jpg");
	}</style>
</head>
<body >
<form action= "addnsx.php" method ="POST" enctype="multipart/form-data">
		<center>
			<h3>Thêm nhà sản xuất</h3>
			<table border="0" width="40%">
         <tr>
			<td> Mã nhà sản xuất</td>
			<td> <input type="text"  name =" mansx" size="30" placeholder="Nhập mã nhà sản xuất" required><font color="red">(*)</font></td>
		</tr>
		<tr>
			<td>Tên nhà sản xuất</td>
			<td> <input type="text"  name = "tennsx" placeholder="Nhập tên nhà sản xuất" size="30" required><font color="red">(*)</font></td>
            </tr>
            <tr>
			<td>Địa chỉ</td>
			<td> <input type="text"  name = "diachi" placeholder="Nhập địa chỉ" size="30" required><font color="red">(*)</font></td>
		</tr>
		<tr>
			<td>Số điện thoại</td>
			<td> <input type="text"  name = "sdt" placeholder="Nhập số điện thoại" size="30" required><font color="red">(*)</font></td>
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