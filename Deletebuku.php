<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Delete</title>
</head>
<body>
    <?php

        if ($_POST){

            $key = $_POST["Judul"];

            $fc=file("Data Buku.txt");

            $f=fopen("Data Buku.txt","w");

            foreach($fc as $line)
            {
                if (!strstr($line,$key)) 
                        fputs($f,$line); 
            }
            fclose($f);

            echo "Berhasil dihapus!<br/>";
    }
    $link_data = "Readbuku.php";
    echo "<br />";
    echo "<a href = \"$link_data\">lainnya</a>";
    ?>
</body>
</html>