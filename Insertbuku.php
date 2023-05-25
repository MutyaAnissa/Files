<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Insert</title>
</head>
<body>
   <?php

   if(isset($_FILES['cover'])){
      $errors= array();
      $file_name = $_FILES['cover']['name'];
      $file_size =$_FILES['cover']['size'];
      $file_tmp =$_FILES['cover']['tmp_name'];
      $file_type=$_FILES['cover']['type'];
      $tmp = explode('.', $file_name);
      $file_ext = end($tmp);
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="Pilih format file dalam bentuk JPEG, JPG atau PNG!";
      }
      
      if($file_size > 2097152){
         $errors[]="Ukuran file maksimal 3 MB";
      }
      
      if(empty($errors)==true){
      $folder = "Coverbuku/";
         move_uploaded_file($file_tmp,$folder.$file_name);
         echo "Berhasil disimpan";
      }else{
         print_r($errors);
      }
   }

   if ($_POST){
   $booksData = $_POST["kode"]."-".$_POST["judul"]."-".$_POST["pengarang"]."-".$_POST["tahun terbit"]."-".$_POST["halaman"]."-".$_POST["penerbit"]."-".$_POST["kategori"]."-".$file_name."\n";

   $fileName = "Data Buku.txt";

   if (file_put_contents($fileName, $booksData, FILE_APPEND)){
      echo " Berhasil";
   }else {
      echo "Gagal";
   }
   }

   $link_data = "Readbuku.php";
   echo "<br />";
   echo "<a href = \"$link_data\">Tampilkan </a>";
   ?>
</body>
</html>