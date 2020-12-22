
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    session_start();
    include("nav.php");
    include("db.php");
    $uname=$_SESSION['uname'];
    $sql="SELECT * FROM balance WHERE uname='$uname'";
    $result = mysqli_query($db,$sql);
    $data = mysqli_fetch_array($result);
    $sql="SELECT product.nama AS nama_barang ,product.owner,product.harga_jual,admin.nama,cart.jumlah FROM cart
    INNER JOIN admin ON cart.uname=admin.uname
    INNER JOIN product ON cart.id_barang = product.id
    WHERE cart.uname='$uname'";
    $result = mysqli_query($db, $sql);
    ?>
    <table border="1px solid black">
      <thead>
        <th>Nama Barang</th>
        <th>Nama Toko</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Total Harga</th>
        <th>Edit</th>
      </thead>
      <tbody>
        <?php
          $totalsub=0;
          while($row = $result->fetch_assoc()){
            echo '<tr>'
            .'<td>'.$row['nama_barang'].'</td>'
            .'<td>'.$row['owner'].'</td>'
            .'<td>'.$row['jumlah'].'</td>';
            $subtotal=$row['jumlah']*$row['harga_jual'];
            $totalsub=$totalsub+$subtotal;
            echo '<td>'.$row['harga_jual'].'</td>'
            . '<td>'.$subtotal.'</td>';?>
            <td>
              <a href='edit.php?id=<?php echo $row['id_barang']; ?>'>Edit</a> |
              <a href='hapus.php?id=<?php echo $row['id_barang']; ?>'>Hapus</a></td></tr>
            <?php
          }
         ?>
      </tbody>
    </table>
    <div id="saldokurang" class="warning-modal">
      <div class="modal-content">
        SALDO ANDA KURANG HARAP ISI SALDO <br>
        <center><button type="button" name="button" onclick="document.getElementById('saldokurang').style.display='none'">OK</button></center>
      </div>
    </div>
    <script>
      function saldokurang(){
          console.log('saldokurang');
          document.getElementById('saldokurang').style.display="block";
      }
      function saldoada(){
          console.log('saldo ada');

      }
    </script>
    <button type="submit" name="button" onclick="<?php if($data['saldo']<$totalsub){echo 'saldokurang()';}else{echo'saldoada()';} ?>">Bayar</button>
    </body>
</html>

<style media="screen">
  .modal-content{
    background: white;
  }
  .warning-modal{
    display: none; /* Hidden by default */
    position: fixed;
    z-index: 2; /* Sit on top */
    left: 0;top: 0;  right:0;bottom:0;
    width: 60%; /* Full width */
    height: 40%; /* Full height */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-left:20%;
    padding-right:20%;
    padding-top: 20%;
    padding-bottom: 20%;
  }
</style>
