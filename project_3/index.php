<?php include('header.php') ?>        
<?php include('db.php') ?>

<?php
  // Log in Link
  if (isset($_SESSION['username'])) {
    echo '<p class="text"><a href="login.php">Log In</a></p>';
  }
?>  

<?php
    // Retrieve the score data from MySQL
    $query = "SELECT * FROM myblogs ORDER BY date DESC";
    $data = mysqli_query($mysqli, $query);

    // Loop through the array of blog entries, formatting it as HTML 
    while ($row = mysqli_fetch_array($data)) { 
        // Display the blog entries
        echo '<br /><br />';
        echo '<h3>' . $row['date'] . '&nbsp&nbsp&nbsp' . $row['Blog_Title'] . '</h3>';
        echo '<p class="text">' . $row['Blog_Entry'] . '</p>';
    }

?>

<?php include('footer.php') ?>  