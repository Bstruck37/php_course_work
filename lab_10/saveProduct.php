<?php
    require_once('product.php');

?>

<?php
if (isset($_POST['submit'])) {
        
        $generic_product = new Product();
        
        
        $generic_product->setproductTitle($_POST['title']);
        $generic_product->setproductDesc($_POST['description']);
        $generic_product->setproductPrice($_POST['price']);
        
        $title = $generic_product->getproductTitle();
        $desc =  $generic_product->getproductDesc();
        $price =  $generic_product->getproductPrice();
        
  
        //Save the database directly here
        $dbc = mysqli_connect('localhost', 'bstruck37', 'stocktruck5', 'lab_10')
        or die('Error connecting to MySQL server.');
        
        $query = "INSERT INTO lab_10 (productTitle, productDesc, productPrice)". 
            "VALUES ('$title', '$desc', '$price')";
        
        $result = mysqli_query($dbc, $query);
        
        return $result;
 
       
    }
?>