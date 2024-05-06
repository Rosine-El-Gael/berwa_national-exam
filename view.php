
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>your stock is here</title>
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
        }
        .container{
            margin-left:-150px;
        }
    </style>
</head>
<body>
<section class="p-5">
        <nav class="navbar navbar-expand-md py-3 fixed-top">
            <div class="container">
                <h2 class="navbar-brand text-danger ms-5">   
                </h2>
                <div class="icon">
                    <h3><i class="bi text-light bi-shop"></i></h3>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navmenu">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-4">
                            <a class="nav-link active" href="#Home">Home</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link active" href="product.php">product</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="stockin.php">Stock In</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="stockout.php">Stock Out</a>
                        </li>
<!-- 
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="report.php">Report</a>
                        </li> -->
                        
                    </ul>
                    <button class="bton"><a href="index.php">Log_Out</a></button>
                </div>
                <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#Login">Login Here</button>
            </div>
        </nav>
    </section>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>