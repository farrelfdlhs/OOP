<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Penduduk</title>
</head>
<body>
    <fieldset>
        <legend>Data Penduduk</legend>
        <form action="" method="post">
            <label for="">Jumlah Penduduk</label>
            <input type="number" name="jmlh" min="1" required>
            <input type="submit" value="Next" name="simpan">
            <input type="hidden" name="<?php echo $jmlh; ?>">
        </form>
        <?php
            if (isset($_POST['simpan'])) {
                $jmlh = $_POST['jmlh'];

                for ($i=1; $i <= $jmlh; $i++) { 
                    # code...
        ?>
        
        <form action="latoop5pro.php" method="post">
            <hr>
            <label for="">Nama</label>
            <input type="text" name="nama[]" required>
            <label for="">NIK</label>
            <input type="number" name="nik[]" min="1" required>
            <label for="">Alamat</label>
            <textarea name="alamat[]" required></textarea>
            <label for="">Umur</label>
            <input type="number" name="umur[]" min="1" required>
            <br><br>
            <?php } ?>
            <input type="submit" value="Proses" name="prosses">
        </form>
                
    </fieldset>
    <?php } ?>
</body>
</html>