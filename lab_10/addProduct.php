<?php
    require_once('product.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Products</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <h2>Products</h2>

    <p>Enter Products</p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="productTitle">Product Title:</label>
        <input type="text" id="productTitle" name="productTitle" /><br /><br />
        <label for="productDesc">Product Description:</label>
        <input type="text" id="productDesc" name="productDesc" /><br /><br />
        <label for="productPrice:">Product Price:</label>
        <input type="text" id="productPrice:" name="productPrice:" /><br /><br />
        <input type="submit" value="Submit" name="submit" /><br /><br />
    
    <p>Enter Electronics</p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="electronicsRecycle">Electronics Recycle:</label>
        <input type="text" id="electronicsRecycle" name="electronicsRecycle" /><br /><br />
        <label for="electronicsNonRecycle">Electronics NonRecycle:</label>
        <input type="text" id="electronicsNonRecycle" name="electronicsNonRecyclec" /><br /><br />
        <input type="submit" value="Submit" name="submit" /><br /><br />
        
    <p>Enter Tools</p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="toolsShipper">Tools Shipper:</label>
        <input type="text" id="toolsShipper" name="toolsShipper" /><br /><br />
        <label for="etoolsWeight">Tools Weight:</label>
        <input type="text" id="toolsWeight" name="toolsWeight" /><br /><br />
        <input type="submit" value="Submit" name="submit" /><br /><br />    

<?php
    
    $Product = new Product();
    $Electronics = new Electronics();
    $Tools = new Tools();
    
    if (isset($_POST['submit'])) {
        
        $Product->setproductTitle($_POST['productTitle']);
        $Product->setproductDesc($_POST['productDesc']);
        $Product->setproductPrice($_POST['productPrice']);
       
    }
    
    if (isset($_POST['submit'])) {
    
        $Electronics->setelectronicsRecycle($_POST['electronicsRecycle']);
        $Electronics->setelectronicsNonRecycle($_POST['electronicsNonRecycle']);
        
    }    
    
    if (isset($_POST['submit'])) {
        
        $Tools->settoolsShipper($_POST['toolsShipper']);
        $Tools->settoolsWeight($_POST['toolsWeight']);
    }    
    


?>
    
    </form>
    </body>
</html