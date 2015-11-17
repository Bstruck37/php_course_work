<?php
    require_once('tools.php');

?>

<?php
if (isset($_POST['submit'])) {
        
        $tools = new Tools();
        $generic_product = new Product();
        
        
        $generic_product->setproductTitle($_POST['title']);
        $generic_product->setproductDesc($_POST['description']);
        $generic_product->setproductPrice($_POST['price']);
        
        $tools->settoolsShipper($_POST['shipper']);
        $tools->settoolsWeight($_POST['weight']);
        
        $title = $generic_product->getproductTitle();
        $desc =  $generic_product->getproductDesc();
        $price =  $generic_product->getproductPrice();
        
        $shipper =  $tools->gettoolsShipper();
        $weight =  $tools->gettoolsWeight();
        
  
        //Save the database directly here
        $dbc = mysqli_connect('localhost', 'bstruck37', 'stocktruck5', 'lab_10')
        or die('Error connecting to MySQL server.');
        
        $query = "INSERT INTO lab_10 (productTitle, productDesc, productPrice, toolsShipper, toolsWeight)". 
            "VALUES ('$title', '$desc', '$price', '$shipper', '$weight')";
        
        $result = mysqli_query($dbc, $query);
        
        return $result;
 
       
    }
?>