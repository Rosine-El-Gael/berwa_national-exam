<?php
include 'connect.php';
$sql= mysqli_query($conn,"SELECT * FROM `product_in`");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>your stock is here</title>
    <style>
        body {
            background-image: url('supermarket/image5.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
        }
        .btn{
            margin-top: -6em; /* Add some space between button and inputs */
            margin-left:25em;
            background-color:darkblue;
            
        }
        .btn:hover{
            background-color:green;
            transition:0.5s ease-in-out;
        }
        .btn a{
            
            font-size:large;
            font-weight:bold;
            color:white;
            text-decoration:none;
            padding:1em;
        }
        th, td {
            border: 3px solid black; /* White border for cells */
            padding: 10px; /* Padding for cells */
        }
        .bg-dark th {
            background-color: black; /* Black background for table headers */
        }
        .btn a {
            color: white; /* Button text color */
            text-decoration: none;
            padding: 5px 10px; /* Padding for buttons */
        }
        .btn a:hover {
            text-decoration: none; /* Remove underline on hover */
        }
        table {
            backdrop-filter: blur(10px); /* Apply blur effect */
            margin: 3em ; /* Center the table horizontally */
            color: white; /* Text color */
        }
        th, td {
            border: 4px solid black; /* White border for cells */
            padding: 10px; /* Padding for cells */
        }
        .bg-dark th {
            background-color: black; /* Black background for table headers */
        }
        .btn a {
            color: white; /* Button text color */
            text-decoration: none;
            padding: 5px 10px; /* Padding for buttons */
        }
        .btn a:hover {
            text-decoration: none; /* Remove underline on hover */
        }
        #edit {
            background-color: darkblue; /* Blue background for edit button */
            width:6em;
            border-radius:10px;
            border:1px solid white;
        }
        #edit a{
            color:white;
            text-decoration:none;
        }
        #delete {
            background-color: red; /* Red background for delete button */
            width:6em;
            border-radius:10px;
            border:1px solid white;
        }
        #delete a{
            color:white;
            text-decoration:none;
            
        }
        .th{
            background-color:black;
        }
       .text-primaryy{
            color:white;
            font-size:x-large;
        }
        .bton{
            width:10em;
            height:2em;
            background-color:red;
            border-radius:10px;
            border:2px solid darkred;
            margin: -2em 3em;
            /* position: absolute; */
        }
        .bton a{
            text-decoration:none;
            color:white;
            font-weight:bold;
        }
        nav{
            padding-left:25em;
            background:linear-gradient(to right,black,darkcyan,black) ;
        }
        .nav-item a{
            width:9em; 
            color:wheat;
            font-weight:bold;
            text-transform:uppercase;
        }
        .nav-item:hover a{
            color:darkred;
            transition:0.5s ease-in-out;
        }
        .icon i{
            color:red;
            height:2em;
        }
        ul li{
            display:inline-block;
            margin:0 6em;
        }
        ul li a{
            text-decoration:none;
        }
        #buy{
            background-color:grey;
            width:6em;
            border-radius:10px;
            border:1px solid white;
        }
        #buy a{
            color:white;
            text-decoration:none;
        }
    </style>
</head>
<body>
    <?php  include 'view.php';?>
<table border="4" class="text-light text-center">
        
        <tr>
            <thead>
            <tr class="text-primaryy">
                <th  colspan="6">What currently is in the stock</th>
            </tr>
                <!-- <th>N<sup><u>0</u></sup></th> -->
                <th class="th">Product_Code</th>
                <th class="th">Date</th>
                <th class="th">Quantity</th>
                <th class="th">Unique_Price</th>
                <th class="th">Total_Price</th>
                <th colspan="2" class="th">Action</th>
            </thead>
        </tr>
         <?php
         while ($row=mysqli_fetch_assoc($sql)) {
         ?>
         <tr>
              <td class="tex-dark"><?php echo $row['product_code'];?></td>
              <td><?php echo $row['date'];?></td>
              <td><?php echo $row['quantity'];?></td>
              <td><?php echo $row['unique_price'];?></td>
              <td><?php echo $row['total_price'];?></td>
    
             <td><button name="edit" id="edit"><a href="edit.php?demo=<?php echo $row['product_code'];?>">EDIT</a></button>
                  <button name="delete" id="delete"><a href="delete.php?demo=<?php echo $row['product_code'];?>">DELETE</a></button>
                  <button name="buy" id="buy"><a href="bought.php?demo=<?php echo $row['product_code'];?>">BUY</a></button>
                </td>
    
            
    <?php
            }
    ?>
           </tr>
        </table> <br>
        <button class="btn"><a href="NewProduct.php">+Record New Product</a></button>
</body>
</html>