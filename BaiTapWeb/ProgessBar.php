<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Animated Login Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto+Slab'>

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<style>
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 10px;
  text-decoration: none;
  font-size: 14px;
}

.topnav a:hover {
  background-color: #4CAF50;
  color: black;
}

/*.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
*/
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Trang Chủ</a>
  <a href="xemsinhvien.php" target="content">Sinh viên</a>
  <a href="xemnhanvien.php"  target="content">Nhân viên</a>
  <a href="#about">Dãy nhà</a>
  <a href="#about">Phòng</a>
  <a href="#about">Điện nước</a>
  <a href="#about">Tài sản</a>
  <a href="#about">Tìm kiếm</a>
  <a href="#about">Quy định</a>
  <form action="xulydangnhap.php" method="post" style="margin-top: 10px" class="container">
     <input autofocus placeholder='Username' type='text' name="username" style="  width: 150px; margin-left: 20px">
     <input placeholder='Password' type='password' name="password" style="  width: 150px;">
    <input type="submit" name="" class='js-toggle-login login--login-submit' value="Đăng nhập">
  </form>
</div>
</body>
</html>
