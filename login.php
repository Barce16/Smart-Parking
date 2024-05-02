<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon"href="/docs/4.0/assets/img/favicon.ico">

</head>
<body>
    <a class="nav-link active" href="./logincheck.php" >
    <span data-feather="corner-up-left"></span>
    </a>

    
    <div class="wrapper">
    <div class="register_link">

     <form action="logincheck.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="Gmail"><br>

     	<label>Password</label>
     	<input type="password" name="Password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>


    </div>
</body>

    
</html>

