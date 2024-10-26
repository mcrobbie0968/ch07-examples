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
            // update.php
            $fh = fopen("testfile.txt", 'r+') or die("Failed to open file");
            $text = fgets($fh);

            fseek($fh, 0, SEEK_END);
            fwrite($fh, "\n$text") or die("Could not write to file");
            fclose($fh);

            echo "File 'testfile.txt' successfully updated";
            ?>
        </div>
    </body>
</html>
