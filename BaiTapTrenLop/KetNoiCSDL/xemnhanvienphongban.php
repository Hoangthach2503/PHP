
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
//$idp=$_REQUEST['idpb'];
     $idpb = $_REQUEST['idpb'];
	$link =mysqli_connect("localhost","root","") or die("Khong the ket noi den CSDL".mysql_error());
		mysqli_select_db($link, "DULIEU");
	mysqli_query($link,"SET NAMES 'utf8'");
	$sql="select *from nhanvien 
	where IDPB='$idpb'";
	$result=mysqli_query($link,$sql);
	echo'<table border="1" width="100%">';
	echo '<caption>Du lieu truy xuat tu bang nhan vien</caption>';
	//in tieu de cua bang
	echo'<tr><th>IDNV</th><th>Ho ten</th><th>IDPB</th><th>Dia chi</th></tr>';
	while($row=mysqli_fetch_array($result))
	{
		
		echo 
		'<tr><td>'.$row['IDNV'].'</td><td>'.$row['hoten'].'</td><td>'.$row['IDPB'].'</td><td>'.$row['Diachi'].'</td></tr>';

	}
	echo '</table>';
	//echo mysqli_affected_rows($link);
	mysqli_free_result(($result));
	mysqli_close($link);
 ?>
</body>
</html>