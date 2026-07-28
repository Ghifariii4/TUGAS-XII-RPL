<?php
echo "<br>";
echo "<h3>Isi Data:</h3>" . "<br>";
if (isset($_GET['password'])) {
echo $_GET ['password'];
}
?>
<form action="indexget.php" method="get">
    <input type="text" name="nama">
    <input type="password" name="password">
    <input type="submit" name="submit">
</form>