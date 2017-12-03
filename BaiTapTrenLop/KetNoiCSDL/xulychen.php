<?php
$idnv=$_REQUEST['manv'];
$hoten=$_REQUEST['tennv'];
$idpb=$_REQUEST['mapb'];
$diachi=$_REQUEST['diachi'];
	$link =mysqli_connect("localhost","root","") or die("Khong the ket noi den CSDL");
	mysqli_select_db($link, "dulieu");
	mysqli_query($link,"SET NAMES 'utf8'");
$sql="insert into nhanvien(idnv,hoten,idpb,diachi) values('$idnv','$hoten','$idpb','$diachi')";
	$result=mysqli_query($link, $sql);
	mysqli_free_result(($result));
	mysqli_close($link);
    header("Location: http://localhost:8080/php/BaiTapTrenLop/KetNoiCSDL/xemnhanvien.php");
  ?>
