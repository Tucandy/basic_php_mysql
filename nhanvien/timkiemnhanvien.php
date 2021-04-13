<!DOCTYPE html>
<html>
<head>
      <title>Tìm kiếm thông tin</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <style type="text/css">
	body {
		background-image: url("2.jpg");
	}</style>

</head>
<body>
	<center>
		<h2>THÔNG TIN NHÂN VIÊN TÌM THẤY</h2>
		<a href='ttnhanvien.php'>Danh sách nhân viên </a>
	<br>
	<?php
		include ("connect_db.php");	
		if(!$con)
		{
			echo "Lỗi kết nối";
		}
		else
		{	
			$manv=$_POST['txtkey'];
			//Viết SQL => thực thi
			$sql_select="select * from t_nhanvien where manv like '%".$manv."%'";
			$kq=mysqli_query($con,$sql_select);
			//Trình bày dữ liệu dạng bảng
                  echo '<table border="1" cellspacing="0" cellpadding="0" width="90%">';
                  echo "<tr align='center'>";
                        echo "<td>STT</td>";
                        echo "<td>Mã nhân viên</td>";
                        echo "<td>Tên nhân viên</td>";
                        echo "<td>Địa chỉ</td>";
                        echo "<td>Số điện thoại</td>";
                        echo "<td colspan='2'>Thao tác<br>
                              <a href='nhanvien.php'> Add New </a>
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
                                    $madm=$r['manv'];
                                    echo "<td>".$i."</td>";
                                    echo "<td>".$r['manv']."</td>";
                                    echo "<td>".$r['tennv']."</td>";
                                    echo "<td>".$r['diachi']."</td>";
                                    echo "<td>".$r['sdt']."</td>";
                                    echo "<td> <a href='suathongtinnhanvien.php?manv=$manv'>Sửa</a> </td>";
                                    echo "<td> <a href='delnhanvien.php?manv=$manv'> Xóa</a> </td>";
                              echo "</tr>";
                        }
                  }
                  
		
	echo "</table>";
		}
	?>

<button type="button" onclick="quay_lai_trang_truoc()">Quay lại trang trước</button>

  <script>
      function quay_lai_trang_truoc(){
          history.back();
      }
  </script>
	</center>
</body>
</html>