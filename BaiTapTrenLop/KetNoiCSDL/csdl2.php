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
	// $sql1="insert into Table1(maso,hoten,ngaysinh,nghenghiep) values('02','Le Van R','2015-05-09','Sinhvien')";
	// $result=mysqli_query($link,$sql1);
	
	//update ban ghi

	// $sql2="update Table1 set hoten='Le Duc Thang' where maso='02'";
	// $result=mysqli_query($link, $sql2);
	// if(!$result) die("khong the thuc hien cau lenh SQL:".mysql_error($link));
	

	//delete mot ban ghi

	//select cac ban ghi
	$sql="select *from Table1";
	$result=mysqli_query($link,$sql);
	echo'<table border="1" width="100%">';
	echo '<caption>Du lieu truy xuat tu bang nhan su</caption>';
	//in tieu de cua bang
	echo'<tr><th>Ma so</th><th>Ho ten</th><th>Ngay sinh</th><th>Nghe nghiep</th></tr>';
	while($row=mysqli_fetch_array($result))
	{
		
		echo 
		'<tr><td>'.$row['maso'].'</td><td>'.$row['hoten'].'</td><td>'.$row['ngaysinh'].'</td><td>'.$row['nghenghiep'].'</td></tr>';

	}

	echo '</table>';
	//echo mysqli_affected_rows($link);
	mysqli_free_result(($result));
	mysqli_close($link);
?>
</body>
</html>