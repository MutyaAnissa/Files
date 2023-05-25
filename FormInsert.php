<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>FormInsert</title>
</head>
<body>
        <legend><h2>Tambahkan Data</h2></legend>
            <table>
                    <form action = "Insertbuku.php" method = "POST"  enctype = "multipart/form-data">
                        <tr>
                            <td>
                                <label for = "kode">
                                    Kode :
                                </label>
                            </td>
                            <td>
                                <input type = "number" name = "kode" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for = "judul">
                                    Judul :
                                </label>
                            </td>
                            <td>
                                <input type = "text" name = "judul" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for = "pengarang">
                                    Pengarang :
                                </label>
                            </td>
                            <td>
                                <input type = "text" name = "pengarang" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for = "tahun terbit">
                                        Tahun Terbit :
                                </label>
                            </td>
                            <td>
                                <select name = "tahun terbit" required>
                                <option value="">Tahun</option>
                                    <?php
                                        $start  = 1973;
                                        $end = date('Y');
                                                                        
                                        for ($year = $start; $year<=$end; $year++) {
                                            echo "<option value = $year> $year </option>";
                                        }
                                    ?>
                                <option value="lainnya">lainnya</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for = "halaman">
                                    Halaman :
                                </label>
                            </td>
                            <td>
                                <input type = "number" name = "halaman" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for = "penerbit">
                                    Penerbit :
                                </label>
                            </td>
                            <td>
                                <input type = "text" name = "penerbit" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for = "kategori">
                                        Kategori :
                                </label>
                            </td>
                            <td>
                                <select name = "kategori" required>
                                <option value="">Pilih Kategori Buku</option>
                                <option value="biografi">biografi</option>
                                <option value="majalah">majalah</option>
                                <option value="novel">novel</option>
                                <option value="lainnya">others</option>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for = "cover">
                                    Cover :
                                </label>
                            </td>
                            <td>
                                <input type = "file" name = "cover" required/>
                            </td>
                        </tr>
            </table>
                    <p></p>
                        <tr>
                            <td>
                                <input type = "submit" value = "Simpan"/>
                                <input type = "reset" value = "Reset"/>
                                <button><a href="Readbuku.php" class = "cancel">Batal</a></button>
                            </td>
                        </tr>
                    </form>
</body>
</html>