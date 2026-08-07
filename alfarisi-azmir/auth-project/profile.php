<?php
require_once 'middleware/auth.php';

require_auth();

$error = '';
$success = '';

try {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ? LIMIT 1");
    $stmt->execute([$_SESSION['user_id']]);
    $user = $stmt->fetch();
    if ($user) {
        $_SESSION['avatar'] = $user['avatar'];
    }
} catch (PDOException $e) {
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['avatar'])) {
        
        $file = $_FILES['avatar'];

        if ($file['error'] !== UPLOAD_ERR_OK) {
            switch ($file['error']) {
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    $error = 'file nya kegedean mas..';
                    break;
                case UPLOAD_ERR_PARTIAL:
                    $error = 'file nya aneh mas.. coba lagi';
                    break;
                case UPLOAD_ERR_NO_FILE:
                    $error = 'pilih gambar nya dulu mas';
                    break;
                default:
                    $error = 'lho kok gagal up file iki';
            }
        } 
        elseif ($file['size'] > 2097152) {
            $error = 'file nya kegedean mas, max cm sampe 2 mb.';
        } 
        else {
            $tmpPath = $file['tmp_name'];
            
            $realMimeType = mime_content_type($tmpPath);
            
            $originalExtension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
            
            $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/webp'];
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];
            
            if (!in_array($realMimeType, $allowedMimeTypes)) {
                $error = 'Format file tidak diizinkan! Hanya diperbolehkan format JPG, PNG, atau WEBP.';
            } elseif (!in_array($originalExtension, $allowedExtensions)) {
                $error = 'Ekstensi file tidak valid!';
            } else {
                $mimeMatch = false;
                if ($realMimeType === 'image/jpeg' && in_array($originalExtension, ['jpg', 'jpeg'])) {
                    $mimeMatch = true;
                } elseif ($realMimeType === 'image/png' && $originalExtension === 'png') {
                    $mimeMatch = true;
                } elseif ($realMimeType === 'image/webp' && $originalExtension === 'webp') {
                    $mimeMatch = true;
                }
                
                if (!$mimeMatch) {
                    $error = 'waduh cuma support jpg,png,webp doang mas';
                } else {
                    
                    $imageInfo = getimagesize($tmpPath);
                    if ($imageInfo === false) {
                        $error = 'file nya kayaknya rusak ni mas.';
                    } else {
                        $uploadDir = 'uploads/avatars/';
                        if (!file_exists($uploadDir)) {
                            mkdir($uploadDir, 0755, true);
                        }

                        $newFilename = 'avatar_' . $_SESSION['user_id'] . '_' . bin2hex(random_bytes(8)) . '.' . $originalExtension;
                        $destination = $uploadDir . $newFilename;

                        if (move_uploaded_file($tmpPath, $destination)) {
                            
                            try {
                                $stmt = $pdo->prepare("SELECT avatar FROM users WHERE id = ?");
                                $stmt->execute([$_SESSION['user_id']]);
                                $oldUser = $stmt->fetch();
                                
                                if ($oldUser && !empty($oldUser['avatar'])) {
                                    $oldFilePath = $uploadDir . $oldUser['avatar'];
                                    if (file_exists($oldFilePath) && $oldUser['avatar'] !== 'default.png') {
                                        unlink($oldFilePath);
                                    }
                                }

                                $stmt = $pdo->prepare("UPDATE users SET avatar = ? WHERE id = ?");
                                $stmt->execute([$newFilename, $_SESSION['user_id']]);

                                $_SESSION['avatar'] = $newFilename;
                                $success = 'Foto profil Anda berhasil diperbarui!';
                            } catch (PDOException $e) {
                                $error = 'file bisa diup top ga ke up di db.';
                            }
                            
                        } else {
                            $error = 'Gagal memindahkan file ke direktori tujuan.';
                        }
                    }
                }
            }
        }
    } else {
        $error = 'Tidak ada file yang dikirimkan.';
    }
}

$pageTitle = 'Pengaturan Profil';
require_once 'includes/header.php';
?>

<h3>test upload avatar</h3>
<p>cuma test upload file avatar.</p>

<?php if ($error): ?>
    <p style="color: red; font-weight: bold;">[Error] <?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<?php if ($success): ?>
    <p style="color: green; font-weight: bold;">[Sukses] <?= htmlspecialchars($success) ?></p>
<?php endif; ?>

<h4>Foto Profil Saat Ini:</h4>
<p>
    <?php 
        $avatarPath = 'uploads/avatars/default.png';
        if (!empty($_SESSION['avatar']) && file_exists('uploads/avatars/' . $_SESSION['avatar'])) {
            $avatarPath = 'uploads/avatars/' . $_SESSION['avatar'];
        }
    ?>
    <img src="<?= htmlspecialchars($avatarPath) ?>" alt="Foto Profil" width="150" style="border: 1px solid #ccc; padding: 4px;">
</p>

<form method="POST" action="profile.php" enctype="multipart/form-data">
    <label for="avatar">Pilih File Foto Profil Baru:</label><br>
    <input type="file" name="avatar" id="avatar" accept=".jpg,.jpeg,.png,.webp" required>
    <br>
    <small style="color: #666;">cuma support: JPG, JPEG, PNG, WEBP (Maksimal 2 MB)</small>
    <br><br>

    <button type="submit">up Foto Baru</button>
    <a href="dashboard.php"><button type="button">Batal</button></a>
</form>

<?php
require_once 'includes/footer.php';
?>
