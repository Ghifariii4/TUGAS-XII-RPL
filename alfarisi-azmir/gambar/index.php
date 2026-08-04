<?php

if (isset($_POST['submit'])) {
    print_r($_FILES);

    $nama = $_FILES['gambar']['name'];
    $asal = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($asal, 'upload/'. $nama);
}

?>

<form action="index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="gambar">
    <input type="submit" name="submit" value="upload">
</form>