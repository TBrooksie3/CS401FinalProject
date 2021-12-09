<?php 
    $blog= $_POST['blog'];
    $i = 1;
    while (file_exists("./blogs/blog$i.txt")) {
        $i++;
    }
    $filename = "./blogs/blog$i.txt";
    $myfile = fopen($filename, "w");
    if (!$myfile) {
        die("Unable to open $filename.");
    }
    fwrite($myfile, date("Y-m-d h:i:sa") . PHP_EOL . $blog . PHP_EOL);
    fclose($myfile);
    header("Location: index.php");
    exit();
?> 