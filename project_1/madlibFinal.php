
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Mad Libs</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h2>Mad Lib Entries</h2>

  <p>Fill in the blanks to create the best story yet!</p>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="noun">Enter a noun:</label>
    <input type="text" id="noun" name="noun" /><br /><br />
    <label for="verb">Enter a verb:</label>
    <input type="text" id="verb" name="verb" /><br /><br />
    <label for="adj">Enter an adjective:</label>
    <input type="text" id="adj" name="adj" /><br /><br />
    <label for="adverb">Enter an adverb:<label>
    <input type="text" id="adverb" name="adverb" /><br /><br />
    <input type="submit" value="Enter Story" name="submit" /><br /><br />
    
<?php
    if (isset($_POST['submit'])) {
    $noun = $_POST['noun']; 
    $verb = $_POST['verb'];
    $adj = $_POST['adj'];
    $adverb = $_POST['adverb'];
    
    $comp_story = "Do you $verb your $adj $noun $adverb? That\'s hilarious!";
        
    } 
    
    $dbc = mysqli_connect('localhost', 'bstruck37', 'stocktruck5', 'madlibs')
        or die('Error connecting to MySQL server.');
        
    if ((!empty($noun)) && (!empty($verb)) && (!empty($adj)) && (!empty($adverb))) {    
    
    $result = mysqli_query($dbc, "INSERT INTO madlib_stories (noun, verb, adj, adverb, comp_story)". 
      "VALUES ('$noun', '$verb', '$adj', '$adverb', '$comp_story')");   
      
    $result = mysqli_query($dbc, "SELECT * FROM madlib_stories ORDER BY id DESC");
    
    echo '<h3>Following is your story, and other users stories after that.</h3>';

    while ($row = mysqli_fetch_array($result)) {
        echo $row['comp_story'] . '<br />';
    }

    mysqli_close($dbc);
    }
  
?>
    
  </form>
  </body>
</html>