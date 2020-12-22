<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Toko Anda</title>
  </head>
  <body>
    <button type="button" onclick="location='index.php'">BACK</button>
    <table border="1px solid black">
      <thead>
        <th>Foto</th>
        <th>Nama Barang</th>
        <th>Harga Pokok</th>
        <th>Harga Jual</th>
        <th>Kategori</th>
        <th>Deskripsi</th>
        <th>Edit</th>
      </thead>
    <?php
      session_start();
      include("db.php");
      $sql="SELECT product.*,category.category FROM product INNER JOIN category ON product.category_id=category.category_id WHERE owner='tokosaya'";
      $result=mysqli_query($db,$sql);
      echo '<tbody>';
      while($row = $result->fetch_assoc())
      {
        echo'<tr>'.
        '<td>';?><img src="img/<?php echo $row['foto']; ?>">
          <?php echo '</td>'.
        '<td>'.$row['nama'].'</td>'.
        '<td>'.$row['harga_pokok'].'</td>'.
        '<td>'.$row['harga_jual'].'</td>'.
        '<td>'.$row['category'].'</td>'.
        '<td>'.$row['deskripsi'].'</td>'.
        '</tr>';
      }
      echo '</tbody>';
     ?>
  </body>
</html>
