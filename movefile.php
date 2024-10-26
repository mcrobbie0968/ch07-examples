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
            // movefile.php
            if (!rename('testfile2.txt', 'testfile2.new')) {
                echo "Could not rename file";
            } else {
                echo "File successfully renamed to 'testfile2.new'";
            }
            ?>
        </div>
    </body>
</html>
