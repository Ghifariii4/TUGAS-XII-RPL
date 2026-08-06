<?php

if (isset($_POST['submit'])){
    print_r($_FILES);
    echo "<br>";

    $nama   = $_FILES['gambar']['name'];
    $error  = $_FILES['gambar']['error'];
    $size   = $_FILES['gambar']['size'];
    $asal   = $_FILES['gambar']['tmp_name'];
    $format = $_FILES['gambar']['type'];

    if ($error == 0){
        if ($size < 1000000){
            if ($format == 'image/png'){
                
                $tujuan = 'upload/' . $nama;
                if (move_uploaded_file($asal, $tujuan)){
                    echo "<h2> upload berhasil </h2>";
                    echo "<p> nama file : <b> $nama </b> </p>";
                    echo "<img src='$tujuan' width='300'>";
                } else {
                    echo "gagal upload";
                }
            } else {
                echo "formatnya harus jpeg";
            }
        } else {
            echo "gambarnya kegedean";
        }
    } else {
        echo "ada error";
    }
}

?>

<form action="index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="gambar">
    <input type="submit" name="submit" value="upload">
</form>