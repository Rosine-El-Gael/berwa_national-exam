<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <section class="p-5">
        <nav class="navbar navbar-expand-md bg-dark py-3 fixed-top">
            <div class="container">
                <h2 class="navbar-brand text-danger ms-5">
                    <span class="text-warning">BerwaShop</span>
                    <span class="text-success">and</span> Supermarket
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
                            <a class="nav-link" href="#Service">Service</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="#Staff">Staff</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="#Contact">Contact</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="#Help">Help</a>
                        </li>
                    </ul>
                </div>
                <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#Login">Login Here</button>
            </div>
        </nav>
    </section>
<section class="slideshow pt-4" >
    <div class="container-fluid" id="Home">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="supermarket/image2.jfif" class="img-fluid d-none d-sm-block d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="supermarket/image1.jfif" class="img-fluid d-none d-sm-block d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="supermarket/image3.jfif" class="img-fluid d-none d-sm-block d-block w-100" alt="...">
    </div>
  </div>
</div>
<div class="container bg-light text-info my-3 " id="Service">
        <h2 class="service text-uppercase text-center">Services we offer!</h2>
        <ul class="text-center">
        <li><p class="lead text-primary m-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Nam ratione suscipit recusandae molestiae eum magni neque maxime? 
            Dignissimos voluptas neque harum alias veritatis! Error cupiditate 
            nobis enim sit provident, quod numquam itaque? Impedit reprehenderit 
            deleniti fugiat commodi officiis voluptate asperiores quos iure molestiae, 
            ssapiente autem sint, rem odit? Beatae, quos.</p>
            <a href="#" class="bt btn-danger"><i class="bi bi-chevron-right"></i>
                                ExploreMore
                            </a></li>
        <li><p class="lead text-primary m-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Nam ratione suscipit recusandae molestiae eum magni neque maxime? 
            Dignissimos voluptas neque harum alias veritatis! Error cupiditate 
            nobis enim sit provident, quod numquam itaque? Impedit reprehenderit 
            deleniti fugiat commodi officiis voluptate asperiores quos iure molestiae, 
            ssapiente autem sint, rem odit? Beatae, quos.</p>
           <a href="#" class="bt btn-danger"> <i class="bi bi-chevron-right"></i>
                                ExploreMore
                            </a></li>
        <li><p class="lead text-primary m-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Nam ratione suscipit recusandae molestiae eum magni neque maxime? 
            Dignissimos voluptas neque harum alias veritatis! Error cupiditate 
            nobis enim sit provident, quod numquam itaque? Impedit reprehenderit 
            deleniti fugiat commodi officiis voluptate asperiores quos iure molestiae, 
            ssapiente autem sint, rem odit? Beatae, quos.</p>
            <a href="#" class="bt btn-danger"><i class="bi bi-chevron-right"></i>
                                ExploreMore
                            </a></li>
                            </ul>
   
    </div>
    <section class="bg-secondary p-2" id="Staff">
        <h2 class="text-center text-light mb-5">Our Staff Members!</h2>
    <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                    <div class="card bg-dark text-light">
                       <div class="card-body text-center">
                        <img 
                            src="https://randomuser.me/api/portraits/men/17.jpg";
                            class="rounded-circle mb-3" 
                            alt=""
                        />
                        <h3 class="card-title mb-3">Aldin</h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias provident maxime necessitatibus quaerat dolorem. Tempore doloremque quod, doloribus nobis numquam facere quas. Praesentium nostrum debitis, earum perspiciatis ad id doloribus.
                        </p>
                        <a href="#"><img src="logo/twitter.png" alt="Twitter" class="icon"></a>
                        <a href="#"><img src="logo/facebook.png" alt="Facebook" class="icon"></a>
                        <a href="#"><img src="logo/linkedin.png" alt="LinkedIn" class="icon"></a>
                        <a href="#"><img src="logo/instagram.jfif" alt="Instagram" class="icon"></a>

                       </div> 
                    </div>
            </div>
            <div class="col-md-6 col-lg-3">
                    <div class="card bg-dark text-light">
                       <div class="card-body text-center">
                        <img 
                            src="https://randomuser.me/api/portraits/men/17.jpg" 
                            class="rounded-circle mb-3" 
                            alt=""
                        />
                        <h3 class="card-title mb-3">Mugisha</h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias provident maxime necessitatibus quaerat dolorem. Tempore doloremque quod, doloribus nobis numquam facere quas. Praesentium nostrum debitis, earum perspiciatis ad id doloribus.
                        </p>
                        <a href="#"><img src="logo/twitter.png" alt="Twitter" class="icon"></a>
                        <a href="#"><img src="logo/facebook.png" alt="Facebook" class="icon"></a>
                        <a href="#"><img src="logo/linkedin.png" alt="LinkedIn" class="icon"></a>
                        <a href="#"><img src="logo/instagram.jfif" alt="Instagram" class="icon"></a>

                       </div> 
                    </div>
            </div>
            <div class="col-md-6 col-lg-3">
                    <div class="card bg-dark text-light">
                       <div class="card-body text-center">
                        <img 
                            src="https://randomuser.me/api/portraits/women/23.jpg" 
                            class="rounded-circle mb-3" 
                            alt=""
                        />
                        <h3 class="card-title mb-3">Aldine</h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias provident maxime necessitatibus quaerat dolorem. Tempore doloremque quod, doloribus nobis numquam facere quas. Praesentium nostrum debitis, earum perspiciatis ad id doloribus.
                        </p>
                        <a href="#"><img src="logo/twitter.png" alt="Twitter" class="icon"></a>
                        <a href="#"><img src="logo/facebook.png" alt="Facebook" class="icon"></a>
                        <a href="#"><img src="logo/linkedin.png" alt="LinkedIn" class="icon"></a>
                        <a href="#"><img src="logo/instagram.jfif" alt="Instagram" class="icon"></a>

                       </div> 
                    </div>
            </div>
            <div class="col-md-6 col-lg-3">
                    <div class="card bg-dark text-light">
                       <div class="card-body text-center">
                        <img 
                            src="https://randomuser.me/api/portraits/women/25.jpg" 
                            class="rounded-circle mb-3" 
                            alt=""
                        />
                        <h3 class="card-title mb-3">Mutesi</h3>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias provident maxime necessitatibus quaerat dolorem. Tempore doloremque quod, doloribus nobis numquam facere quas. Praesentium nostrum debitis, earum perspiciatis ad id doloribus.
                        </p>
                        <a href="#"><img src="logo/twitter.png" alt="Twitter" class="icon"></a>
                        <a href="#"><img src="logo/facebook.png" alt="Facebook" class="icon"></a>
                        <a href="#"><img src="logo/linkedin.png" alt="LinkedIn" class="icon"></a>
                        <a href="#"><img src="logo/instagram.jfif" alt="Instagram" class="icon"></a>

                       </div> 
                    </div>
            </div>
            
    </div>
    <p class="lead text-light bg-primary p-3 text-center mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia 
        repellat incidunt 
        aut quod, necessitatibus recusandae possimus velit accusamus commodi facilis
        aut quod, necessitatibus recusandae possimus velit accusamus commodi facilis
        aut quod, necessitatibus recusandae possimus velit accusamus commodi facilis. <br>
        <button class="buttn text-center ">Send Them Greetings</button>
    </p>
        
