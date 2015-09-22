<?php
    $noun = $_POST['noun'];
    $verb = $_POST['verb'];
    $adj = $_POST['adj'];
    $adverb= $_POST['adverb'];
    
    echo 'Do you ' . $verb . ' your ' . $adj . ' ' . $noun . ' ' . $adverb . '? That\'s hilarious!';
    
?>

<?php
  $dbc = mysqli_connect('localhost', 'bstruck37', 'stocktruck5', 'madlibs')
    or die('Error conecting to MYSQL server.');

  $query = "INSERT INTO madlib_stories ('noun', 'verb', 'adj', 'adverb', 'comp_story')";

   $result = mysqli_query($dbc, $query)
      or die('Error querying database.');
      
   mysqli_close($dbc);
    
?>