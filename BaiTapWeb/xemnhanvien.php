<!DOCTYPE html>
<html>
<head>
	<title>Danh sách nhân viên</title>
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
	$sql="select * FROM nhanvien";
	$result=mysqli_query($link, $sql);
	echo'<table border="1" width="100%">';
	echo '<caption>Danh sách nhân viên làm và quản lý ở kí tục xá</caption>';
	echo'<tr><th>Mã nhân viên</th><th>Họ tên</th><th>Chức vụ</th><th>Ghi chú</th></tr>';
	while ($row=mysqli_fetch_array($result)) {
		$manv=$row{"manv"};
		$hoten=$row{"tennv"};
		$chucvu=$row{"chucvu"};
		$ghichu=$row{"ghichu"};
		echo "<tr><td>$manv</td><td>$hoten</td><td>$chucvu</td><td>$ghichu</td></tr>";
	}
	?>
</body>
</html>