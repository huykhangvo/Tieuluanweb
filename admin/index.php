    <?php
    session_start();
    include('../db/ketnoi.php');
    ?>
    <?php
    //session_destroy();
    //unset('dangnhap');
        if(isset($_POST['dangnhap'])) {
        $taikhoan = $_POST['taikhoan'];
        $matkhau = md5($_POST['matkhau']);
        if ($taikhoan == '' || $matkhau == '') {
            echo '<p>Xin nhập đủ</p>';
        } else {
            $sql_select_admin = mysqli_query($con, "SELECT * FROM tbl_admin WHERE email='$taikhoan' AND password='$matkhau' LIMIT 1");
            $count = mysqli_num_rows($sql_select_admin);
            $row_dangnhap = mysqli_fetch_array($sql_select_admin);
                 // không có session_start(); phiên đăng nhập không lưu
                 // nếu chưa có cái dòng dưới này khi người dùng biết được link dashboard.php thì sẽ đăng nhập vào được
            if($count>0) {
                $_SESSION['dangnhap'] = $row_dangnhap['admin_name'];
                $_SESSION['admin_id'] = $row_dangnhap['admin_id'];
                header('Location: dashboard.php');
            } else {
                echo '<p> Tài khoản hoặc mật khẩu không đúng </p>';
            }
        }
    }
    
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Đăng nhập admin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </head>

    <body>
        <h2 align="center">Đăng Nhập</h2>
        <div class="col-md-6">
            <div class="form-group">
            <form action="" method="POST">
                <label>Tài khoản</label>
                <input type="text" name="taikhoan" placeholder="điền Email" class="form-control"><br>
                <label>Mật khẩu</label>
                <input type="password" name="matkhau" placeholder="Mật khẩu" class="form-control"><br>
                <input type="submit" name="dangnhap" class="btn btn-primary" value="Đăng nhập Admin">
            </div>
            </form>
        </div>
    </body>

    </html>