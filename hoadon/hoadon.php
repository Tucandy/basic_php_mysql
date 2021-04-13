<!DOCTYPE html>
<html>
<head>
    <title>Quản Lý Hóa Đơn</title>
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
<body  >
<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
<form action= "addhoadon.php" method ="POST" enctype="multipart/form-data">
		<center>
        <div class="panel-heading">
				<h2 class="text-center">Thêm đơn hàng</h2>
			</div>
			<table border="0" width="40%">
         <tr>
			<td> Mã đơn hàng</td>
			<td> <input type="text"  name =" mahd" size="30" placeholder="Nhập mã đơn hàng" required><font color="red">(*)</font></td>
		</tr>
		<tr>
			<td>Tên đơn hàng</td>
			<td> <input type="text"  name = "tenhd" placeholder="Nhập tên đơn hàng" size="30" required><font color="red">(*)</font></td>
		</tr>
		<tr>
                <td> Tên khách hàng: </td>
                <td>
                <select name="makh">
                <?php
                 include ("connect_db.php");
                    if(!$con)
                    {
                        echo "Lỗi kết nối";
                    }
                    else
                    {
                        $sql_kh="select * from t_khachhang";
                        $kh=mysqli_query($con,$sql_kh);
                        if(mysqli_num_rows($kh)>0)
                        {
                            while($r=mysqli_fetch_array($kh))
                            {
                                echo "<option value='".$r['makh']."'>".$r['tenkh']."</option>";
                            }
                        }
                    }
                ?>
                </select>
		</tr>
		<tr>
			<td>Số điện thoại</td>
			<td> <input type="text"  name = "sdt" placeholder="Nhập số điện thoại" size="30" required><font color="red">(*)</font></td>
		</tr>
		<tr>
			<td>Địa chỉ</td>
			<td> <input type="text"  name = "diachi" placeholder="Nhập địa chỉ" size="30" required><font color="red">(*)</font></td>
		</tr>
		<tr>
                <td> Nhân viên phụ trách: </td>
                <td>
                <select name="manv">
                <?php
                 include ("connect_db.php");
                    if(!$con)
                    {
                        echo "Lỗi kết nối";
                    }
                    else
                    {
                        $sql_nv="select * from t_nhanvien";
                        $nv=mysqli_query($con,$sql_nv);
                        if(mysqli_num_rows($nv)>0)
                        {
                            while($r=mysqli_fetch_array($nv))
                            {
                                echo "<option value='".$r['manv']."'>".$r['tennv']."</option>";
                            }
                        }
                    }
                ?>
                </select>
            </tr>
            <tr>
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
</div>
		</div>
	</div>
</body>
</html>