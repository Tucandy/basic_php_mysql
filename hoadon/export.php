<?php 
include ("connect_db.php");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM t_hoadon";
 $kq = mysqli_query($con, $query);
 if(mysqli_num_rows($kq) > 0)
 {
  $output .= '
   <table >  
                    <tr>  
                         <th>Mã hóa đơn</th>  
                         <th>Tên hóa đơn</th>  
                         <th>Tên khách hàng</th>  
                         <th>Số điện thoại </th>
                         <th>Địa chỉ</th>
                         <th>Nhân viên phụ trách </th>
       
                    </tr>
  ';
  while($row = mysqli_fetch_array($kq))
  {
   $output .= '
    <tr>  
                         <td>'.$row["mahd"].'</td>  
                         <td>'.$row["tenhd"].'</td>  
                         <td>'.$row["makh"].'</td>  
                         <td>'.$row["sdt"].'</td>  
                         <td>'.$row["diachi"].'</td>  
                         <td>'.$row["manv"].'</td> 
                        </tr>
   ';
  }
  $output .= 
  '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment;  filename=danhsachhoadon.xls');
  echo $output;
 }
}
?>