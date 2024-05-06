<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="script.js"></script>
    <style>
        body {
            background-image: url('supermarket/image4.webp');
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
        .error{
            color:red;
            margin-left:8em;
            font-weight:bold;
        }
    </style>
</head>
<body>
    <div class="container mt-3 p-3 bg-primary text-light">
        <h2 class="text-center">Welcome to our Sign Up page!!!</h2>
    </div>
    <div class="container p-5">
        <form method="POST" onsubmit="return validateform()">
            <div class="mb-3">
                <label class="form-label text-light">User_Name:</label>
                <input type="text" class="form-control" id="username" name="username">
                <span class="error" id="username_error"></span>
            </div>
            <div class="mb-3">
                <label class="form-label text-light">Password:</label>
                <input type="password" name="password" class="form-control" id="password">
                <span class="error" id="password_error"></span>
            </div>
            <!-- <div class="mb-3">
                <label class="form-label text-light">Email:</label>
                <input type="email" name="email" class="form-control" id="email">
                <span class="error" id="email_error"></span>
                <div id="emailHelp" class="form-text text-dark">We'll never share your email with anyone else.</div>
            </div> -->
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label text-light" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" name="btn" class="btn btn-primary text-white text-decoration-none">Sign Up</button>
          <p>If arleady have account <a href="index.php">login</a></p>
        </form>
    </div>

    <?php
        include 'connect.php'; 

        if (isset($_POST['btn'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            // $email = $_POST['email'];
    
        // if (!empty($username) && !empty($password)&& !empty($email)) {  
        //     $sql = mysqli_query($conn, "INSERT INTO `shoopkeeper`(`username`, `password`,`email`) VALUES ('$username','$password','$email')");
        //         header("location:index.php");
        //     } 
        $sql = mysqli_query($conn, "INSERT INTO `users`(`username`, `password`) VALUES ('$username','$password')");
                header("location:index.php");
        }
    ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>