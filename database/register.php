<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Belajar Membuat Login dan register</title>
  </head>
  <body>
    <center>
      <h1>Form Register</h1>
    </center>
    <table>
    <form action="reg_proses.php" method="post">
      <tr>
        <td>UserID</td>
        <td>:</td>
        <td><input type="text" name="user_name" placeholder="Masukan UserID"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" placeholder="Masukan Nama Lengkap"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="pass" placeholder="Masukan Password"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="email" name="email" placeholder="Masukan Email"></td>
      </tr>
      <tr>
        <td><input type="submit" name="submit" value="Save">
        <input type="reset" name="reset" value="Reset"></td>
      </tr>
    </form>

    <tr>
      <td>Sudah ada akun kembali ke <a href="index.php">Login</a></td>
    </tr>
    </table>
  </body>
</html>