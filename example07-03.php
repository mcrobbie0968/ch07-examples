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
            $month = 9;    // September (only has 30 days)
            $day = 31;     // 31st
            $year = 2025;

            if (checkdate($month, $day, $year)) {
                echo "Date is valid";
            } else {
                echo "Date is invalid";
            }
            ?>
        </div>
    </body>
</html>
