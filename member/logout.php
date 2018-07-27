<?php
    session_start();
    $_SESSION['id'] = '';
    header('Location: /wargame');
?>