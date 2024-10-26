<!DOCTYPE html>
<html>
    <head>
        <title>PHP, MySQL and JavaScript</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <?php
            echo "<pre>";  // Enables display of line feeds
            echo file_get_contents("testfile.txt");
            echo "</pre>"; // Terminates <pre> tag
            ?>
        </div>
    </body>
</html>
