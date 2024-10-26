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
            // exec.php
            $cmd = "dir";   // Windows, Linux
            // $cmd = "ls"; // Linux, Unix & Mac

            exec(escapeshellcmd($cmd), $output, $status);

            if ($status) {
                echo "Exec command failed";
            } else {
                echo "<pre>";
                foreach ($output as $line) {
                    echo htmlspecialchars("$line\n");
                }
                echo "</pre>";
            }
            ?>
        </div>
    </body>
</html>
