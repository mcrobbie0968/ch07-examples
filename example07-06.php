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
            $fh = fopen("testfile.txt", 'r') or
                    die("File does not exist or you lack permission to open it");

            $text = fread($fh, 3);
            fclose($fh);
            echo $text;
            ?>
        </div>
    </body>
</html>
