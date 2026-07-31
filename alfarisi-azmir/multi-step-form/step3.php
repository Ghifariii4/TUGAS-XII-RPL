<?php
session_start();

// Guard Check
if (!isset($_SESSION['nama']) || !isset($_SESSION['tiket'])) {
    header("Location: step1.php?error=Silakan isi seluruh data terlebih dahulu!");
    exit();
}

if (isset($_POST['confirm'])) {
    // Simulasi simpan data ke file JSON
    $data_pendaftaran = [
        'nama' => $_SESSION['nama'],
        'email' => $_SESSION['email'],
        'telepon' => $_SESSION['telepon'],
        'tiket' => $_SESSION['tiket'],
        'workshop' => $_SESSION['workshop']
    ];

    // Simpan ke file JSON
    $file_path = 'pendaftaran.json';
    $existing_data = [];
    if (file_exists($file_path)) {
        $json_content = file_get_contents($file_path);
        $existing_data = json_decode($json_content, true);
        if (!is_array($existing_data)) {
            $existing_data = [];
        }
    }
    $existing_data[] = $data_pendaftaran;
    file_put_contents($file_path, json_encode($existing_data, JSON_PRETTY_PRINT));

    // Buat Flash Message sukses
    $_SESSION['flash_success'] = "Pendaftaran berhasil disimpan!";

    // Hapus data sesi pendaftaran
    unset($_SESSION['nama']);
    unset($_SESSION['email']);
    unset($_SESSION['telepon']);
    unset($_SESSION['tiket']);
    unset($_SESSION['workshop']);

    // Arahkan ke success.php
    header("Location: success.php");
    exit();
}

if (isset($_POST['reset'])) {
    // Hapus data sesi pendaftaran
    unset($_SESSION['nama']);
    unset($_SESSION['email']);
    unset($_SESSION['telepon']);
    unset($_SESSION['tiket']);
    unset($_SESSION['workshop']);

    header("Location: step1.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Langkah 3: Ringkasan & Konfirmasi</title>
</head>
<body>
    <h2>Langkah 3: Ringkasan & Konfirmasi</h2>

    <h3>Ringkasan Data:</h3>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td>Nama Lengkap</td>
            <td><?php echo htmlspecialchars($_SESSION['nama']); ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo htmlspecialchars($_SESSION['email']); ?></td>
        </tr>
        <tr>
            <td>Nomor Telepon</td>
            <td><?php echo htmlspecialchars($_SESSION['telepon']); ?></td>
        </tr>
        <tr>
            <td>Tipe Tiket</td>
            <td><?php echo htmlspecialchars($_SESSION['tiket']); ?></td>
        </tr>
        <tr>
            <td>Workshop Terpilih</td>
            <td>
                <?php 
                if (!empty($_SESSION['workshop'])) {
                    echo implode(', ', array_map('htmlspecialchars', $_SESSION['workshop']));
                } else {
                    echo '-';
                }
                ?>
            </td>
        </tr>
    </table>
    <br><br>

    <form action="step3.php" method="POST">
        <a href="step2.php">Kembali</a> | 
        <button type="submit" name="reset">Batal / Reset</button>
        <button type="submit" name="confirm">Konfirmasi & Simpan</button>
    </form>
</body>
</html>
<!-- alfarisi azmir -->
