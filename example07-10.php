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
            // deletefile.php
            if (!unlink('testfile2.new')) {
                echo "Could not delete file";
            } else {
                echo "File 'testfile2.new' successfully deleted";
            }
            ?>
        </div>
    </body>
</html>
