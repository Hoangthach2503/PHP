<!DOCTYPE html>
<html>
<head>
	<title>Danh sách sinh viên</title>
	<style type="text/css">
	table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}

	td, th {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
	}

	tr:nth-child(even) {
		background-color: #dddddd;
	}
</style>
</head>
<body>
	<?php 
	$link=mysqli_connect("localhost","root","") or die("Không thể kết nối cơ sở dữ liệu");
	mysqli_select_db($link,"final");
	mysqli_query($link,"SET NAMES 'utf8'");
	$sql="select * FROM sinhvien";
	$result=mysqli_query($link, $sql);
	echo'<table border="1" width="100%">';
	echo '<caption>Danh sách sinh viên thuê kí tục xá</caption>';
	echo'<tr><th>MSSV</th><th>Họ tên</th><th>Lớp</th><th>Ngày sinh</th><th>Mã phòng</th></tr>';
	while ($row=mysqli_fetch_array($result)) {
		$masv=$row{"masv"};
		$hoten=$row{"tensv"};
		$lop=$row{"lop"};
		$ngaysinh=$row{"ngaysinh"};
		$maphong=$row{"maphong"};
		echo "<tr><td>$masv</td><td>$hoten</td><td>$lop</td><td>$ngaysinh</td><td>$maphong</td></tr>";
	}
	?>
</body>
</html>