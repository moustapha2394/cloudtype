<?php
session_start();
session_destroy();
if (isset($_GET['error'])) {
    header('location:index.php?error='.$_GET['error']);
}else {
    header('Location:index.php');
}

?>