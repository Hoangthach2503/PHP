
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

	//Thiet lap mot ket noi toi co so du lieu,neu khong ket noi duoc tra ve mot thong bao
	$link =mysqli_connect("localhost","root","") or die("Khong the ket noi den CSDL".mysql_error());
	//Lua chon co so du lieu
	mysqli_select_db($link, "DULIEU");
	//insert mot ban ghi
	mysqli_query($link,"SET NAMES 'utf8'");	
	$sql="select *from phongban1";
	$result=mysqli_query($link,$sql);
	echo'<table border="1" width="100%">';
	echo '<caption>Du lieu truy xuat tu bang phong ban</caption>';
	//in tieu de cua bang
	echo'<tr><th>IDPB</th><th>Mota</th><th>Thoigian</th><th>Thay doi</th></tr>';
	while($row=mysqli_fetch_array($result))
	{
		echo 
		'<tr><td>'.$row['IDPB'].'</td><td>'.$row['Mota'].'</td><td>'.$row['Thoigian'].
		'</td><td><a href="formcapnhat.php?idpb='.$row['IDPB'].'">...</a></td></tr>';

	}
	echo '</table>';
	//echo mysqli_affected_rows($link);
	mysqli_free_result(($result));
	mysqli_close($link);
?>

</body>
</html>