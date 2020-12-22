<!DOCTYPE html>
<?php
session_start();
include("db.php");
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="logo.png">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

    <title>Packer</title>
  </head>

  <body>

    <div id="fail-login" class="modal-login">
      <div class="detailbox">
        Harap Login
        <button type="button" name="OK" onclick="document.getElementById('fail-login').style.display='none'">OK</button>
      </div>
    </div>
    <script>
      function loginfail(){
        console.log('LOGIN0');
        var test=document.getElementById('fail-login');
        test.style.display='block';
        console.log(test);
      }
      </script>
    <?php
      if(!isset($_GET['login'])){

      }
      else if($_GET['login']==0){
        echo '<script>loginfail();</script>';
      }
     ?>

    <!-- USER LOG -->
    <div id="user-log" class="user-log">
      <?php echo "Hi ".$_SESSION['nama']."!".'<br>';
        if($_SESSION['status']==2){
        ?><a href="toko.php">Kelola Toko</a><br><?php
      }
      ?>
      <a href="account.php">Lihat Profil</a><br>
      <a href="logout-proses.php">Logout</a>
    </div>

    <div id="kategori-log" class="kategori-log">
        <ul>
          <li><a href="home.php?kategori=makanan">Makanan</a></li>
          <li><a href="home.php?kategori=minuman">Minuman</a></li>
        </ul>
    </div>

    <div class="wrapper">
      <!-- TOP NAV -->
      <div class="top-nav">
          <div class="top-nav-content">
            <a href="home.php?kategori=none"><center>TOKOKU</center></a>
          </div>

          <div class="top-nav-content">
            <center><a id=kategori onclick="katclick()">Kategori</a></center>
          </div>

          <div class="top-nav-content">
            <form class="search-hox" action="#" method="post">
              <input type="search" name="sbox" value="" placeholder="cari">
            </form>

          </div>
          <?php
            if(isset($_SESSION['uname'])){
              ?>
              <div class="top-nav-right login-show">
                <a class="fas fa-shopping-cart" onclick="parent.location='checkout.php'"></a>
                |
                <a id="user-icon" class="far fa-user-circle" onclick="document.getElementById('user-log').style.display='block'"></a>
              </div>
              <?php
            }
            else{
              ?>
              <div id="Login-Linker" class="top-nav-right login-show">
                <a onclick="document.getElementById('id02').style.display='block'"><center>LOGIN / REGISTER</center></a>
              </div>
              <?php
            }
           ?>
      </div>

      <!-- MAIN CONTENT -->
      <div class="main-content">
        <div id="product" class="product">
          <?php
            $sql="SELECT * FROM product LIMIT 6";
            if($_GET['kategori']=='makanan')
            {
              $sql="SELECT * FROM product WHERE category_id=2 LIMIT 6";
            }
            else if($_GET['kategori']=='minuman')
            {
              $sql="SELECT * FROM product WHERE category_id=1 LIMIT 6";
            }
            else{
              $sql="SELECT * FROM product LIMIT 6";
            }
            $result=mysqli_query($db,$sql);
            while($row = $result->fetch_assoc())
            {
              ?><div class="product-log"><a href="detail-barang.php?id=<?php echo$row['id'];?>" id="<?php echo $row['id'];?>" >
                <img src="img/<?php echo $row['foto']?>">
                <?php
                echo '<div class="description-item">'.'<p>'
                .$row['nama']
                .$row['deskripsi']
                .'<br>'.'</p>'.'</div>'.
                '<div class=price-fp>'."Rp.".$row['harga_jual']?><right><button>Add to Cart</button></right></div>
              </a></div>
              <?php
            }?>
          <!-- <div class="product-log">
            <img id="img001" src="img/1.png">
            Product ini adalah Sebuah barang terbaru dari perusahaan kami <right><button>Add to Cart</button></right>
          </div>
          <div class="product-log">
            <img id="img002" src="img/2.png">
            Product ini adalah Sebuah barang terbaru dari perusahaan kami <right><button>Add to Cart</button></right>
          </div>
          <div class="product-log">
            <img id="img003" src="img/3.png">
            Product ini adalah Sebuah barang terbaru dari perusahaan kami <right><button>Add to Cart</button></right>
          </div> -->
        </div>
        <div class="col-span">
          <div class="col-4">
            <button type="button" name="prev" style="float:right"><</button>
          </div>
          <div class="col-4">
            <br>
          </div>
          <div class="col-4">
            <button type="button" name="button" onclick="next()" style="float:left">></button>
          </div>

        </div>

      </div>

  </body>
  <!-- MODAL LOGIN -->
  <div id="id02" class="modal-login">
    <div class="detailbox">
      <form action="login-proses.php" method="post">
        <center>LOGIN</center>
        <center><label>USERNAME</label><input type="text" name="username" placeholder="Username"></center>
        <center><label>PASSWORD</label><input type="password" name="password" placeholder="Password"></center>
        <center><button type="submit" name="login-submit">LOGIN</button></center>
      </form>
      <center>Belum Punya Akun ? <a href="register.php">Register</a></center>
      <center><a href="forget-password.php">lupa Kata Sandi ? </a></center>
    </div>
  </div>

  <style>
    .kategori-log{
      background: white;
      position:absolute;
      display:none;
      width:100%;
      height:200px;
      margin-top:22px;
    }
    .wrapper{
      height: 150%;
      background: purple;
    }
    .description-item{
      margin-top:200px;
      min-height: 20%;
      min-height: 40px;
      max-height: 40px;
      overflow: hidden;
    }
    .price-fp{
      width: 100%;
    }
    p{
      margin-block-start:0;
      margin-block-end:0;
    }
    right{
      text-align: right;
      float:right;
    }

    .user-log{
      display: none;
      position: absolute;
      z-index: 2;
      background-color: white;
      margin-top: 22px;
      height: auto;
      text-align: center;
      width: 10%;
      right: 0;
      top: 0;
    }
    .login-show{
      display: block;
    }
    .login-hidden{
      display: none;
    }
    .col-span{
      width: 100%;
      height: auto;
    }
    .col-3{width: 25%}.col-4{width: 33.333333%;height: background: white;float: left;}.col-6{width:50% }
    .product{
      margin-top:2.5%;
    }
    .product-log{
      height: auto;
      min-height: 300px;
      max-height: 300px;
      width: 30%;
      float:left;
      padding: 0 1.65%;
    }
    img{
      width:100%;
      height: 200px;
      vertical-align:middle;
      float: left;
    }
    center{
      margin: 0 0;
    }
    a{
      color: black;
      cursor: pointer;
      text-decoration: none;
    }
    ul,li{
      margin:0 0;
      margin-left: -10px;
      max-width: 15%;
      max-height: 100%;
    }
    html,body{
      margin: 0 0;
      height: 100%;
      width: 100%;
    }

    .logo-img{
      padding-left: 20%;
      padding-right: 20%;
      width: 60%;
      height: 100px;
      background-color: white;
    }
    .modal-login {
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
    .detailbox{
      background: white;
    }
    .top-nav-right{
      float:right;
      font-size: auto;
      width: auto;
      height: 100%;
      text-align: right;
      vertical-align:middle;
    }
    .top-nav-content{
      font-size: auto;
      margin: 0px 0px;
      width: 15%;
      height: 100%;
      float: left;
      border-right: 1px solid black;
    }
    .main-left-sidebar{
      text-align: center;
      font-size: 24px;
      border-top: 2px solid black;
      border-bottom: 2px solid black;
      margin-top: 0;
    }
    .top-nav{
      height: 22px;
      width: 100%;
      background: white;
      float: right;
    }
    .main-content{
      background: orange;
      height: auto;
      min-height: 92.5%;
      width: 100%;
      overflow:hidden;
      float:left;
    }
    .right-main-sidebar{
      display:none;
      position:fixed;
      background: green;
      width: 15%;
      height: auto;
      min-height: 92.5%;
      float: right;
    }
    .left-sidebar{
      width: 20%;
      background: red;
      height: auto;
      min-height: 100%;
      float: left;
      display:none;
    }
  </style>
  <script>
    // Get the modal

    var modal1 = document.getElementById('id02');
    var linker = document.getElementById('Login-Linker');
    var user = document.getElementById('user-icon');
    var userlog = document.getElementById('user-log');
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event)
    {
      if (event.target == modal1||(document.getElementById('user-log').style.display=='block'&&event.target != userlog&&event.target!=user))
      {
        modal1.style.display = "none";
        userlog.style.display ="none";
      }
      if(document.getElementById('kategori-log').style.display=='block'
      &&event.target!=document.getElementById('kategori')
      &&event.target!=document.getElementById('kategori-log'))
      {
        document.getElementById('kategori-log').style.display='none';
        console.log(event.target);
      }
    }
    function product(){
        document.getElementById("img001").src = 'img/'+img[0]+'.png'
    }
    function katclick()
    {
      if(document.getElementById('kategori-log').style.display=='none')
      {
        document.getElementById('kategori-log').style.display='block';
      }
      else{
        document.getElementById('kategori-log').style.display='none';
      }
    }
  </script>
</html>
