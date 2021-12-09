<?php 
foreach($_POST['filename'] as $blog) {
    if ($blog) {
        $file = fopen($blog, "r");
      if (!$file) {
        die("Unable to open $blog.");
      }
    $line = fgets($file);
    $content = fread($file, filesize($blog));
    echo "
    <div>
    <form action='resubmit_blog.php' id='blogForm' name='blogForm' method='post'>
    <textarea id='blog' name='blog' rows='4' cols='50'>$content</textarea>
    <input type='hidden' name='filename' value=$blog>
    <br>
    <input type='submit' value='Modify Blog'>
    </div><br>";
      
    exit();
    }
}
?> 