<?php
session_start();

if(!isset($_SESSION['nama'])){
    header("Location: step1.php");
}

if(isset($_POST['next'])){
    $_SESSION['tiket'] = $_POST['tiket'];
    $_SESSION['workshop'] = $_POST['workshop'];

    header("Location: step3.php");
}
?>

<h2>Step 2</h2>

<form method="post">

Tiket <br>
<input type="radio" name="tiket" value="Regular" required>Regular
<input type="radio" name="tiket" value="VIP">VIP

<br><br>

Workshop <br>
<input type="checkbox" name="workshop[]" value="PHP Security">PHP Security<br>
<input type="checkbox" name="workshop[]" value="Laravel">Laravel<br>
<input type="checkbox" name="workshop[]" value="Database">Database<br><br>

<button name="next">Lanjut</button>

</form>