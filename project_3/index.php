<?php include('header.php') ?>        
<?php include('db.php') ?>

<?php
    // Retrieve the score data from MySQL
    $query = "SELECT * FROM myblogs ORDER BY date DESC";
    $data = mysqli_query($mysqli, $query);

    // Loop through the array of blog entries, formatting it as HTML 
    while ($row = mysqli_fetch_array($data)) { 
        // Display the blog entries
        echo '<br /><br />';
        echo '<h5>' . $row['date'] . '&nbsp&nbsp&nbsp' . $row['Blog_Title'] . '</h5>';
        echo '<p>' . $row['Blog_Entry'] . '</p><hr>';
    }

?>

<?php include('footer.php') ?>  