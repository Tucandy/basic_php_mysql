<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="sanpham.css">
	<title>Quản Lý Nhân Viên</title>
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
		background-image: url("2.jpg");
	}</style>
</head>
</head>
<body class="body">
<form action= "addnhanvien.php" method ="POST">
		<center>
			<h3>Nhân viên</h3>
			<table border="0" width="40%">
         <tr>
			<td> Mã Nhân Viên</td>
			<td> <input type="text" name ="manv" size="30" required><font color="red">(*)</font></td>
		</tr>
		<tr>
			<td>Tên Nhân viên</td>
			<td> <input type="text" name = "tennv" size="30" required><font color="red">(*)</font></td>
		</tr>
		<tr>
			<td>Địa chỉ</td>
			<td> <input type="text" name = "diachi" size="30" required><font color="red">(*)</font></td>
		</tr>
		<tr>
			<td>Số điện thoại</td>
			<td> <input type="text" name = "sdt" size="30" required><font color="red">(*)</font></td>
		</tr>
		<tr align="center">
		<td colspan="2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" name="submit" value="Thêm">
            <input type="reset" name="" value="Nhập lại" >
		    
		</tr>
</table>
</center>
</form>
</body>
</html>