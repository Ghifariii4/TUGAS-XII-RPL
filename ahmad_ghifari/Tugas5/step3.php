<?php
session_start();

if (!isset($_SESSION['nama']) || !isset($_SESSION['tiket'])) {
    header('Location: step1.php?error=Silakan isi pendaftaran!');
    exit();
}

if (isset($_POST['reset'])) {
    unset($_SESSION['nama']);
    unset($_SESSION['email']);
    unset($_SESSION['telepon']);
    unset($_SESSION['tiket']);
    unset($_SESSION['workshop']);
    header('Location: step1.php');
    exit();
}

if (isset($_POST['simpan'])) {
    $data = [
        'nama' => $_SESSION['nama'],
        'email' => $_SESSION['email'],
        'telepon' => $_SESSION['telepon'],
        'tiket' => $_SESSION['tiket'],
        'workshop' => $_SESSION['workshop']
    ];

    $file = 'data.json';
    $current = [];
    if (file_exists($file)) {
        $current = json_decode(file_get_contents($file), true);
    }
    $current[] = $data;
    file_put_contents($file, json_encode($current));

    unset($_SESSION['nama']);
    unset($_SESSION['email']);
    unset($_SESSION['telepon']);
    unset($_SESSION['tiket']);
    unset($_SESSION['workshop']);

    $_SESSION['pesan_sukses'] = "Pendaftaran Berhasil Disimpan!";
    header('Location: success.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Langkah 3</title>
</head>
<body>
    <h1>Langkah 3: Ringkasan & Konfirmasi</h1>

    <p><b>Nama:</b> <?php echo $_SESSION['nama']; ?></p>
    <p><b>Email:</b> <?php echo $_SESSION['email']; ?></p>
    <p><b>No Telepon:</b> <?php echo $_SESSION['telepon']; ?></p>
    <p><b>Tipe Tiket:</b> <?php echo $_SESSION['tiket']; ?></p>
    <p><b>Workshop:</b> <?php echo !empty($_SESSION['workshop']) ? implode(", ", $_SESSION['workshop']) : "-"; ?></p>

    <form action="step3.php" method="post">
        <input type="submit" name="simpan" value="Konfirmasi & Simpan">
        <input type="submit" name="reset" value="Batal / Reset">
    </form>
</body>
</html>
