<!DOCTYPE html>
<html>
<head>
	<title>Thông tin nhà sản xuất</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
	body {
		background-image: url("4.jpg");
	}</style>
</head>
<body>
	<center>
		<h2>Danh sách tất cả nhà sản xuất</h2>
	<form action="timkiemnsx.php" method="POST">
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
			$sql_select= "select * from t_nhasanxuat";
			$kq=mysqli_query($con,$sql_select);
		echo '<table border="1" cellspacing="0" cellpadding="0" width="90%">';
		echo "<tr align='center'>";
			echo "<td>STT</td>";
			echo "<td>Mã nhà sản xuất</td>";
                  echo "<td>Tên nhà sản xuất</td>";
                  echo "<td>Địa chỉ</td>";
			echo "<td>Số điện thoại</td>";
			echo "<td colspan='2'>Thao tác<br>
				<a href='nhasanxuat.php'> Add New </a>
			</td>";

		echo "</tr>";
		
		$i=0;
		if(mysqli_num_rows($kq)>0)
		{
			while($r=mysqli_fetch_array($kq))
			{
				$i++;
				echo "<tr>";
					$mansx=$r['mansx'];
					echo "<td>".$i."</td>";
					echo "<td>".$r['mansx']."</td>";
                              echo "<td>".$r['tennsx']."</td>";
                              echo "<td>".$r['diachi']."</td>";
					echo "<td>".$r['sdt']."</td>";
					echo "<td> <a href='suathongtinnsx.php?mansx=$mansx'>Sửa</a> </td>";
					echo "<td> <a href='delnsx.php?mansx=$mansx'> Xóa</a> </td>";
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