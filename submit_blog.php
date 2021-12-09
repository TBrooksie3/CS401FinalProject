<?php 
    $directory = "./blogs";
    $directoryFiles = opendir($directory);
    $blogCount = 0;
    $blogNumbers = array();
    $j = 0;
    while (($file = readdir($directoryFiles)) != false) {
      $extension_from = strrpos($file,".");
      $sub = substr($file, strpos($file,'g')+strlen('g'),strlen($file));
      $number = substr($sub,0,strpos($sub,'.'));
      if (substr($file,$extension_from+1) == 'txt') {
        $blogCount++;
        $blogNumbers[$j] = $number;
        $j++;
      }
    }

    $blog= $_POST['blog'];
    $highestValue = $blogNumbers[$j - 1];
    $nextValue = $highestValue + 1;
    $filename = "./blogs/blog$nextValue.txt";
    $file = fopen($filename, "w");
    if (!$file) {
        die("Unable to open $filename.");
    }
    fwrite($file, date("Y-m-d h:i:sa") . PHP_EOL . $blog . PHP_EOL);
    fclose($file);
    header("Location: index.php");
    exit();
?> 