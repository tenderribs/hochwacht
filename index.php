<?php
    session_start();
?><!DOCTYPE html>
<html>
    <head>
        <?php
            //include metadata such as favicon and window size
            require_once('metaData.php');
        ?>
    </head>
    <body style="background-color: #d6d6d6;">
        <?php
                //navbar
                require_once('header.php');
        ?>
        <section class="section" class="mainBody">
            <?php

                //all funcs
                require_once('func.php');
                require_once('router.php');
                //get the page name from URL
                $page = isset($_GET["page"]) ? $_GET["page"] : null;
                //send it to router
                route($page);
            ?>
        </section>

        <?php require_once('footer.php');?>
    </body>
</html>