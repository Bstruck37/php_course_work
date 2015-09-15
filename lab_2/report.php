<?php
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $when_it_happened = $_POST['whenithappened'];
    $how_long = $_POST['howlong'];
    $how_many = $_POST['howmany'];
    $alien_description = $_POST['aliendescription'];
    $what_they_did = $_POST['whattheydid'];
    $fang_spotted = $_POST['fangspotted'];
    $email = $_POST['email'];
    $other = $_POST['other'];
    
    $to = 'Bstruck@madisoncollege.edu';
    $subject = 'Aliens Abducted Me - Abduction Reort';
    $msg = "$name was abducted $when_it_happened and was gone for $how_long.\n" .
        "Number of aliens: $how_many\n" .
        "Alien description: $aliendescription\n" .
        "What they did: $what_they_did\n" .
        "Fang Spotted: $fang_spotted\n" .
        "Other Comments: $other";
    mail($to, $subject, $msg, 'From' . $email);
    
    echo 'Thanks for submitting the form.<br />';
    echo 'You were abducted ' . $when_it_happened;
    echo ' and were gone for ' . $how_long . '<br />';
    echo 'Number of aliens: ' . $how_many . '<br />';
    echo 'Describe them: ' . $aliendescription . '<br />';
    echo 'The aliens did this: ' . $what_they_did . '<br />';
    echo 'Was Fang there? ' . $fang_spotted . '<br />';
    echo 'Other comments: ' . $other . '<br />';
    echo 'Your email address is ' . $email . '<br />';
    
?>

<?php
  $dbc = mysqli_connect('localhost', 'bstruck37', 'stocktruck5', 'aliendatabase')
    or die('Error conecting to MYSQL server.');

  $query = "INSERT INTO aliens_abduction (first_name, last_name, " .
    "when_it_happened, how_long, how_many, alien_description, " .
    "what_they_did, fang_spotted, other, email) " . 
    "VALUES ('firstname', 'lastname', 'whenithappened', 'howlong', 'howmany', " .
    "'aliendescription', 'whattheydid', " .
    "'fangspotted', 'other', " .
    "'email')";

  
   $result = mysqli_query($dbc, $query)
      or die('Error querying database.');
      
   mysqli_close($dbc);
    
?>