<?php 
// (1) Mulai session
session_start();
//

// (2) Hapus semua session yang berlangsung
session_destroy();
//

// (3) Lakukan redirect ke halaman login awal
header('Location: ../views/login.php');
//

exit;

?>