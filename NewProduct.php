<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
    <style>
        body {
            background-image: url('supermarket/image5.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
        }
        form {
            backdrop-filter: blur(10px);
            padding: 30px;
            max-width: 30em; /* Limit form width for smaller screens */
            margin: 0 auto; /* Center the form horizontally */
        }
        .btn {
            width: 100%; /* Make the button full width */
            margin-top: 1em; /* Add some space between button and inputs */
        }
    </style>
</head>
<body>
    <div class="container mt-3 p-3 bg-primary text-light">
        <h2 class="text-center">Insert Your New Product here!!!</h2>
    </div>
    <div class="container p-5">
        <form method = "POST">
            <div class="mb-3">
                <label class="form-label text-light">product Code:</label>
                <input type="number" name="product_code" class="form-control" id="Product_code">
            </div>
            <div class="mb-3">
                <label class="form-label text-light">date:</label>
                <input type="date" name="date" class="form-control" id="Date">
            </div>
            <div class="mb-3">
                <label class="form-label text-light">quantity:</label>
                <input type="text" name="quantity" class="form-control" id="Quantity">
            </div>
            <div class="mb-3">
                <label class="form-label text-light">unique Price:</label>
                <input type="text" name="unique_price" class="form-control" id="Unique_price">
            </div>
            <div class="mb-3">
                <label class="form-label text-light">total Price:</label>
                <input type="text" name="total_price" class="form-control" id="Total_price">
            </div>
            <button type="submit" name="insert" class="btn btn-primary">Insert</button>
        </form>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
include 'connect.php'; 


if (isset($_POST['insert'])) {
    $Product_code = $_POST['product_code'];
    $Date = $_POST['date'];
    $Quantity = $_POST['quantity'];
    $Unique_price = $_POST['unique_price'];
    $Total_price = $_POST['total_price'];

        // if(!empty($product_code) && !empty($date) && !empty($quantity) && !empty($unique_price) && !empty($total_price)){
            $sql = mysqli_query($conn, "INSERT INTO `product_in`(`product_code`, `date`, `quantity`, `unique_price`, `total_price`) VALUES ('$Product_code','$Date','$Quantity','$Unique_price','$Total_price')");
            header("location:stockin.php");
        // }
        // else{
        //     echo "fill all inputs";
        // }
    
}
?>