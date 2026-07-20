<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Dinamis PHP</title>
  
</head>
<body>

    <!-- ================= HEADER ================= -->
    <header>
        <h1>Sistem Web Dinamis</h1>
    </header>

    <!-- ================= NAVBAR ================= -->
    <nav>
        <a href="index.php?page=home">Home</a>
        <a href="index.php?page=about">About</a>
        <a href="index.php?page=contact">Contact</a>
    </nav>

    <!-- ================= KONTEN DINAMIS ================= -->
    <main>
        <?php
        // Mengambil parameter 'page' dari URL, jika kosong otomatis ke 'home'
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        // White-list halaman yang diperbolehkan demi keamanan
        $allowed_pages = ['home', 'about', 'contact'];

        if (in_array($page, $allowed_pages)) {
            include $page . '.php';
        } else {
            echo "<h2>404 - Halaman Tidak Ditemukan</h2>";
            echo "<p>Maaf, halaman yang Anda cari tidak tersedia.</p>";
        }
        ?>
    </main>  <br>        

    <!-- ================= IMPLODE dan EXPLODE ================= -->
<h1 style="color: red;">Contoh penggunaan implode dan explode dalam PHP:</h1>
    <?php
    // Contoh penggunaan implode dan explode
    $fruits = ['apple', 'banana', 'orange'];
    $fruits_string = implode(', ', $fruits);
    echo "<p>Daftar buah: $fruits_string</p>";

    $fruits_array = explode(', ', $fruits_string);
    echo "<p>Elemen pertama: " . $fruits_array[0] . "</p>";
    ?>

    <!-- ================= FOOTER ================= -->
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Januar. All rights reserved.</p>
    </footer>

</body>
</html>