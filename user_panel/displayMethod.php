<?php
    $display = $_POST['tryb'];
    setcookie('display', $display);
    header('Location: userpanel.php');
?>