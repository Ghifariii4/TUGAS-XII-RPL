<h1>Form Posts</h1>
<form action="POST.php" method="post">
    <input type="text" name="nama">
    <input type="password" name="password">
    <input type="submit" name="submit">
</form>

<?php

if (isset($_POST['submit'])) {
    $nama = $_POST['password'];
}

?>

