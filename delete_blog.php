<?php 
    foreach($_POST['filename'] as $blog) {
        if ($blog) {
            unlink($blog);
            header("Location: index.php");
        }
    }
    exit();
?> 