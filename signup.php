<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script
      src="https://kit.fontawesome.com/53735a2265.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/53735a2265.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="signupstyle.css" />
  </head>
  <body>
    <div class="login-wrapper">
      <div class="topBar">
      <img src="img/logo.jpg">
        <h2>SignUp</h2>
      </div>
      <form method="post" action="./signup_action.php" id="login-form">
        <input type="text" name="id" placeholder="Id" />
        <input type="password" name="pw" placeholder="Password" />
        <input
          type="password"
          name="userPasswordCheck"
          placeholder="PasswordCheck"
        />
        <input type="text" name="name" placeholder="UserName" />
        <input type="text" name="nickname" placeholder="NickName" />
        <input type="text" name="age" placeholder="Age" />
        <input type="submit" value="SignUp" />
      </form>
      <div class="icon">
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-github"></i>
        <i class="fa-brands fa-google"></i>
      </div>
    </div>
  </body>
</html>
