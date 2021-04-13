<html>
    <head>
    
    <title>Sign up </title>
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
        height: 550px;
        background:rgb(66, 204, 238, 0.4);
        box-shadow:0px 10px 10px 0px rgba(0, 0, 0, 0.842);
        opacity:12;
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
        width: 120px;
        border: none;
        outline: none;
        height: 40px;
        background: blue;
        color: #fff;
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
        width:120px;
        border: none;
        outline: none;
        height: 40px;
        background: #fb2525;
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
color:pink !important;   
}
</style>
</head>
    <body>
<form action= "adduser.php" method ="POST">
        <div class="dangnhap">
            <h1>Tạo tài khoản</h1>
            <form>
            <p>ID</p>
                <input type="text" name="id" placeholder="Nhập ID" required>
                <p>Username</p>
                <input type="text" name="username" placeholder="Nhập Username" required>
                <p>Password</p>
                <input type="password" name="password" placeholder="Nhập Password" required>
                <p>Email</p>
                <input type="email" name="email" placeholder="Nhập Email" required>
                <input type="submit" name="" value="Sign up">
                <input type="reset" name="" value="Cancel">
                <a href="http://localhost/baitaplon/admin/dangnhap.php" class="link" > Đã có tài khoản? Đăng nhập</a>
    </form>
        </div>
    </body>
    </html>