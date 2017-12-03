<?php
$link =mysqli_connect("localhost","root","") or die("Khong the ket noi den CSDL".mysql_error());
  //Lua chon co so du lieu
  mysqli_select_db($link, "DULIEU");
  //insert mot ban ghi


  mysqli_query($link,"SET NAMES 'utf8'");
  
  $sql="select *from phongban";
  $result=mysqli_query($link,$sql);
 
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Insert</title> 
</head>
<body >

<center>
<form method="post" action="xulychen.php">
   <h1>Insert</h1>
<table>
    <tr>
      <td>IDNV:
    <input type="text" name="manv" /></td>
  </tr>
  <tr>
    <td>Hoten:
    <input type="text"  name="tennv" />
    </td>
    </tr>
    <tr>
    <td>IDPB: 
   <select name="mapb">
  <?php  
  while($row=mysqli_fetch_array($result))
  {
  
    echo 
    '<option>'.$row['IDPB'].'</option>';

  }

  //echo mysqli_affected_rows($link);
  mysqli_free_result(($result));
  mysqli_close($link); 
   ?>

   </select>
   </td>
 </tr>
 <tr>
    <td>Dia chi:
    <input type="text"  name="diachi" />
    </td>
  </tr>
    </table>
    <input type="submit" value="Thêm"/>
    <input type="reset" value="reset" />
</form>
</center>
</body>
</html>