</section>
    </div>
    <div class="container p-4" id="Help">
        <p class="lead text-center text-success">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, rerum.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, rerum.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, rerum.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, rerum.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, rerum.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, rerum.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, rerum.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, rerum.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, rerum.
        </p>
        <input class="btnn" type="submit" value="Was this Helpful?">
    </div>
<div class="modal fade" id="Login" tabindex="-1" aria-labelledby="LoginLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="LoginLabel">Login Here</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-success">
                <p class="lead text-center  text-light">Fill out this form and we'll get back to you!</p>
                <hr>
                <form method="POST" onsubmit="return validateform()">
                    <div class="mb-3">
                        <label class="col-form-label text-light">User_Name:</label>
                        <input type="text" name="username" class="form-control" id="username">
                        <span id="username_error" class="error"></span>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label text-light">Password:</label>
                        <input type="password" name="password" class="form-control" id="password">
                        <span id="password_error" class="error"></span>
                    </div>
                    <div class="modal-footer d-flex flex-column align-items-center">
                        <button type="submit" class="bg-info"><a href="view.php" name="loginButton" class="fbtn text-light" style="text-decoration:none;">Login</a></button>
                        
                        <p class="mb-1 text-dark">Don't have an account?</p>
                        <button type="button" class="fbtn btn-info mt-1"><a href="signup.php" style="text-decoration:none;" class="text-light">Sign Up Here</a></button>                      
                    </div>
                </div>
                </form>
                <?php
// session_start();
        include 'connect.php';  

        if (isset($_POST['loginButton'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
    
        $sql = mysqli_query($conn, "SELECT `username`, `password` FROM `users` WHERE username='$username',password='$password'");
        $row=mysqli_fetch_assoc($sql);
               if (is_array($data)) {
                  $_SESSION['username']=$row['username'];
                  $_SESSION['password']=$row['password'];

                  echo "<script> alert('welcome to homepage');
                  window.location.href='view.php'</script>";
                //   header("location:view.php");

               }
        
        

        }
    ?>
   
            </div>
        </div>
    </div>
</div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>