<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Chi tiết linh kiện</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css" >
    </head>
    <body>
        <?php
        include ("connect_db.php");
        $result = mysqli_query($con, "SELECT * FROM `t_sanpham` WHERE `masp` = ".$_GET['masp']);
        $product = mysqli_fetch_assoc($result);
      
        ?>
        <div class="container">
            <h2>Chi tiết linh kiện</h2>
            <div id="product-detail">
                <div id="product-img">
                    <img src="./img/<?=$product['img']?>" />
                </div>
                <div id="product-info">
                    <h1><?=$product['tensp']?></h1>
                    <label>Giá: </label><span class="product-price"><?= number_format($product['giaban'], 0, ",", ".") ?> VND</span><br/>
                    </form>
                </div>
                <div class="clear-both"></div>
                <?=$product['mota']?>
            </div>
        </div>
    </body>
</html>