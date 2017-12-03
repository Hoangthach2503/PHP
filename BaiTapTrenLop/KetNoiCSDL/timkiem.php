<?php 
$tennv="";
if(isset($_REQUEST['id'])){
$tennv=$_REQUEST['id'];
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tìm kiếm nhân viên</title>
</head>
<body>
	<center>
    <form method="post" action="xulytimkiem.php">
	<input type="texp" name="tk" placeholder="nhập tên nhân viên">
	<input type="submit" value ="tìm kiếm">
	<br/>
	<br/>
	<?php 
if ($tennv!=null) {
	$link =mysqli_connect("localhost","root","") or die("Khong the ket noi den CSDL");
	mysqli_select_db($link, "dulieu");
	mysqli_query($link,"SET NAMES 'utf8'");
	$sql="select *from nhanvien where IDNV='$tennv'";
	$result=mysqli_query($link, $sql);
	echo'<table>';
		echo'<tr><th>IDNV</th><th>Ho ten</th><th>IDPB</th><th>Dia chi</th></tr>';
	while($row=mysqli_fetch_array($result))
	{
		
		echo '<tr><td>'.$row['IDNV'].'</td><td>'.$row['hoten'].'</td><td>'.$row['IDPB'].'</td><td>'.$row['Diachi'].'</td></tr>';

	}
	echo '</table>';
	//echo mysqli_affected_rows($link);
	mysqli_free_result(($result));
	mysqli_close($link);
	# code...
}
	 ?>
	</center>
</form>
</body>
</html>