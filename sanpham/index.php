<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Phân trang sản phẩm linh kiện điện tử</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
           
            .container{
                width: 1200px;
                margin: 0 auto;
            }
            h1{
                text-align: center;
            }
            .product-items{
                border: 1px solid #ccc;
                padding: 30px;
            }
            .product-item{
                float: left;
                width: 23%;
                margin: 1%;
                padding: 10px;
                box-sizing: border-box;
                border: 1px solid #ccc;
                line-height: 26px;
            }
            .product-item label{
                font-weight: bold;
            }
            .product-item p{
                margin: 0;
                line-height: 26px;
                max-height: 52px;
                overflow: hidden;
            }
            .product-price{
                color: black;
                font-weight: bold;
            }
            .product-img{
                padding: 5px;
                border: 1px solid #ccc;
                margin-bottom: 5px;
            }
            .product-item img{
                max-width: 100%;
            }
            .product-item ul{
                margin: 0;
                padding: 0;
                border-right: 1px solid #ccc;
            }
            .product-item ul li{
                float: left;
                width: 33.3333%;
                list-style: none;
                text-align: center;
                border: 1px solid #ccc;
                border-right: 0;
                box-sizing: border-box;
            }
            .clear-both{
                clear: both;
            }
            a{
                text-decoration: none;
            }
            .xem-button{
                text-align: center;
                margin-top: 10px;
            }
            .xem-button a{
                background: #444;
                padding: 5px;
                color: #fff;
            }
            #pagination{
                text-align: right;
                margin-top: 15px;
            }
            .page-item{
                border: 1px solid #ccc;
                padding: 5px 9px;
                color: #000;
            }
            .current-page{
                background: #000;
                color: #FFF;
            }
            .sua{
                text-align: center;
            }
            body{
                background-image: url("3.jpg");
            }
        </style>
    </head>
    <body>
        <?php
        include ("connect_db.php");
        $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:4;
        $current_page = !empty($_GET['page'])?$_GET['page']:1; //Trang hiện tại
        $offset = ($current_page - 1) * $item_per_page;
        $products = mysqli_query($con, "SELECT * FROM `t_sanpham` ORDER BY `masp` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset);
        $totalRecords = mysqli_query($con, "SELECT * FROM `t_sanpham`");
        $totalRecords = $totalRecords->num_rows;
        $totalPages = ceil($totalRecords / $item_per_page);
        ?>
        <div class="container">
            <h1>Danh sách linh kiện </h1>
            <div class="sua">
            <a href="http://localhost/baitaplon/sanpham/ttsanpham.php">Sửa thông tin sản phẩm ở đây</a>
            </div>
            <div class="product-items">
                <?php
                while ($row = mysqli_fetch_array($products)) {
                    ?>
                    <div class="product-item">
                        <div class="product-img">
                        <a href="chitietsp.php?masp=<?= $row['masp'] ?>"><img src="./img/<?= $row['img'] ?>" title="<?= $row['tensp'] ?>" /></a>
                        </div>
                       <!-- <strong> ?= $row'tensp' ?> </strong><br/>-->

                       <strong><a href="chitietsp.php?masp=<?= $row['masp'] ?>"><?= $row['tensp'] ?></a></strong><br/>
                        <label>Giá: </label><span class="product-price"><?= number_format($row['giaban'], 0, ",", ".") ?> đ</span><br/>
                        <p><?= $row['mota'] ?></p>
                        <div class="xem-button">
                           <!-- <a  href="./chitietsp.php?masp=<?= $row['masp'] ?>"> Xem chi tiết linh kiện</a>-->
                        </div>
                    </div>
                <?php } ?>
                <div class="clear-both"></div>
                <?php
                include './pagination.php';
                ?>
                <div class="clear-both"></div>
            </div>
        </div>
    </body>
</html>