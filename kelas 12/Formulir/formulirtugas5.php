<!DOCTYPE html>
<html>
<head>
    <title>Formulir PHP</title>
</head>
<body>

    <form action="" method="POST">
        Nama: <input type="text" name="nama" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Komentar:<br>
        <textarea name="komentar" required></textarea><br><br>
        <button type="submit" name="proses">Kirim</button>
    </form>

    <?php
    if (isset($_POST['proses'])) {
        $nama_asal = $_POST['nama'];
        $email_asal = $_POST['email'];
        $komentar_asal = $_POST['komentar'];

        $nama_bersih     = strip_tags(trim($nama_asal));
        $email_bersih    = strip_tags(trim($email_asal));
        $komentar_bersih = strip_tags(trim($komentar_asal));
        $waktu           = date("d-m-Y");

        echo "<h3>Hasil Pemrosesan ($waktu):</h3>";
        echo "Nama: $nama_bersih <br>";
        echo "Email: $email_bersih <br>";
        echo "Komentar: $komentar_bersih <br><br>";

        echo "<h3>Perbandingan Karakter (Sebelum vs Sesudah di-trim):</h3>";
        echo "Nama: " . strlen($nama_asal) . " -> " . strlen($nama_bersih) . "<br>";
        echo "Email: " . strlen($email_asal) . " -> " . strlen($email_bersih) . "<br>";
        echo "Komentar: " . strlen($komentar_asal) . " -> " . strlen($komentar_bersih) . "<br>";
    }
    ?>

</body>
</html>