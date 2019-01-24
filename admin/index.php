<?php
session_start();
require_once ('../lib/func.php');

$username=checkAuth();
if ( $username == false){
    showLoginForm();
    logIn();
    echo 'FALSE';
}else{
    echo 'TRUE';
    echo $username;
    echo '<a  href="/admin/logout.php">exit</a>';
}

?>

