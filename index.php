<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/style.css">
  <title>Hello World</title>
</head>


<body>  
  <?php echo "<h1>2021 World Chess Championship Blog</h1>" ?> 
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
    <h3>Home</h3>
  </div>

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
    if ($blogCount == 0) {
      echo "<h5>There are no blogs currently. Navigate to the 'Add Entries' page to create new blogs!</h5>";
    }
    for ($i = 0; $i < $blogCount; $i++) {
      $temp = $blogNumbers[$i];
      if (file_exists("./blogs/blog$temp.txt")) {
        $filename = "./blogs/blog$temp.txt";
        $file = fopen($filename, "r");
        if (!$file) {
          die("Unable to open $filename.");
        }
        $count = 1;
        while(!feof($file)) {
          $line = fgets($file);
          if ($count == 1) {
            echo "<h4>$line</h4>";
          } else {
            echo "<p style='margin-left: 30%';>$line</p>";
          }
          $count++;
      }
        fclose($file);
      }
    }
  ?>

  <footer>
    Site created by Taylor Brooks Boise State University Fall2021 CS401 
  </footer>
</body>
  <script src="js/main.js"></script>
</html>