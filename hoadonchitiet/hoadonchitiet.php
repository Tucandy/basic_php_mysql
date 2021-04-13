<!DOCTYPE html>
<html>
<head>
    <title>Hóa đơn chi tiết</title>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
    
	</style>
</head>
<body  >
<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
<form action= "addhoadonchitiet.php" method ="POST" enctype="multipart/form-data">
		<center>
        <div class="panel-heading">
				<h2 class="text-center">Thêm hóa đơn chi tiết</h2>
			</div>
			<table border="0" width="40%">
                <tr>
                <td> Mã hóa đơn </td>
                <td>
                <select name="mahd">
                <?php
                 include ("connect_db.php");
                    if(!$con)
                    {
                        echo "Lỗi kết nối";
                    }
                    else
                    {
                        $mahd="select * from t_hoadon";
                        $mahd=mysqli_query($con,$sql_mahd);
                        if(mysqli_num_rows($mahd)>0)
                        {
                            while($r=mysqli_fetch_array($mahd))
                            {
                                echo "<option value='".$r['mahd']."'>".$r['tenhd']."</option>";
                            }
                        }
                    }
                ?>
                </select>
            </tr>
		<tr>
                <td> Sản phẩm: </td>
                <td>
                <select name="masp">
                <?php
                 include ("connect_db.php");
                    if(!$con)
                    {
                        echo "Lỗi kết nối";
                    }
                    else
                    {
                        $sql_sanpham="select * from t_sanpham";
                        $sanpham=mysqli_query($con,$sql_sanpham);
                        if(mysqli_num_rows($sanpham)>0)
                        {
                            while($r=mysqli_fetch_array($sanpham))
                            {
                                echo "<option value='".$r['masp']."'>".$r['tensp']."</option>";
                            }
                        }
                    }
                ?>
                </select>
            </tr>        
        <tr>
            <td>Số lượng</td>
            <td>
            <input aria-label="quantity" class="input-qty" max="100" min="0" name="soluong" type="number" value="">
            </td>
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