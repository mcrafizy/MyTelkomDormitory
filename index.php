<!DOCTYPE html>
<html>
    <head>
      <title>Login | MyTelkomDormitory</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <link rel="stylesheet" type="text/css" href="Style.css">
    </head>

    <body>
      <table class="tablelogin" border="0" align="center">
        <tr>
          <th colspan="3">
          <h2>MyTelkomDormitory</h2>
              <?php
                 session_start();
                 if(isset($_SESSION['username'])) {
                 header('location:index.html'); }
                 require_once("koneksi.php");
              ?>
          </th>
        </tr>
        <tr>
          <div class="login">
            <form class="formlogin" action="proseslogin.php" method="post" onSubmit="return validasi()">
              <div class="">
          <td><label>Username</label></td>
          <td> : </td>
          <td><input type="text" name="username" id="username" value=""/></div></td>
        </tr>
        <tr>
          <div class="">
          <td><label>Password</label></td>
          <td> : </td>
          <td><input type="password" name="password" id="password" value=""/></div></td>
        </tr>
        <tr>
          <div class="">
            <td colspan="3">
              <input type="submit" name="Login" class="button" value="LOGIN">
            </td>
          </div>
        </tr>
      </table>
      <table align="center">
        <tr>
          <td><a href="index.html">Kembali</a></td>
          <td><a href="daftar.php">Buat Akun</a></td>
          <td>Copyright 2019 | @mcrafizy</td>
        </tr>
      </table>
        </form>
      </div>
    </body>

<script type="text/javascript">
  function validasi(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username != "" && password!="") {
      return true;
    } else {
      alert('Username atau Password salah!');
      return false;
    }
  }
</script>
</html>
