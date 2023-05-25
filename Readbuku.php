<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, td{
            border: 1px solid black;
            border-collapse: collapse;
            text-align: left;
            padding: 3px;
            width : 150px;
        }
        th{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 3px;

        }
        img{
            padding: 5px;
            width: 150px;
        }
    </style>
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <h1>Data Buku</h1>
    <button><a href="FormInsert.php">Tambah data</a></button>
    <button><a href="FormUpdate.php">Perbarui Data</a></button>
    <button><a href="FormDelete.php">Hapus Data</a></button>
    <p></p>
    <hr />

    <?php
        echo "<h3>Koleksi Buku : </h3>";

        $file_name = "Data Buku.txt";

        $read = file($file_name); 

        $rows = explode("\n", $file_name);
        $rowCount = count($rows);

        foreach ($read as $books){
            $books_data = explode("-", $books);

            echo "<table>";

            echo    "
                <tr>
                    <td rowspan=9>";
                    echo "<img src = './Coverbuku/$books_data[7].'>";
            echo "      </td>
                </tr>
                <tr>
                    <th>Kode </th>
                    <td>$books_data[0]</td>
                </tr>
                <tr>
                    <th>Judul</th>
                    <td>$books_data[1]</td>
                </tr>
                <tr>
                    <th>Pengarang</th>
                    <td>$books_data[2]</td>
                </tr>
                <tr>
                    <th>Tahun Terbit</th>
                    <td>$books_data[3]</td>
                </tr>
                <tr>
                    <th>Halaman</th>
                    <td>$books_data[4]</td>
                </tr>
                <tr>
                    <th>Penerbit</th>
                    <td>$books_data[5]</td>
                </tr>
                <tr>
                    <th>Kategori</th>
                    <td>$books_data[6]</td>
                </tr>
                

            </table>
            <br />";

            }
        echo '<a href="#">kembali</a>';
    ?>
</body>
</html>
