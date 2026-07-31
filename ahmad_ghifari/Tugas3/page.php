<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
</head>
<body>

    <h2>Form Komentar Tugas 2</h2>
    
    <form action="" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Isi Komentar</td>
                <td>:</td>
                <td><textarea name="komentar" required></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="submit">Kirim Komentar</button></td>
            </tr>
        </table>
    </form>

    <br><hr><br>

    <?php
    if (isset($_POST['submit'])) {
        $nama_raw = $_POST['nama'];
        $email_raw = $_POST['email'];
        $komentar_raw = $_POST['komentar'];

        $nama_clean = strip_tags(trim($nama_raw));
        $email_clean = strip_tags(trim($email_raw));
        
        $len_sebelum = strlen($komentar_raw);
        $komentar_trimmed = trim($komentar_raw);
        $len_sesudah = strlen($komentar_trimmed);
        
        $komentar_clean = strip_tags($komentar_trimmed);
        
        $tanggal = date('d-m-Y H:i:s');
    ?>
        <h3>Hasil Pemrosesan PHP</h3>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <td>Nama</td>
                <td><?php echo htmlspecialchars($nama_clean); ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo htmlspecialchars($email_clean); ?></td>
            </tr>
            <tr>
                <td>Tanggal Kirim</td>
                <td><?php echo $tanggal; ?></td>
            </tr>
            <tr>
                <td>Komentar Bersih</td>
                <td><pre><?php echo htmlspecialchars($komentar_clean); ?></pre></td>
            </tr>
            <tr>
                <td>Sebelum di-trim()</td>
                <td><?php echo $len_sebelum; ?> karakter</td>
            </tr>
            <tr>
                <td>Sesudah di-trim()</td>
                <td><?php echo $len_sesudah; ?> karakter</td>
            </tr>
        </table>
    <?php
    }
    ?>

</body>
</html>