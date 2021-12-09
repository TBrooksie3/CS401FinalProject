<?php 
    $blog= $_POST['filename'];
    unlink($blog);
    header("Location: index.php");
    exit();
?> 