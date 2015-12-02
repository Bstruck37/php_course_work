<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Project Struckish</title>
    
    <!-- Custom CSS -->
    <link href="css/blog.css" rel="stylesheet">

</head>

<body background="assets/background.jpg">


    <div class="container">
        <div class="header"><!-- end .header --><img src="assets/blog_logo.jpg" width="960s" height="209" /></div>
    
    
        <?php if (strpos($_SERVER['SCRIPT_NAME'], 'index.php') !== false) 
        {
            echo '<p class="nav"><a href="admin.php">ADMIN</a></p>';
            }
            else 
            {
                echo '<p class="nav"><a href="index.php">HOME</a></p>';     
            }
        ?>
    </div>

<!-- Page Content -->
<div class="container">
