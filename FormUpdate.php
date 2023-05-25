<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>FormUpdate</title>
</head>
<body>
    <h2>Perbarui Data Buku</h2>
    <p><b>Clue : </b>Kode-Judul-Pengarang-Tahun Terbit-Halaman-Penerbit-Cover file name</p>
    <?php
        if (file_exists("Data Buku.txt")){
            $file = "Data Buku.txt";
            $update = file_get_contents($file);
        }
    ?>
    <form action = "Updatebuku.php" method = "POST">
            <textarea rows = 25 cols = 120 name = "update" text><?php echo "$update"; ?></textarea>
        <input type = "submit" value = "Simpan"/>
        <button><a href="Readbuku.php" class = "cancel">Batal</a></button>
    </form>
</body>
</html>