<html>
    <head>
    <title>Login </title>
        <link rel="stylesheet" type="text/css" href="dangnhap.css">
        <style type="text/css">
        body{
            background-image: url("1.jpg");
            background-size: cover;
        }
        h1 {
            color: white;
            font-size: 30;
        }
        .dangnhap{
        width: 320px;
        height: 430px;
        background:rgb(66, 204, 238, 0.4);
        box-shadow:0px 10px 10px 0px rgba(0, 0, 0, 0.842);
        color: #fff;
         top: 50%;
        left: 50%;
        position: absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        padding: 70px 30px;
}
        .dangnhap p{
        margin: 0;
        padding: 0;
        font-weight: bold;
        }
        .dangnhap input[type="submit"]
        {
        width: 250px;
        border: none;
        outline: none;
        height: 40px;
        background: #73fb25;
        color: white;
        font-size: 18px;
        border-radius: 20px;
        }
    .dangnhap input[type="submit"]:hover
    {
     cursor: pointer;
     background: #ffc107;
     color: #000;
    }
        .dangnhap input[type="reset"]
        {
        width:250px;
        border: none;
        outline: none;
        height: 40px;
        background: blue;
        color: #fff;
        font-size: 18px;
        border-radius: 20px;
        }
     .dangnhap input[type="reset"]:hover
    {
     cursor: pointer;
     background: #ffc107;
     color: #000;
    }
    .dangnhap input[type="text"], input[type="password"],input[type="email"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
} 
.link{
font-style: oblique;
color:yellow !important;
}
</style>
    </head>
    <body>
    <?php
        session_start();
        include 'connect_db.php';
        $error = false;
        if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
            $result = mysqli_query($con, "Select `id`, `username`, `password`, `email` from `t_taikhoan` WHERE (`username` ='" . $_POST['username'] . "' AND `password` = md5('" . $_POST['password'] . "'))");
            if (!$result) {
                $error = mysqli_error($con);
            } else {
                $user = mysqli_fetch_assoc($result);
                $_SESSION['current_user'] = $user;
            }
            mysqli_close($con);
            if ($error !== false || $result->num_rows == 0) {
                ?>
    <div id="login-notify" class="box-content">
        <h1>Th??ng b??o</h1>
        <h4><?= !empty($error) ? $error : "Th??ng tin ????ng nh???p kh??ng ch??nh x??c" ?></h4>
        <a href="./dangnhap.php">Quay l???i</a>
    </div>
    <?php
                exit;
            }
            ?>
    <?php } ?>
    <?php //N???u bi???n session ch??a t???n t???i th?? ch???y c??u l???nh d?????i
        if (empty($_SESSION['current_user'])) { ?>




        <div class="dangnhap">
            <h1>????ng nh???p</h1>
            <form  method="post">
                <p>Username</p>
                <input type="text" name="username" placeholder="Nh???p username" required/>
                <p>Password</p>
                <input type="password" name="password" placeholder="Nh???p password" required/>
                <input type="submit" name="submit" value="????ng nh???p" /> 
                <input type="reset" value="Cancel">
                <a href="http://localhost/baitaplon/admin/dangky.php" class="link">Ch??a c?? t??i kho???n, t???o ngay</a>
            </form>
            
        </div>

        <?php //N???u bi???n session ???? t???n t???i th?? ch???y c??u l???nh d?????i
        } else {
            $currentUser = $_SESSION['current_user'];
              header('location:main.php'); 
            ?>

    <?php } ?>
    </body>
    </html>     