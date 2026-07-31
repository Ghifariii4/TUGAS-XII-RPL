<?php
include 'koneksi.php';

// Ambil data dari form
$nama     = $_POST['nama'];
$alamat   = $_POST['alamat'];
$no_telp  = $_POST['no_telp'];
$email    = $_POST['email'];

// Simpan ke database
mysqli_query($conn, "INSERT INTO mahasiswa 
(nama, alamat, no_telp, email) 
VALUES ('$nama', '$alamat', '$no_telp', '$email')");

echo "<h3>Data Berhasil Disimpan!</h3>";

// Ambil data untuk ditampilkan
$ambil = mysqli_query($conn, "SELECT * FROM mahasiswa");

echo "<table border='1' cellpadding='8'>
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>No Telp</th>
    <th>Email</th>
</tr>";

$no = 1;
while ($row = mysqli_fetch_array($ambil)) {
    echo "<tr>
        <td>$no</td>
        <td>{$row['nama']}</td>
        <td>{$row['alamat']}</td>
        <td>{$row['no_telp']}</td>
        <td>{$row['email']}</td>
    </tr>";
    $no++;
}

echo "</table>";

// Contoh perulangan FOR
echo "<br>Jumlah data: ";
for ($i = 1; $i < $no; $i++) {
    echo "[$i] ";
}

echo "<br><br><a href='form.html'>Kembali</a>";
?>
