<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <button type="button" onclick="location='index.php'">BACK</button>
    <form action="reg-proses.php" method="post">
      <label>Username</label><input type="Text" name="reg-uname" required><br>
      <label>Password</label><input type="password" name="reg-pass" required><br>
      <label>Repeat Password</label><input type="password" name="reg-repass" required><br>
      <label>Nama</label><input type="Text" name="reg-name" required><br>
      <label>E-mail</label><input type="text" name="reg-email" required><br>
      <label>No.Telp</label><input type="text" name="reg-telp" required><br>
      <label>Alamat</label><input type="text" name="reg-alamat" required><br>
      <label>Tanggal Lahir</label><input type="date" name="birth-date" required><br>
      <label>Jenis Kelamin</label><br>
          <input type="radio" name="sex" value="1" required>Male
          <input type="radio" name="sex" value="2">Female<br>
      <button type="submit" name="reg-submit">REGISTER</button>
    </form>
  </body>
</html>

<!-- INSERT INTO product VALUES(2,'carnation',11500,12500,1,'susu yang siap menguatkan otot kalian','2.png') -->
