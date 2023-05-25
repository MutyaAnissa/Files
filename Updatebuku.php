<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update</title>
</head>
<body>
    <?php
        if ($_POST){
            $booksData = $_POST["update"];

            $fileName = "Data Buku.txt";
            $read = file($fileName); 

            if (file_put_contents($fileName, $booksData)){
                echo "Berhasil diperbarui<br />";
            }else {
            }
        }

        $link_data = "Readbuku.php";
        echo "<br />";
        echo "<a href = \"$link_data\">Kembali</a>";
    ?>
</body>
</html>
