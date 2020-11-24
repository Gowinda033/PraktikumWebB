<!DOCTYPE HTML>
<html>
    <head>
        <title>Praktikum 7</title>
    </head>
    <body>
        <form action="function.php" method="post">
            
                <h2>Data Mahasiswa</h2>                        
                <label for="">Nama</label>
                <input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"><br>           
            
                <label for="">NIM</label>
                <input type="text" name="nim" value="<?=isset($_POST['nim']) ? $_POST['nim'] : ''?>"><br><br>

                <h2>Nilai Mahasiswa</h2>
                
                <label for="">Tugas</label>
                <input type="text" name="tugas" value="<?=isset($_POST['tugas']) ? $_POST['tugas'] : ''?>"><br>            
            
                <label for="">UTS</label>
                <input type="text" name="uts" value="<?=isset($_POST['uts']) ? $_POST['uts'] : ''?>"><br>            
            
                <label for="">UAS</label>
                <input type="text" name="uas" value="<?=isset($_POST['uas']) ? $_POST['uas'] : ''?>"><br><br>

                <input type="submit" name="submit" value="Submit"/> 
        </form>
    </body>
</html>