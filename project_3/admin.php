<?php
  require_once('login.php');
?>
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


<?php
    if (isset($_POST['submit'])) {
        $Btitle = $_POST['Blog_Title']; 
        $Bentry = $_POST['Blog_Entry'];
        $date = date("Y-m-d");

        // Connect to the database 
        $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 
        
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
    
    if (isset($_POST['submit'])) {
        $StartDate = $_POST['fromdate']; 
        $EndDate = $_POST['todate'];
    
        // Loop through the array of blog entries, formatting it as HTML 
        if ($date >= $StartDate && date < $EndDate) {
            // Display the blog entries
            echo '<h3>' . $row['date'] . '&nbsp&nbsp&nbsp' . $row['Blog_Title'] . '</h3>';
        }
    }
    
?>

    <p><h3>Remove Blogs by Date</h3></p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <p><label for="fromdate">From:&nbsp;&nbsp;  <textarea id="fromdate" name="fromdate" rows="1" cols="10"></textarea></label>
            <lablel for="todate">To:&nbsp;&nbsp;  <textarea id="todate" name="todate" rows="1" cols="10"></textarea></label><br /><br />
        <input type="submit" value="Search"/></p>
    </form>
</body>

<?php include('footer.php') ?>