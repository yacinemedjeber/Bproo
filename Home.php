<?php 

    // if user not login so redirect to login page
    session_start();
    include 'php/db.php';
    $unique_id = $_SESSION['unique_id'];
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    
    if(empty($unique_id)){
        header("location: index.html ");
    }
    $qry = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$unique_id}'");
    if(mysqli_num_rows($qry) >0){
        $row = mysqli_fetch_assoc($qry);
        if($row){
            $_SESSION['verification_status'] = $row['verification_status'];
            if($row['verification_status'] != 'verified'){
                header("location: verify.php");
            }
        }
    }

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="images/logo1.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
    <link rel="stylesheet" href="css/Homee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section class="header-section">
        <div class="container">
            <header class="navbar" id="header">
                <div class="logo">
                    <img src="images/logo.png" alt="image logo">
                </div>

                <nav>
                    <ul>
                        <li class="t"><a href="#">Acceuil</a></li>
                        <li class="t"><a href="Store.html">Produit</a></li>
                        <li class="t"><a href="#">Apropos</a></li>
                        <li class="t"><a href="#contact">Contact</a></li>
                        <li class="t"><a href="profile.php">Account</a></li>
                    </ul>
                    <img class="cart_image" src="images/cart.png" alt="cart icon">
                    <a href="php/logout.php?logout_id=<?php echo $unique_id?>"><button class="logout_btn">Log Out</button></a>
                </nav>
            </header>

            <div class="row">
                <div class="col-2">
                    <h2>Welcome : <span><?php echo "$fname $lname";?></span></h2>
                    <h1>Donnez à votre entrainement <br> un nouveau style!</h1>
                    <p>Le Succés n'est pas toujours une question de grandeur. <br> c'estune question de cohérence. un travail acharné et consistant gagne du sccés. lq grandeur viendra</p>
                    <a href="Store.html">Explorez Maintenant &#8594;</a>
                </div>

                <div class="col-2">
                    <img src="images/3d-hygge-isometric-view-of-young-woman-looking-at-phone-screen-2 (1) 1.png" alt="landing image" class="image_3d">
                </div>
            </div>
        </div>
    </section>
    <!-- section des categories -->
    <section class="categories">
        <div class="container_2">
            <h2>Catégories Veddetes</h2>
            <div class="row">
                <div class="col-3">
                    <img src="images/category-1.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="images/category-2.jpg" alt="">
                    </div>
                <div class="col-3">
                    <img src="images/category-3.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- meilleurs produits -->
    <section class="featured-products">
        <div class="container_2">
            <h2>Meilleurs Produits</h2>
            <div class="row">
                <div class="col-4">
                    <img src="images/product-1.jpg" alt="produit 1">
                    <h3>T-shirt Puma Rouge</h3>
                    <div class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                    </div>
                    <p class="prix">2 500 DA</p>
                    <center><Button class="add"> + Add to cart</Button>
                </div>
                <div class="col-4">
                        <img src="images/product32.jpg" alt="produit 1">
                        <h3>Basket HRX noir et blanc</h3>
                        <div class="rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o"></i>
                        </div>
                        <p class="prix">6 000 DA</p>
                        <center><Button class="add"> + Add to cart</Button>
                </div>
                <div class="col-4">
                        <img src="images/product25.jpg" alt="produit 1">
                        <h3>Pantalon BENETTON</h3>
                        <div class="rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star"></i>
                        </div>
                        <p class="prix">3 500 DA</p>
                        <center><Button class="add"> + Add to cart</Button>
                </div>
                <div class="col-4">
                        <img src="images/product26.jpg" alt="produit 1">
                        <h3>T-shirt Puma Blue</h3>
                        <div class="rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o"></i>
                        </div>
                        <p class="prix">2 800 DA</p>
                        <center><Button class="add"> + Add to cart</Button>
                </div>
            </div>
        </div>
    </section>
    <!-- nos derniers produits -->
    <section class="featured-products">
        <div class="container_2">
            <h2>Nos Derniers Produits</h2>
            <div class="row">
                <div class="col-4">
                    <img src="images/product-5.jpg" alt="produit 1">
                    <h3>Basket Gris</h3>
                    <div class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                    </div>
                    <p class="prix">10 000 DA</p>
                    <center><Button class="add"> + Add to cart</Button>
                </div>
                <div class="col-4">
                     <img src="images/product-6.jpg" alt="produit 1">
                     <h3>T-shirt Puma Noir</h3>
                     <div class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                    </div>
                    <p class="prix">2 500 DA</p>
                    <center><Button class="add"> + Add to cart</Button>
                </div>
                <div class="col-4">
                    <img src="images/product29.jpg" alt="produit 1">
                    <h3>Chaussettes HRX</h3>
                    <div class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star"></i>
                    </div>
                    <p class="prix">200 DA</p>
                    <center><Button class="add"> + Add to cart</Button>
                </div>
                <div class="col-4">
                     <img src="images/product28.jpg" alt="produit 1">
                     <h3>Watch FOSSIL</h3>
                     <div class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                    </div>
                    <p class="prix">3 600 DA</p>
                    <center><Button class="add"> + Add to cart</Button>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="images/product15.jpg" alt="produit 1">
                    <h3>Watch ROADSTER</h3>
                    <div class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                    </div>
                    <p class="prix">3 000 DA</p>
                    <center><Button class="add"> + Add to cart</Button>
            </div>
                <div class="col-4">
                    <img src="images/product-10.jpg" alt="produit 1">
                    <h3>Basket HRX noir et rouge</h3>
                    <div class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                    </div>
                    <p class="prix">6 000 DA</p>
                    <center><Button class="add"> + Add to cart</Button>
                </div>
                    <div class="col-4">
                        <img src="images/product-11.jpg" alt="produit 1">
                        <h3>Basket Gris</h3>
                        <div class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p class="prix">5 000 DA</p>
                        <center><Button class="add"> + Add to cart</Button>
                </div>
                    <div class="col-4">
                        <img src="images/product33.jpg" alt="produit 1">
                        <h3>Pantalon NIKE noir</h3>
                        <div class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p class="prix">4 000 DA</p>
                        <center><Button class="add"> + Add to cart</Button>
                </div>
            </div>
        </div>
    </section>


    <section class="contact" id="contact">
        <div class="terms" id="terms">
                <a href="#">Terms & Conditions</a>
                <a href="#">Privacy Policy</a>
            </div>
            <div class="contact_me">
                <h2>Contact Me:</h2>
                <div class="social-icons">
                <a href="https://www.instagram.com/yacine_medjeber?igsh=MWxlNXJrM2h5Z2liMw=="><i class="fa-brands fa-instagram"></i></a>        
                <a href="https://www.facebook.com/profile.php?id=100033703990951&mibextid=ZbWKwL"><i class="fa-brands fa-facebook"></i></a>          
                <a href="https://www.linkedin.com/in/yacine-medjeber-4041972a3?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fa-brands fa-linkedin"></i></a>
            </div>
            <div class="copyrights">
            <center><p class="yacine1">Developed by <a href="https://www.instagram.com/yacine_medjeber?igsh=MWxlNXJrM2h5Z2liMw==" class="yacine"> Yacine Medjeber </a> and <a href="" class="yacine"> Amel Oulache </a></p>
                Copyright 2024 &copy;. All Rights Reserved</div>
            </div>    
    </section>
</body>
</html>