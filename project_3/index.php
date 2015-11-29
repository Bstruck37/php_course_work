<?php
    // Add page header
    include('header.php') 
?>        

<?php
    // Connect to database
    include('db.php') 
?>


<?php

    // Connect to the database 
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 
    
    // Retrieve the blog data from MySQL
    $query = "SELECT * FROM myblogs ORDER BY date DESC";
    $data = mysqli_query($mysqli, $query);

    // Loop through the array of blog entries, formatting it as HTML 
    while ($row = mysqli_fetch_array($data)) 
    { 
        // Display the blog entries
        echo '<br /><br />';
        echo '<h3>' . date("M d, Y", strtotime($row['date'])) . '&nbsp&nbsp&nbsp&nbsp&nbsp' . $row['Blog_Title'] . '</h3>';
        echo '<p class="text">' . $row['Blog_Entry'] . '</p>';
    }

?>

<?php
    // Add page footer
    include('footer.php') 
?>  