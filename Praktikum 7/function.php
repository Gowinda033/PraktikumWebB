<!DOCTYPE HTML>
<html>
    <head>
        <title>Praktikum 7</title>
    </head>
    <body>
    <?php
        if (isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $tugas = $_POST['tugas'];
            $uts = $_POST['uts'];
            $uas = $_POST['uas'];

            $akhir = (($tugas+$uts+$uas)/3);
    ?>
        <h1>Nilai Akhir Mahaiswa</h1>
            Nama = <?php echo $nama ?><br>
            NIM  = <?php echo $nim ?><br><br>
            <div class="">
                Nilai Tugas Anda= <?php echo $tugas ?><br>
            
                Nilai UTS Anda  = <?php echo $uts ?><br>
            
                Nilai UAS Anda  = <?php echo $uas ?><br>
            
                <h2> Nilai Akhir Anda = <?php echo $akhir ?></h2>
            </div>
            <div class="">
                    <h3>
                        <?php
                            if($akhir >= 80){
                                echo "Anda Dinyatakan Lulus Dengan Predikat A";
                            }
                            elseif($akhir >= 70){
                                echo "Anda Dinyatakan Lulus Dengan Predikat B";
                            }
                            elseif($akhir >= 60){
                                echo "Anda Dinyatakan Lulus Dengan Predikat C";
                            }
                            else{
                                echo "Maaf Anda Dinyatakan Tidak Lulus";
                            }
                        ?>
                    </h3>  
            </div>
    <?php
        }
    ?>
    </body>
</html>