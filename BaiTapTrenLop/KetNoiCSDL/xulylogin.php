<<?php
$user=$_REQUEST['t1'];
$pass=$_REQUEST['t2'];
if ($user==""||$pass=="") {
	# code...
	header("Location: http://localhost:8080/php/BaiTapTrenLop/KetNoiCSDL/login.php");
}
else{
	$link =mysqli_connect("localhost","root","") or die("Khong the ket noi den CSDL");
	mysqli_select_db($link, "dulieu");
	mysqli_query($link,"SET NAMES 'utf8'");
	$sql="select *from admin";
	$result=mysqli_query($link, $sql);
	$check=false;
	 while($row=mysqli_fetch_array($result))
	 {
	 	if(($user==$row{"username"})&&($pass==$row{"password"}))
	 	{
		$check=true;
		break;
		}
		
	}
	mysqli_free_result(($result));
	mysqli_close($link);
if ($check) {
	# code...
	header("Location: http://localhost:8080/php/BaiTapTrenLop/KetNoiCSDL/csdl2.php");
}
else{
		# code...
	header("Location: http://localhost:8080/php/BaiTapTrenLop/KetNoiCSDL/login.php");
}
}
	
  ?>
