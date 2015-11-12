<?php
    require_once('lab_9B.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>BMI Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <h2>BMI Calculator</h2>

    <p>Enter you weight & height in inches to calculate youy BMI</p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="weight">Weight:</label>
        <input type="number" id="weight" name="weight" /><br /><br />
        <label for="height">Height in Inches:</label>
        <input type="number" id="height" name="height" /><br /><br />
        <input type="submit" value="Calculate" name="submit" /><br /><br />

<?php
    
    $bmicalc = new bmiCalc();
    
    if (isset($_POST['submit'])) {
        
        $bmicalc->setWeight($_POST['weight']);
        $bmicalc->setHeight($_POST['height']);

    }
    
    $bmicalc->createOutputMessage();

?>
    
    </form>
    </body>
</html>