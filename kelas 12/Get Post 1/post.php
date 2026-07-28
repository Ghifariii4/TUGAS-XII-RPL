<?php
echo "<br>";
echo "<h3>Isi Data:</h3>" . "<br>";
if (isset($_POST['password'])) {
echo $_POST ['password'];
}
?>
<form action="indexpost.php" method="post">
    <input type="text" name="nama">
    <input type="password" name="password">
    <input type="submit" name="submit">
</form>