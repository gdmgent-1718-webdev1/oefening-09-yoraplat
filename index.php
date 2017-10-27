<?php

    $_isSubmitted = isset($_REQUEST['submit']);

?>




    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>zoekveld</title>
    </head>

    <body>
        <form action="" method="GET">
            <input type="text" name="searchValue">
            <input type="submit" name="submit">
        </form>
        <?php
        if ($_isSubmitted){
            echo 'Zoekresultaten voor ' . htmlspecialchars($_GET['searchValue']);
}
    ?>
    </body>

    </html>
