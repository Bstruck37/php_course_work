<?php
    require_once('electronics.php');

?>

<?php
if (isset($_POST['submit'])) {
        
        $electronics = new Electronics();
        $generic_product = new Product();
        
        
        $generic_product->setproductTitle($_POST['title']);
        $generic_product->setproductDesc($_POST['description']);
        $generic_product->setproductPrice($_POST['price']);
        
        $electronics->setelectronicsRecycle($_POST['recycle']);
        

        $title = $generic_product->getproductTitle();
        $desc =  $generic_product->getproductDesc();
        $price =  $generic_product->getproductPrice();

        $recycle =  $electronics->getelectronicsRecycle();
        

        //Save the database directly here
        $dbc = mysqli_connect('localhost', 'bstruck37', 'stocktruck5', 'lab_10')
        or die('Error connecting to MySQL server.');
        
        $query = "INSERT INTO lab_10 (productTitle, productDesc, productPrice, electronicsrecycle)". 
            "VALUES ('$title', '$desc', '$price', '$recycle')";
        
        $result = mysqli_query($dbc, $query);
        
        return $result;
 
       
    }
?>