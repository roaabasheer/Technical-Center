<?php
session_start();
if(isset($_GET['user'])){
    session_destroy();
    header('LOCATION:index.php');
}
?>