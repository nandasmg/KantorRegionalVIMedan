<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <!--link css-->
    <link rel="stylesheet" href="stylelogin1.css" />

     <!--link poppins-->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <!--link form-->
    <form action="programlogin.php" method="post">
  </head>
  <body>
    <div class="container">
    <div class="wrapper">
      <h2>Login</h2>
        <tr>
        <td><label for="user">Username</label></td>
        <br />
        <td><input type="text" id="user" name="user" class="input" placeholder="Username"required/></td>
      </tr>
      <br />

      <div class="trpw">
      <tr> 
        <td><label for="user">Password</label></td>
        <br />
        <td><input type="text" id="pass" name="pass"class="input" placeholder="Password"required/></td>
      </tr>
      <br/>
      <div class="btn">
      <tr>
        <td colspan="2"><input type="submit" value="Lanjut" class="lanjut"></td>
        <td><input type="reset"  value="Batal" class="batal"></td>
      </tr>
      </div>
      </div>
      </div>
    </div>
  </body>
</form>
</html>
