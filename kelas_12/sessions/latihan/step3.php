<?php
session_start();

if(!isset($_SESSION['tiket'])){
    header("Location: step1.php");
}
?>

<h2>Ringkasan</h2>

Nama : <?= $_SESSION['nama']; ?><br>
Email : <?= $_SESSION['email']; ?><br>
Telepon : <?= $_SESSION['telp']; ?><br>
Tiket : <?= $_SESSION['tiket']; ?><br>

Workshop :
<?php
echo implode(", ", $_SESSION['workshop']);
?>

<br><br>

<a href="success.php">Konfirmasi & Simpan</a>
<br><br>
<a href="reset.php">Batal/Reset</a>
