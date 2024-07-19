<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CodePen - Transparent Material Login Form</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/alphardex/aqua.css@master/dist/aqua.min.css'>
  <link rel="stylesheet" href="./css/style_admin_2.css">

</head>

<body>
  <form class="login-form" action="javascript:void(0);">
    <h1>Login</h1>
    <div class="form-input-material">
      <input type="text" name="username" id="username" placeholder=" " autocomplete="off" class="form-control-material" required />
      <label for="username">Username</label>
    </div>
    <div class="form-input-material">
      <input type="password" name="password" id="password" placeholder=" " autocomplete="off" class="form-control-material" required />
      <label for="password">Password</label>
    </div>
    <button type="submit" class="btn btn-primary btn-ghost" onclick="location.href='admin.php'">Login</button>
  </form>

</body>

</html>