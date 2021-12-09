<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/style.css">
  <title>Hello World</title>
</head>

<body>  
  <?php echo "<h1>World Chess Championship Blog</h1>" ?> 
  <header>
    <nav>
      <table class="center">
          <tr>
            <td><a href="index.php"><button type="button">Home</button></a></td>
            <td><a href="add_entries_page.php"><button type="button">Add Entries</button></a></td>
            <td><a href="modify_entries_page.php"><button type="button">Modify Entries</button></a></td>
            <td><a href="delete_entries_page.php"><button type="button">Delete Entries</button></a></td>
          </tr>
      </table>
    </nav>
  </header><br>

  <img src="img/chess.png" alt="chess" width=50% class="center" style="display:block;">
  
  <div>
    <h3>Delete Entries</h3>
  </div>

  <?php 
    $j = 1;
    while (file_exists("./blogs/blog$j.txt")) {
        $j++;
    }
    for ($i = 1; $i < $j; $i++) {
      $filename = "./blogs/blog$i.txt";
      $myfile = fopen($filename, "r");
      if (!$myfile) {
        die("Unable to open $filename.");
      }
      $count = 1;
      while(!feof($myfile)) {
        $line = fgets($myfile);
        if ($count == 1) {
          echo "
            <h4>$line</h4>
            <form action='delete_blog.php' id='deleteBlog' name='deleteBlog' method='post'>
            <input type='hidden' id='filename' name='filename' value='$filename'>
            <input style='margin-left: 25%;' type='submit' value='Delete Blog'>";
        } else {
          echo "<p style='margin-left: 30%';>$line</p>";
        }
        $count++;
    }
      fclose($myfile);
    }
  ?>

  <footer>
    Site created by Taylor Brooks Boise State University Fall2021 CS401 
  </footer>
</body>
  <script src="js/main.js"></script>
</html>