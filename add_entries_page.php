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
    <h3>Add Entries</h3>
    <p>Tell us your thoughts on the 2021 World Chess Championship!</p>
  </div>

  <div>
    <form action="submit_blog.php" method="post" id="blogForm" name="blogForm" method="post">
    <textarea id="blog" name="blog" rows="4" cols="50" form="blogForm"></textarea>
    <br>
    <input type="submit" value="Submit Blog">
  </div><br>

  <footer>
    Site created by Taylor Brooks Boise State University Fall2021 CS401 
  </footer>
</body>
  <script src="js/main.js"></script>
</html>