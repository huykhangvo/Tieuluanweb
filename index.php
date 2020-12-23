<?php
session_start();
include_once('./db/ketnoi.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sản phẩm</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
	<!-- ............................... -->
	
	<link rel="stylesheet" href="css/bootstrap-grid.min.css"><!--Chuyển hình-->
<link rel="stylesheet" href="css/css/style.css"><!--Thuộc tính Footer-->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   

	
</head>
<body>

<?php
	include('./include/nav.php');
	include('./include/banner.php');
	//include('./include/slider.php');

	if (isset($_GET['quanly'])) {
		$tam = $_GET['quanly'];
	} else {
		$tam = '';
	}
	if ($tam == 'danhmuc') {
		include('./include/danhmuc.php');
	} elseif ($tam == 'chitietsp') {
		include('./include/chitietsp.php');
	} elseif ($tam == 'giohang') {
		include('./include/giohang.php');
	}elseif ($tam=='timkiem') {
			include('include/timkiem.php');
	}elseif ($tam=='tintuc') {
		include('include/tintuc.php');
	}elseif ($tam=='chitiettin') {
		include('include/chitiettin.php');
	}elseif ($tam=='xemdonhang') {
		include('include/xemdonhang.php');
	}else{
		include('./include/home.php');
	}
	include('./include/footer.php');
	?>
<!--Banner-->


    </body>
    </html>