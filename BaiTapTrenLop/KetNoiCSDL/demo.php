<?php
//Khai báo kết nối
$link = mysql_connect("localhost","root","") or die ("Khong the
ket noi den CSDL MySQL");
//Lựa chọn cơ sở dữ liệu
mysql_select_db("DULIEU",$link);
?>