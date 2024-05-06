<?php
include 'connect.php';

$col=$_GET['demo'];
$sql1=mysqli_query($conn,"SELECT * FROM product_in WHERE product_code= '$col' ");

if(mysqli_num_rows($sql1)>0){
   $row= mysqli_fetch_array($sql1);
}
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $quantity1=$row['quantity'];
    $quantity2=$_POST['quantity'];
    $unit_price=$_POST['unique_price'];
    $id=$row['product_code'];
    $total_price=$row['total_price'];

    if ($quantity1>=$quantity2) {
        $operation1=$quantity1-$quantity2;
        $operation2=$operation1*$unique_price;
        $operation3=$total_price-$operation2;

        if ($operation1=='0'&& $operation3=='0') {
            $sql=mysqli_query($conn,"DELETE FROM product_in WHERE product_code='$col' ");
        }
        $sql2=mysqli_query($conn,"UPDATE product_in SET quantity='$operation1',total_price='$operation2'WHERE product_code='$col' ");
      if ($sql2) {
        $sql3=mysqli_query($conn,"INSERT INTO `product_out`(`product_code`, `date`, `quantity`, `unique_price`, `total_price`) VALUES (NULL,'CURRENT_DATE','$quantity2','$unit_price','$operation2')");
        if ($sql3) {
          echo"<script>alert('quantity bought!');
          window.location.href='stockin.php'</script>";
        }
      }
      else {
        
        echo"<script>alert('purchase failed!');
        window.location.href='buy.php'</script>";
      }
    }
}
?>