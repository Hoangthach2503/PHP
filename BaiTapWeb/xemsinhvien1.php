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
	img{
		width: 200px;
		height: 200px;
	}
	li{
		list-style-type: none;
	}
	a{
		text-decoration: none;
	}
	p{
		padding: 1px;
		margin: 1px;
	}
</style>
</head>
<body>
	<?php 
	$link=mysqli_connect("localhost","root","") or die("Không thể kết nối cơ sở dữ liệu");
	mysqli_select_db($link,"final");
	mysqli_query($link,"SET NAMES 'utf8'");
	$sql="select sinhvien.*, tenphong FROM sinhvien, phong where sinhvien.maphong=phong.maphong";
	$result=mysqli_query($link, $sql);
	echo "<ol>";
	while ($row=mysqli_fetch_array($result)) {
		echo "		
		<li>
		<table border='0' width='50%'>
		<tr>
		<td colspan='7' width='15%'>
		<img src='data:image/jpeg;base64," . base64_encode($row["avatar"]) . " '/>
		</td>
		<td>
		<h4> ".$row["tensv"]." </h4>
		<p>MSSV: ".$row["masv"]."</p>
		<p>Lớp: ".$row["lop"]." </p>
		<p>Khoa: ".$row["khoa"]." </p>
		<p>Ngày sinh: ".$row["ngaysinh"]."</p>
		<p>Phòng: ".$row["tenphong"]."</p>
		<p><a href='xemnhanvien.php' target='content'>Chỉnh sửa   </a>
		<a href='xemnhanvien.php' target='content'>&nbsp Xóa</a></p>
		</td>
		</tr>
		</table>
		</li>";
	}
	echo "</ol>";
	mysqli_free_result(($result));
	mysqli_close($link);
	?>

</body>
</html>