<?php 
$myid = $_REQUEST['idpb'];
$link =mysqli_connect("localhost","root","") or die("Khong the ket noi den CSDL".mysql_error());
		mysqli_select_db($link, "DULIEU");
	mysqli_query($link,"SET NAMES 'utf8'");
	$sql="select *from phongban1 
	where IDPB='$myid'";
	$result=mysqli_query($link,$sql);
 ?>
 <!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Update</title>

  
</head>

<body >
	<center>
<form method="post" action="xulycapnhat.php?idpb='$myid'">
    <h1>Cap nhat</h1>
  </div>
    <p>Mo ta:
    <input type="text" name="mota" <?php 
	$row=mysqli_fetch_array($result);
		echo $row['Mota'];


    ?> /></p>
    <p>Thoi gian:
    <input type="text" name="thoigian" />
    </p>
    <input type="submit" value="update" />
    <input type="reset" value="reset" />
    
  </div>
</form>
</center>
</body>
</html>
