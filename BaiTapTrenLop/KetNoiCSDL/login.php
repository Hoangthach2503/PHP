
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
</head>

<body >
	<center>
<form method="post" action="xulylogin.php">
    <h1>Login</h1>
  </div>
  <div >
    <p>Username:
    <input type="text" placeholder="Username" name="t1" /></p>
    <p>Password:
    <input type="password" placeholder="Password" name="t2" />
    </p>
    <?php
      $id=$_REQUEST['id'];
       if ($id=='capnhat') {
       	# code...
       	echo " <input type='submit' name='capnhat' value='Login'/>";
       }
       if ($id=='them') {
       	# code...
       	echo " <input type='submit' name='them' value='Login'/>";
       }
      ?>
   
    <input type="reset" value="reset" />
    <input type="button" value="exit"/>
  </div>
</div>
</form>
</center>
</body>
</html>
