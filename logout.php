<?php
session_start();
session_destroy();
header('location:dashboard.php'); ///setelah klik logout kembali ke halaman login

?>