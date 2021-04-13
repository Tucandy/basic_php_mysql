<!DOCTYPE html>
<html>
<head>
	<title>Thông tin sản phẩm</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
	body {
		background-image: url("3.jpg");
	}</style>
</head>
<body>
	<center>
		<h2>Danh sách tất cả sản phẩm trong hệ thống</h2>
	<form action="timkiemsanpham.php" method="POST">
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
			$sql_select= "select * from t_sanpham";
			$kq=mysqli_query($con,$sql_select); 
			
		echo '<table border="1" cellspacing="0" cellpadding="0" width="90%">';
		echo "<tr align='center'>";
			echo "<td>STT</td>";
			echo "<td>Mã sản phẩm</td>";
			echo "<td>Tên sản phẩm</td>";
			echo "<td>Gía bán</td>";
			echo "<td>Gía nhập</td>";
			echo "<td>Mô tả</td>";
			echo "<td>Hình ảnh</td>";
			echo "<td>Ngày nhập</td>";
			echo "<td>Mã danh mục</td>";
			echo "<td>Mã nhà sản xuất</td>";
			echo "<td>Số lượng</td>";
			echo "<td colspan='2'>Thao tác<br>
				<a href='sanpham.php'> Add New </a>
			</td>";

		echo "</tr>";
		
		$i=0;
		if(mysqli_num_rows($kq)>0)
		{
			while($r=mysqli_fetch_array($kq))
			{
				$i++;
				echo "<tr>";
					$masp=$r['masp'];
					echo "<td>".$i."</td>";
					echo "<td>".$r['masp']."</td>";
					echo "<td>".$r['tensp']."</td>";
					echo "<td>".$r['giaban']."</td>";
					echo "<td>".$r['gianhap']."</td>";				
					echo "<td>".$r['mota']."</td>";
                              echo  "<td><img src='./img/".$r['img']."' width='70px'></td>";
					echo "<td>".$r['ngaynhap']."</td>";
					echo "<td>".$r['madm']."</td>";
					echo "<td>".$r['mansx']."</td>";
					echo "<td>".$r['soluong']."</td>";
					echo "<td> <a href='suathongtinsanpham.php?masp=$masp'>Sửa</a> </td>";
					echo "<td> <a href='delsanpham.php?masp=$masp'> Xóa</a> </td>";
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