<?php
include 'connect.php';
$col=$_GET['demo'];
$sql= "SELECT * FROM product_in WHERE product_code= '$col'";
$result= mysqli_query($conn,$sql);
while ($row=$result->fetch_array()){
    $a=$row['product_code'];
    $b=$row['date'];
    $c=$row['quantity'];
    $d=$row['unique_price'];
    $e=$row['total_price'];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
         body {
            background-image: url('supermarket/image3.jfif');
            background-repeat: no-repeat;
            background-size: contain;
            background-attachment: fixed;
            background-position: center;
        }
        form{
            width:30em;
            margin-left:23em;
        }
        form label{
            /* background-color:lightblue; */
            padding:2px;
            border-radius:5px;
            color:black;
            font-weight:bold;
            text-decoration:underline;
            
        }
        form .form-control{
            text-align:center;
            background-color:orange;
            border-radius:15px;
            color:black;
            font-weight:bold;
        }
        .btn{
            width: 13em;
            background-color:green;
            border-radius:15px;
            transition:0.5s ease-in-out;
            font-weight:bold;
            margin-top:3.5em;
        }
    </style>
</head>
<body>
    <div class="container mt-3 p-3 text-dark">
        <h2 class="text-center">Edit your Item Below!</h2>
    </div>
    <div class="container p-5">
        <form action="" method="POST" class="text-center">
            <div class="mb-3">
                <label class="form-label">product Code</label>
                <input type="number" class="form-control" id="product_code" name="Product_code" value="<?php echo $a ;?>">
            </div>
            <div class="mb-3">
                <label class="form-label">date</label>
                <input type="date" class="form-control" id="date" name="date" value="<?php echo $b ;?>">
            </div>
            <div class="mb-3">
                <label class="form-label">quantity</label>
                <input type="text" class="form-control" id="quantity" name="quantity" value="<?php echo $c ;?>">
            </div>
            <div class="mb-3">
                <label class="form-label">unique_price</label>
                <input type="text" class="form-control" id="unique_price" name="unique_price" value="<?php echo $d ;?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Total price</label>
                <input type="text" class="form-control" id="total_price" name="total_price" value="<?php echo $d ;?>">
            </div>
            <button type="submit" name="btn" class="btn btn-primary text-white text-decoration-none">Edit</button>
        </form>
    </div>

    <?php
    include 'connect.php';
    if (isset($_POST['btn'])) {
        $a=$_POST['product_code'];
        $b=$_POST['date'];
        $c=$_POST['quantity'];
        $d=$_POST['unique_price'];
        $e=$_POST['total_price'];

        $re= mysqli_query($conn,"UPdate `product_in` SET `Product_code`='$a',`date`='$b',`quantity`='$c',`unique_price`='$d',`total_price`='$e' WHERE product_code='$col'");
        header("location:stockin.php");
    }
    ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
