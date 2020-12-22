<?php
session_start();
include("db.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
  </head>
  <body>
    <button type="button" onclick="parent.location='index.php'">BACK</button>
    <?php
        $uname=$_SESSION['uname'];
        $sql = "SELECT * FROM admin WHERE uname='$uname'" ;
        $result = $db->query($sql);
        $data = $result->fetch_assoc();
          echo $data['uname'].'<br>'
          .$data['nama'].'<br>'
          .$data['alamat'].'<br>'
          .$data['email'].'<br>'
          .$data['nohp'].'<br>'
          .$data['birthdate'].'<br>'
          .$data['gender'];
    if($data['nama_toko']==''&&$data['status']!=3){?>
      <a onclick="document.getElementById('buat-toko').style.display='block'">buat toko</a>
    <?php }?>
    <div id='buat-toko' class="buat-toko">
      <form action="buat-toko.php" method="post">
        <label>Nama Toko :</label><input type="text" name="nama_toko" placeholder="Nama Toko">
        <input type="submit" name="buat-toko-submit" placeholder="Test">
      </form>
    </div>
  </body>
</html>
<style media="screen">
  a{
    cursor:pointer;
  }
  .buat-toko{
    display:none;
  }
</style>
