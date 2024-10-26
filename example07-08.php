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
            // copyfile2.php
            if (!copy('testfile.txt', 'testfile2.txt')) {
                echo "Could not copy file";
            } else {
                echo "File successfully copied to 'testfile2.txt'";
            }
            ?>
        </div>
    </body>
</html>
