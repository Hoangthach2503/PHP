<?php  
$user=$_REQUEST['username'];
$pass=$_REQUEST['password'];
if ($user==""||$pass=="") {
	# code...
	//header("Location: index.php");
	echo "<script>parent.window.location = 'Index.php'</script>";
}
else{
	$link =mysqli_connect("localhost","root","") or die("Khong the ket noi den CSDL");
	mysqli_select_db($link, "final");
	mysqli_query($link,"SET NAMES 'utf8'");
	$sql="select *from admin where username='$user' and password='$pass'";
	$result=mysqli_query($link, $sql);
	 if (mysqli_num_rows($result)==1) {
    echo "<script>parent.window.location = 'Index1.php'</script>";
    	 }
	else{
    echo "<script>parent.window.location = 'Index.php'</script>";
	}
	mysqli_free_result(($result));
	mysqli_close($link);
}
?>