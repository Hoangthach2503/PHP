<?php
$mota=$_REQUEST['mota'];
$thoigian=$_REQUEST['thoigian'];
$id=$_REQUEST['idpb'];
	$link =mysqli_connect("localhost","root","") or die("Khong the ket noi den CSDL");
	mysqli_select_db($link, "dulieu");
	mysqli_query($link,"SET NAMES 'utf8'");
	$sql="update phongban1 set mota='$mota', Thoigian='$thoigian' where IDPB='$id'";
	$result=mysqli_query($link, $sql);
	mysqli_free_result(($result));

	mysqli_close($link);
    header("Location: http://localhost:8080/php/BaiTapTrenLop/KetNoiCSDL/xemphongban.php");
  ?>
