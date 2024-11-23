<?php
// process.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim($_POST['nama'] ?? '');
    
    if (empty($nama)) {
        echo 'Nama harus diisi.';
    } else {
        echo "Halo, {$nama}! Selamat datang di AJAX!";
    }
}
?>