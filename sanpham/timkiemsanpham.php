<!DOCTYPE html>
<html>
<head>
      <title>Tìm kiếm thông tin</title>
      <style type="text/css">
	body {
		background-image: url("3.jpg");
	}</style>
</head>
<body>
	<center>
		<h2>THÔNG TIN SẢN PHẨM TÌM THẤY</h2>
		<a href='ttsanpham.php'>Danh sách sản phẩm </a>
	<br>
	<?php
		include ("connect_db.php");	
		if(!$con)
		{
			echo "Lỗi kết nối";
		}
		else
		{	
			$masp=$_POST['txtkey'];
			//Viết SQL => thực thi
			$sql_select="select * from t_sanpham where masp like '%".$masp."%'";
			$kq=mysqli_query($con,$sql_select);
			//Trình bày dữ liệu dạng bảng
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
                                    echo  "<td><img src='./img/".$r['img']."' width='50px'></td>";
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

<button type="button" onclick="quay_lai_trang_truoc()">Quay lại trang trước</button>

  <script>
      function quay_lai_trang_truoc(){
          history.back();
      }
  </script>
	</center>
</body>
</html>