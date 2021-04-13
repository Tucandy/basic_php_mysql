<!DOCTYPE html>
<html>
<head>
	<title>Sửa thông tin sản phẩm</title>
	<meta charset="utf-8">
	<style type="text/css">
	body {
		background-image: url("3.jpg");
	}</style>

</head>
<body>
	<?php
		$masp=$_REQUEST['masp'];
		
		include ("connect_db.php");	
		if(!$con)
		{
			echo "Lỗi kết nối";
		}else
		{
			$sql_hienthi="select * from t_sanpham where masp='".$masp."'";
			$kq=mysqli_query($con,$sql_hienthi);
			if(mysqli_num_rows($kq)>0)
			{
				while($r=mysqli_fetch_array($kq))
				{
					$masp=$r['masp'];
					$tensp=$r['tensp'];
					$giaban=$r['giaban'];
					$gianhap=$r['gianhap'];
					$mota=$r['mota'];
					$img=$r['img'];
					$ngaynhap=$r['ngaynhap'];
					$madm=$r['madm'];
					$mansx=$r['mansx'];
					$soluong=$r['soluong'];
                  
				}
			}
		}
	?>
	<form action="updatesanpham.php" method="POST">
	<center>
		<h2>CẬP NHẬT THÔNG TIN SẢN PHẨM</h2>
		<table border="0" width="40%">
		<tr>
			<td> Mã sản phẩm</td>
			<td> <input type="text" class="boder-sanpham" name =" masp" value="<?php echo $masp;?>" size="30" ></td>
		</tr>
		<tr>
			<td>Tên sản phẩm</td>
			<td> <input type="text" class="boder-sanpham"  name = "tensp" value="<?php echo $tensp;?>" size="30"></td>
		</tr>
		<tr>
			<td>Gía bán</td>
			<td> <input type="text" class="boder-sanpham" name = "giaban"  value="<?php echo $giaban;?>" size="30"></td>
		</tr>
		<tr>
			<td>Gía nhập</td>
			<td> <input type="text" class="boder-sanpham" name = "gianhap" value="<?php echo $gianhap;?>" size="30"></td>
		</tr>
		<tr>
			<td>Hình ảnh</td>
			<td><input type="file" name="img"><?php  echo "<img src='/img/'".$img."' width='50px'>";?></td>
		</tr>
        <tr>
        	<td>Mô tả</td>
        	<td> <textarea  class="boder-sanpham" name="mota" value="<?php echo $mota;?>" rows="2" cols="30"></textarea></td>	
        </tr>
        <tr>
			<td>Ngày nhập</td>
			<td><input type="date" name="ngaynhap" value="<?php echo $ngaynhap;?>" size="30" ></td>
		</tr>
		<tr>
                <td> Danh mục: </td>
                <td>
                <select name="madm">
                <?php
                 include ("connect_db.php");
                    if(!$con)
                    {
                        echo "Lỗi kết nối";
                    }
                    else
                    {
                        $sql_madm="select * from t_danhmuc";
                        $madm=mysqli_query($con,$sql_madm);
                        if(mysqli_num_rows($madm)>0)
                        {
                            while($r=mysqli_fetch_array($madm))
                            {
                                echo "<option value='".$r['madm']."'>".$r['tendm']."</option>";
                            }
                        }
                    }
                ?>
                </select>
            </tr>
		<tr>
                <td> Nhà sản xuất: </td>
                <select name="mansx">
                <?php
                 include ("connect_db.php");
                    if(!$con)
                    {
                        echo "Lỗi kết nối";
                    }
                    else
                    {
                        $sql_nsx="select * from t_nhasanxuat";
                        $nsx=mysqli_query($con,$sql_nsx);
                        if(mysqli_num_rows($nsx)>0)
                        {
                            while($r=mysqli_fetch_array($nsx))
                            {
                                echo "<option value='".$r['mansx']."'>".$r['tennsx']."</option>";
                            }
                        }
                    }
                ?>
                </select>
            </tr>
		<tr>
			<td>Số lượng</td>
			<td> <input type="text" name = "soluong" value="<?php echo $soluong;?>" size="30"></td>
		</tr>
			<td colspan="2">&nbsp;</td>
		</tr>
			<tr align="center">
				<td colspan="2"><input type="submit" name="" value="Update"></td>
			</tr>

		</table>
<hr>
	</center>
	</form>

</body>
</html>