<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
        include("db.php");
        $id=$_GET['id'];
        $sql="SELECT *,cart.jumlah FROM product INNER JOIN cart ON cart.id_barang = product.id WHERE id=$id";
        $query=mysqli_query($db,$sql);
        $data = mysqli_fetch_array($query);
        if($data>0){

        }
        else{
          $sql="SELECT * FROM product WHERE id=$id";
          $query=mysqli_query($db,$sql);
          $data = mysqli_fetch_array($query);
        }
        ?> <img src="img/<?php echo $data['foto'] ?>" alt=""><?php
        echo
        $data['nama'].'<br>'.
        $data['harga_jual'].'<br>'.
        $data['owner'].'<br>'.
        $data['deskripsi'];

        $check=isset($data['jumlah']);
        session_start();
        if(isset($_SESSION['uname'])){

        }
        else{
          header('Location: home.php?kategori=none&login=0');
        }
       ?>
         <button onclick="document.getElementById('buy-modal').style.display='block'">Beli</button>

        <div id="buy-modal" class="modal">
            <div class="modal-content">
              <form action="add-cart.php" method="post">
                <button type="button" name="button" onclick="kurang()">-</button>
                <input name="qty" type="text" id="qty" value="<?php

                if($check==NULL)
                {
                  echo 0;
                }
                else{
                  echo $data['jumlah'];
                } ?>" onclick="count()" onkeypress="count()">
                <button type="button" name="button" onclick="add()">+</button>
                <?php echo $data['harga_jual']; $_SESSION['id']=$data['id']; ?>
                Subtotal:<?php  ?>
                <button type="submit" name="add-to-cart" onclick="count()">Add to cart</button>
              </form>
            </div>
        </div>
  </body>
</html>
<style media="screen">
  .modal{
    display:none;
    position: fixed;
    z-index: 2;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
    left: 0;top: 0;  right:0;bottom:0;
    width: 100%;
    height: 100%;
  }
  .modal-content{
    background:white;
    width: max-content;
    margin-top: 15%;
    position: absolute;
    margin: 15% 40%;
  }
  button{
    border-radius: 20px;
    background: #3de627;
    cursor: pointer;;
  }
</style>
<script>
  window.onclick=function(event){
    if(event.target == document.getElementById('buy-modal'))
    {
      document.getElementById('buy-modal').style.display="none";
    }
  }
  function count(){
    qty=parseInt(document.getElementById("qty").value);
  }
  function add(){
    qty=parseInt(document.getElementById("qty").value);
    qty++;
    document.getElementById("qty").value = qty;
  }
  function kurang(){
    qty=parseInt(document.getElementById("qty").value);
    if(qty>0){
      qty--;
    }
    document.getElementById("qty").value = qty;
  }
</script>
