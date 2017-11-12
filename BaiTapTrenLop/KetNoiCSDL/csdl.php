<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	//khai bao ket noi
	$link =mysqli_connect("localhost","root","") or die("Khong the ket noi den CSDL");
	//Lua chon co so du lieu
	mysqli_select_db($link, "dulieu");
	$sql="select *from table1";
	$result=mysqli_query($link, $sql);
	echo'<table border="1" width="100%">';
	echo '<caption>Du lieu truy xuat tu bang nhan su</caption>';
	//in tieu de cua bang
	echo'<tr><th>Ma so</th><th>Ho ten</th><th>Ngay sinh</th><th>Nghe nghiep</th></tr>';
	while($row=mysqli_fetch_array($result))
	{
		$maso=$row{"maso"};
		$hoten=$row{"hoten"};
		$ngaysinh=$row{"ngaysinh"};
		$nghenghiep=$row{"nghenghiep"};
		echo "<tr><td>$maso</td><td>$hoten</td><td>$ngaysinh</td><td>$nghenghiep</td></tr>";
	}
	echo '</table';

?>
</body>
</html>