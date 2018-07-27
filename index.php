<!DOCTYPE HTML>
<html>
    <head>
        <?php include_once('config.php'); ?>
    </head>
    
    <body>
        <?php
            include_once 'header.php';
            $_menu = str_replace('/wargame/', '', $_SERVER['REQUEST_URI']);
            if($_menu == '') $_menu = 'index';
            if(!is_file('./menu/'.$_menu.'.php')) $_menu = '404';
            include_once ('./menu/'.$_menu.'.php');
        ?>
    </body>
</html>