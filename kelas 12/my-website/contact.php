<h2>Formulir Komentar</h2>
<?php
// Inisialisasi variabel untuk menyimpan data dan pesan
$nama_bersih = $email_bersih = $komentar_bersih = "";
$tanggal_kirim = "";
$panjang_sebelum = $panjang_sesudah = 0;
$berhasil_dikirim = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Mengambil data dari inputan formulir
    $nama_raw = $_POST['nama'];
    $email_raw = $_POST['email'];
    $komentar_raw = $_POST['komentar'];

    // 3. Menghitung jumlah karakter sebelum di-trim() menggunakan strlen()
    $panjang_sebelum = strlen($komentar_raw);

    // 2. Pemrosesan PHP dengan fungsi trim() dan strip_tags()
    $nama_bersih = trim(strip_tags($nama_raw));
    $email_bersih = trim(strip_tags($email_raw));
    $komentar_bersih = trim(strip_tags($komentar_raw));

    // Menghitung jumlah karakter sesudah di-trim() menggunakan strlen()
    $panjang_sesudah = strlen($komentar_bersih);

    // Pemrosesan fungsi date() untuk mencatat waktu kirim
    $tanggal_kirim = date('d-m-Y H:i:s');
    
    $berhasil_dikirim = true;
}
?>

<!-- 1. Struktur HTML Formulir -->
<form action="" method="POST" style="margin-bottom: 20px;">
    <p>
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required style="width: 100%; max-width: 400px; padding: 8px;">
    </p>
    
    <p>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required style="width: 100%; max-width: 400px; padding: 8px;">
    </p>
    
    <p>
        <label for="komentar">Isi Komentar (Textarea):</label><br>
        <textarea id="komentar" name="komentar" rows="5" required style="width: 100%; max-width: 400px; padding: 8px;"></textarea>
    </p>
    
    <button type="submit" style="padding: 10px 20px; cursor: pointer;">Kirim Komentar</button>
</form>

<?php if ($berhasil_dikirim): ?>
    <!-- Menampilkan Hasil Pemrosesan -->
    <div style="background-color: #f0f0f0; padding: 15px; border-radius: 5px; border: 1px solid #ccc;">
        <h3>Hasil Pemrosesan Data:</h3>
        <p><strong>Tanggal Kirim (fungsi date):</strong> <?php echo $tanggal_kirim; ?></p>
        <p><strong>Nama:</strong> <?php echo $nama_bersih; ?></p>
        <p><strong>Email:</strong> <?php echo $email_bersih; ?></p>
        <p><strong>Komentar (setelah strip_tags & trim):</strong> <?php echo $komentar_bersih; ?></p>
        
        <hr>
        
        <!-- 3. Perbandingan Jumlah Karakter Komentar -->
        <h4>Perbandingan Jumlah Karakter Komentar (strlen):</h4>
        <ul>
            <li>Sebelum <code>trim()</code>: <strong><?php echo $panjang_sebelum; ?></strong> karakter</li>
            <li>Sesudah <code>trim()</code> & <code>strip_tags()</code>: <strong><?php echo $panjang_sesudah; ?></strong> karakter</li>
            <li>Selisih spasi/tag yang dibuang: <strong><?php echo $panjang_sebelum - $panjang_sesudah; ?></strong> karakter</li>
        </ul>
    </div>
<?php endif; ?>