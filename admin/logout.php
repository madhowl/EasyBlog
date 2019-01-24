<?php
session_start();
unset($_SESSION['userName']);
echo 'ПОКЕДОВА <a  href="/admin/index.php">Вход</a>';