<? php 

session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="login.css">
<title> RoadAware - Road safety </title>
</head>
<body>
  
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>LOGIN</h3>
            <p>Please enter your credentials to login.</p>
          </div>
        </div>
        <form class="login-form" action ="validate.php" method="post">
          <input type="text" name ="username" placeholder="username" required >
          <input type="password" name ="password" placeholder="password" required>
          <button type ="submit">login</button>
          <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
        </form>
      </div>
    </div>

</body>

</html>