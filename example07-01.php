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
            echo "<pre>"; // Enables viewing of the spaces
            // Pad to 15 spaces
            printf("The result is $%15f\n", 123.42 / 12);

            // Pad to 15 spaces, fill with zeros
            printf("The result is $%015f\n", 123.42 / 12);

            // Pad to 15 spaces, 2 decimal places precision
            printf("The result is $%15.2f\n", 123.42 / 12);

            // Pad to 15 spaces, 2 decimal places precision, fill with zeros
            printf("The result is $%015.2f\n", 123.42 / 12);

            // Pad to 15 spaces, 2 decimal places precision, fill with # symbol
            printf("The result is $%'#15.2f\n", 123.42 / 12);

            echo "</pre>";
            ?>
        </div>
    </body>
</html>
