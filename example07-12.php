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
            $fh = fopen("testfile.txt", 'r+') or die("Failed to open file");
            $text = fgets($fh);

            if (flock($fh, LOCK_EX)) {
                fseek($fh, 0, SEEK_END);
                fwrite($fh, "$text") or die("Could not write to file");
                flock($fh, LOCK_UN);
            }

            fclose($fh);
            echo "File 'testfile.txt' successfully updated";
            ?>
        </div>
    </body>
</html>
