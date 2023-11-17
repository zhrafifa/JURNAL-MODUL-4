<?php 
// Memulai session
session_start();

// Menghapus seluruh session yang berlangsung
session_destroy();

// Redirect ke halaman login awal
header('Location: ../views/login.php');
exit;

?>