<!DOCTYPE html>
<html>
<head>
    <title>Quản Lý Sản Phẩm</title>
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
		background-image: url("3.jpg");
	}</style>
</head>
<body class="body" >
<form action= "addsanpham.php" method ="POST" enctype="multipart/form-data">
		<center>
			<h3>Thêm thông tin sản phẩm</h3>
			<table border="0" width="40%">
         <tr>
			<td> Mã sản phẩm</td>
			<td> <input type="text" class="boder-sanpham" name =" masp" size="30" placeholder="Nhập mã sản phẩm" required><font color="red">(*)</font></td>
		</tr>
		<tr>
			<td>Tên sản phẩm</td>
			<td> <input type="text" class="boder-sanpham" name = "tensp" placeholder="Nhập tên sản phẩm" size="30" required><font color="red">(*)</font></td>
		</tr>
		<tr>
			<td>Gía bán</td>
			<td> <input type="text" class="boder-sanpham" name = "giaban" placeholder="Nhập giá bán" size="30" required><font color="red">(*)</font></td>
		</tr>
		<tr>
			<td>Gía nhập</td>
			<td> <input type="text" class="boder-sanpham" name = "gianhap" placeholder="Nhập giá nhập"  size="30" required><font color="red">(*)</font></td>
		</tr>
		<tr>
			<td>Hình ảnh</td>
			<td><input type="file" value="" name="img"></td>
		</tr>
        <tr>
        	<td>Mô tả</td>
        	<td> <textarea name="mota" class="boder-sanpham" placeholder="Nhập mô tả" rows="2" cols="30"></textarea>	
        </tr>
        <tr>
			<td>Ngày nhập</td>
			<td> <input type="date" class="boder-sanpham" name = "ngaynhap" size="30" required><font color="red">(*)</font></td>
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
                <td>
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
        	<td> <input type="text" name="soluong" placeholder="Nhập số lượng" rows="2" cols="30" required><font color="red">(*)</font></input>	
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