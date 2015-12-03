<?php
    // Connect to database
    include('db.php'); 

    // Add page header
    include('header.php'); 

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

    // Add page footer
    include('footer.php') 
?>  