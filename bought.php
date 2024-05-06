<!-- <?php
include 'connect.php';
$col=$_GET['demo'];
$sql= "SELECT * FROM product_in WHERE product_code= '$col' ";
$result= mysqli_query($conn,$sql);
while ($row=$result->fetch_array()){
    $a=$row['product_name'];
    // $b=$row['date'];
    $c=$row['quantity'];
    $d=$row['unique_price'];
    // $e=$row['total_price'];

}
?> -->
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
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container mt-3 p-3 text-dark">
        <h2 class="text-center">Buy Item Below!</h2>
    </div>
    <div class="container p-5">
        <form action="buy.php" method="POST" class="text-center">
            <div class="mb-3">
                <label class="form-label">product_name</label>
                <input type="text" class="form-control" id="product_name" name="Product_name" value="">
            </div>
           
            <div class="mb-3">
                <label class="form-label">quantity</label>
                <input type="text" class="form-control" id="quantity" name="quantity" value="">
            </div>
            <div class="mb-3">
                <label class="form-label">unique_price</label>
                <input type="text" class="form-control" id="unique_price" name="unique_price" value="">
            </div>
            
            <button type="submit" name="btn" class="btn btn-primary text-white text-decoration-none">Buy</button>
        </form>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
