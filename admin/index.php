<?php
require_once ('../lib/func.php');
session_start();
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
<script type="text/javascript">
    <
