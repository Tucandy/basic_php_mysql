<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="sanpham.css">
	<title>Quản Lý Khách Hàng</title>
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
		background-image: url("1.jpg");
	}</style>
</head>
<body class="body">
<form action= "addkhachhang.php" method ="POST">
		<center>
			<h3>Khách Hàng</h3>
			<table border="0" width="40%">
         <tr>
			<td> Mã khách hàng</td>
			<td> <input type="text" name ="makh" size="30" required><font color="red">(*)</font></td>
		</tr>
		<tr>
			<td>Tên khách hàng</td>
			<td> <input type="text" name = "tenkh" size="30" required><font color="red">(*)</font></td>
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