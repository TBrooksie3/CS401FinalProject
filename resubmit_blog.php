<?php 
    $filename = $_POST['filename'];
        if ($filename) {
            $file = fopen($filename, "w");
            if (!$file) {
                die("Unable to open $filename.");
            }
            fwrite($file, date("Y-m-d h:i:sa") . PHP_EOL . $_POST['blog'] . PHP_EOL);
            fclose($file);
            header("Location: index.php");
            exit();
        }
?> 