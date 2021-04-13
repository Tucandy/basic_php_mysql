<!DOCTYPE html>
<html>
<head>
	<title>Thông tin hóa đơn</title>
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
		background-image: url("6.jpg");
	}</style>
</head>
<body>
	<center>
		<h2>Danh sách hóa đơn</h2>
	<form method="post" action="export.php">
     	<center><input type="submit" name="export" class="btn btn-success" value="Xuất" /></center>
	    </form>
	    <a href="http://localhost/baitaplon/hoadonchitiet/tthoadonchitiet.php">Xem chi tiết hóa đơn tại đây</a>
	<br>
	<?php
		include ("connect_db.php");
		if(!$con)
		{
			echo "Lỗi kết nối";
		}
		else
		{		
			//Viết SQL => thực thi
			$sql_select= "select * from t_hoadon";
			$kq=mysqli_query($con,$sql_select); 
		echo '<table border="1" cellspacing="0" cellpadding="0" width="90%">';
		echo "<tr align='center'>";
			echo "<td>STT</td>";
			echo "<td>Mã hóa đơn</td>";
			echo "<td>Tên hóa đơn</td>";
			echo "<td>Mã khách hàng</td>";
			echo "<td>Số điện thoại</td>";
			echo "<td>Địa chỉ</td>";
			echo "<td>Mã nhân viên</td>";
			echo "<td colspan='2'>Thao tác<br>
				<a href='hoadon.php'> Add New </a>
			</td>";

		echo "</tr>";
		//thực thi câu lệnh dòng 23, 24
		//lệnh while: thực hiện vòng lặp
		$i=0;
		if(mysqli_num_rows($kq)>0)
		{
			while($r=mysqli_fetch_array($kq))
			{
				$i++;
				echo "<tr>";
					$mahd=$r['mahd'];
					echo "<td>".$i."</td>";
					echo "<td>".$r['mahd']."</td>";
					echo "<td>".$r['tenhd']."</td>";
					echo "<td>".$r['makh']."</td>";
					echo "<td>".$r['sdt']."</td>";				
					echo "<td>".$r['diachi']."</td>";
					echo "<td>".$r['manv']."</td>";
					echo "<td> <a href='delhoadon.php?mahd=$mahd'> Xóa</a> </td>";
				echo "</tr>";
			}
		}
		
	echo "</table>";
		}
	?>

<a class="btn" href="http://localhost/baitaplon/admin/main.php">Trở lại trang chủ</a>
	</center>
</body>
</html>