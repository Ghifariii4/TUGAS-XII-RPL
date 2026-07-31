<h2>Hubungi Saya</h2>
<p>Silakan isi formulir di bawah ini untuk menghubungi Saya.</p>

<form action="index.php?page=contact" method="POST">
    <p>
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name" required>
    </p>
    <p>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required>
    </p>
    <p>
        <label for="message">Pesan:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea>
    </p>
    <button type="submit">Kirim</button>
</form>
