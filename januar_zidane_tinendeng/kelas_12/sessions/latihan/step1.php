<?php
session_start();

if(isset($_POST['next'])){
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['telp'] = $_POST['telp'];

    header("Location: step2.php");
}
?>

<h2>Step 1</h2>

<form method="post">
Nama : <br>
<input type="text" name="nama" required><br><br>

Email : <br>
<input type="email" name="email" required><br><br>

Telepon : <br>
<input type="text" name="telp" required><br><br>

<button name="next">Lanjut</button>
</form>