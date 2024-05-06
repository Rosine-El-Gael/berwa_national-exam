<?php
include 'connect.php';

if(isset($_GET['demo'])){
    $product_code = $_GET['demo']; // Get the Product_code from the URL parameter

    // Use Product_code in the WHERE clause of your SQL query
    $sql="DELETE FROM product WHERE Product_code='$product_code'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location:product.php");
        exit; // Add exit after header redirect to stop further execution
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
