<?php include('header.php') ?>
<?php include('db.php') ?>

<body>
    <p><h3>New Blog Entry</h3></p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <p><label for="Blog_Title">Title:</label><br /><br />
            <input type="text" id="Blog_Title" size="79" name="Blog_Title"  /><br /><br />
        <label for="Blog_Entry">Entry:</label><br /><br />
            <textarea name="Blog_Entry" cols=80 rows=10></textarea><br /><br />
        <input type="submit" value="Submit" name="submit" /><br /><br /></p>
    </form>
    <hr>
</body>

<?php
    if (isset($_POST['submit'])) {
        $Btitle = $_POST['Blog_Title']; 
        $Bentry = $_POST['Blog_Entry'];
        $date = date("Y-m-d H:i:s");
        
        if (!empty($Btitle) && !empty($Bentry)) {
        $query = "INSERT INTO myblogs (id, date, Blog_Title, Blog_Entry) 
            VALUES (' ', '$date', '$Btitle', '$Bentry')";
        
        $result = mysqli_query($mysqli, $query);
            if (!$result) {
              echo $query;
              exit("Database query error: ". mysql_error($mysqli));
            }
        }
        else {
            echo '<p>You can not create entry without Title & Entry information</p>';
        }
    } 
?>

<?php
    if (isset($_POST['date']) && isset($_POST['Blog_Title'])) {
        // Grab the date & Title data from the POST
        $date = $_GET['date'];
        $Btitle = $_GET['Blog_Title'];
    }
    else {
        echo '<p>Sorry, no Blog Entry was specified for removal.</p>';
    }

    if (isset($_POST['submit'])) {
        if ($_POST['confirm'] == 'Yes') {
      
        // Delete the entry data from the database
        $query = "DELETE FROM myblogs WHERE id = $id LIMIT 1";
        mysqli_query($mysqli, $query);

        // Confirm success
        echo '<p>The Blog Entry of ' . $date . ' for ' . $Btitle . ' was successfully removed.';
        }
        else {
            echo '<p class="error">The Blog Entry was not removed.</p>';
        }
    }
    else if (isset($date) && isset($Btitle)) {
        echo '<p>Are you sure you want to delete the following Blog Entry?</p>';
        echo '<p><strong>Date: </strong>' . $date . '<br /><strong>Title: </strong>' . $Btitle . '</p>';
        echo '<form method="post" action="admin.php">';
        echo '<input type="radio" name="confirm" value="Yes" /> Yes ';
        echo '<input type="radio" name="confirm" value="No" checked="checked" /> No <br />';
        echo '<input type="submit" value="Submit" name="submit" />';
        echo '<input type="hidden" name="date" value="' . $date . '" />';
        echo '<input type="hidden" name="Blog_Title" value="' . $Btitle . '" />';
        echo '</form>';
    }

?>


<?php include('footer.php') ?>