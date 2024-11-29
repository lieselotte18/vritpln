<?php
// Mulai sesi
session_start();

// Hapus semua sesi
session_unset();
session_destroy();

// Arahkan pengguna ke halaman index.php
header("Location: index.php");
exit();
?>
