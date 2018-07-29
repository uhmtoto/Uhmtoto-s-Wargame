<!DOCTYPE HTML>
<html>
    <head>
        <?php include_once('config.php'); ?>
    </head>
    
    <body class="bg-light">
        <?php
            include_once 'header.php';
            $_menu = str_replace('/wargame/', '', $_SERVER['REQUEST_URI']);
            if($_menu == '') $_menu = 'index';
            if(substr($_menu, 0, 4) == 'user') {
                $usrid = substr($_menu, 5);
                $_GET['id']=$usrid;
                include_once ('./menu/user.php');
            }
            else if (!is_file('./menu/'.$_menu.'.php')) $_menu = '404';
            include_once ('./menu/'.$_menu.'.php');
        ?>
    </body>
</html>