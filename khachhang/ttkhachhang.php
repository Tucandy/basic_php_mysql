<!DOCTYPE html>
<html>
<head>
	<title>Thông tin khách hàng</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
	body {
		background-image: url("1.jpg");
	}</style>
</head>
<body>
	<center>
		<h2>Danh sách khách hàng</h2>
	<form action="timkiemkhachhang.php" method="POST">
		<input type="text" name="txtkey" required size="25"> <input type="submit" name="" value="Tìm kiếm">
	</form>
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
			$sql_select= "select * from t_khachhang";//Câu lệnh select từ bảng t_nhansu
			$kq=mysqli_query($con,$sql_select); // Tạo biến trả về
			//Trình bày dữ liệu dạng bảng
			//Dùng row để in ra danh sách công ty thất nghiệp
		echo '<table border="1" cellspacing="0" cellpadding="0" width="90%">';
		echo "<tr align='center'>";
			echo "<td>STT</td>";
			echo "<td>Mã khách hàng</td>";
			echo "<td>Tên khách hàng</td>";
			echo "<td colspan='2'>Thao tác<br>
				<a href='khachhang.php'> Add New </a>
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
					$makh=$r['makh'];
					echo "<td>".$i."</td>";
					echo "<td>".$r['makh']."</td>";
					echo "<td>".$r['tenkh']."</td>";
					echo "<td> <a href='suathongtinkhachhang.php?makh=$makh'>Sửa</a> </td>";
					echo "<td> <a href='delkhachhang.php?makh=$makh'> Xóa</a> </td>";
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