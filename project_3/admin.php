<?php include('header.php') ?>
<?php include('db.php') ?>

<body>
    <p><h4>New Blog Entry</h4></p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="Blog_Title">Title:</label><br />
            <input type="text" id="Blog_Title" size="55" name="Blog_Title"  /><br /><br />
        <label for="Blog_Entry">Entry:</label><br />
            <textarea name="Blog_Entry" cols=80 rows=10></textarea><br /><br />
        <input type="submit" value="Submit" name="submit" /><br /><br />
    </form>
    <hr>
</body>

<?php
    if (isset($_POST['submit'])) {
        $Btitle = $_POST['Blog_Title']; 
        $Bentry = $_POST['Blog_Entry'];
        $time = date("Y-m-d H:i:s");
    } 
   
    $query = "INSERT INTO myblogs (id, date, Blog_Title, Blog_Entry) 
        VALUES (' ', '$time', '$Btitle', '$Bentry')";
    
    $result = mysqli_query($mysqli, $query);
        if (!$result) {
          echo $query;
          exit("Database query error: ". mysql_error($mysqli));
        }
?>


<?php include('footer.php') ?>