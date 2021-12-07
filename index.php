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
    <h3>Home</h3>
  </div>

  <?php 
    for ($x = 1; $x <= 3; $x++) {
      $filename = "./blogs/testblog$x.txt";
      $myfile = fopen($filename, "r");
      if (!$myfile) {
        die("Unable to open $filename.");
      }
      $contents = fread($myfile, filesize($filename));
      echo "<p>$contents</p>";
      fclose($myfile);
      echo "<br>";
    }
  ?>

  <footer>
    Site created by Taylor Brooks Boise State University Fall2021 CS401 
  </footer>
</body>
  <script src="js/main.js"></script>
</html>