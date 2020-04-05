

    <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Donk</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <form action="proses-login.php" method="POST">
    <div class="login-box">
      <h1>Login</h1>
      <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" name="username" placeholder="Username" autocomplete="on" required>
      </div>

      <div class="textbox">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Password" required>
      </div>

      <input type="submit" value="Login" name="btnlogin" class="btn" >
    </div>
</body>
</form>
</html>