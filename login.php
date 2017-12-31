
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>فرم لاگین </title>
  
  
  
      <link rel="stylesheet" href="css/style1.css">

  
</head>

<body>

  <div class="wrapper">
	<div class="container">
		
            <form class="form" method="post" action="login.php">
			<input name="user" type="text" placeholder="نام کاربری">
                        <input type="pass" name="pass" placeholder="رمز عبور">
                        <button type="submit" name="login" id="login-button">ورود</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>
</body>

</html>
<?php
   session_start();
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'loginphp');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 
  
   
   if(isset($_POST['login'])) {
      $username = $_POST['user'];
      $password = $_POST['pass']; 
      $query = "SELECT * FROM login  WHERE username = '$username' and pass = '$password'";
      $result=mysqli_query($db,$query);
      $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        if(mysqli_num_rows($result) == 1)
        {

         $_SESSION['login'] = $username;
          echo '<script>alert("خوش آمدید"); </script>';
         header("location: index.php");
      }else {
        session_unset(); 
        session_destroy(); 
         echo '<script>alert("نام کاربری یا رمز عبور را شما اشتباه است") ;</script>';
      }
   }
?>