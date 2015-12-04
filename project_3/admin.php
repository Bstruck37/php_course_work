<?php
    require_once('login.php');
?>


<?php
    // Connect to database
    include('db.php');
    
    // Add page header
    include('header.php');
?>

    <p><h3>New Blog Entry</h3></p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <p><label for="Blog_Title">Title:</label><br /><br />
            <input type="text" id="Blog_Title" size="79" name="Blog_Title"  /><br /><br />
        <label for="Blog_Entry">Entry:</label><br /><br />
            <textarea name="Blog_Entry" cols=80 rows=10></textarea><br /><br />
        <input type="submit" value="Submit" name="submit1" /><br /><br /></p>
    </form>
    <hr>


<?php
    if (isset($_POST['submit1'])) 
    {
        $Btitle = $_POST['Blog_Title']; 
        $Bentry = $_POST['Blog_Entry'];
        $date = date("Y-m-d");

        
        // Check to make sure there is a title & entry then insert into database
        if (!empty($Btitle) && !empty($Bentry)) 
        {
            $query = "INSERT INTO myblogs (id, date, Blog_Title, Blog_Entry) 
                VALUES (' ', '$date', '$Btitle', '$Bentry')";
        
            // Error out if problem with query
            $result = mysqli_query($mysqli, $query);
                if (!$result) 
                {
                  echo $query;
                  exit("Database query error: ". mysql_error($mysqli));
                }
        }
        
        else 
        {
            echo '<p>You can not create entry without Title & Entry information</p>';
        }
    } 
?>

    <p><h3>Remove Blogs by Date</h3></p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <p><label for="fromdate">From:&nbsp;&nbsp;</label> <input id="fromdate" placeholder="##-##-####" name="fromdate" size="10" />
            <lablel for="todate">To:&nbsp;&nbsp;</label><input id="todate" name="todate" placeholder="##-##-####" size="10" /><br /><br />
        <input type="submit" name="submit2" value="Submit"/></p>
    </form>
</body>

<?php

    
if (isset($_POST['submit2'])) 
{

    $FromDate = $_POST['fromdate']; 
    $ToDate = $_POST['todate'];
    
    // Convert User input to MySQL date format
    $FromDate = date('Y-m-d', strtotime(str_replace('-', '/', $FromDate)));
    $ToDate = date('Y-m-d', strtotime(str_replace('-', '/', $ToDate)));
    
    if (isset($FromDate) && isset($ToDate)) 
    {
        
        // Query to delete records
        mysqli_query($mysqli, "DELETE FROM myblogs WHERE date BETWEEN '$FromDate' AND '$ToDate'");
        
            // Echo count of how many records were deleted
            echo '<h3>' . mysqli_affected_rows($mysqli) . ' Entries have been deleted</h3>';
        
        mysqli_close($mysqli);
    }
}


    // Add page footers
    include('footer.php') 
?>