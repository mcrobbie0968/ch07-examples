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
            // testfile.php
            $fh = fopen("testfile.txt", 'w') or die("Failed to create file");

            $text = <<<_END
Line 1
Line 2
Line 3
_END;

            fwrite($fh, $text) or die("Could not write to file");
            fclose($fh);
            echo "File 'testfile.txt' written successfully";
            ?>
        </div>
    </body>
</html>
