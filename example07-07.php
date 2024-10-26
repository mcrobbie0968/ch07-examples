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
            // copyfile.php
            copy('testfile.txt', 'testfile2.txt') or die("Could not copy file");
            echo "File successfully copied to 'testfile2.txt'";
            ?>
        </div>
    </body>
</html>
