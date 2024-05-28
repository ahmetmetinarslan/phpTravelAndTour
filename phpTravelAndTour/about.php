<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Swipper CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->

    <link rel="stylesheet" href="./css/style.css">


    <title>About</title>
</head>

<body>

    <!-- header section start -->
    <section class="header">
        <a href="home.php" class="logo">travel.</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Packages</a>
            <a href="book.php">Book</a>
        </nav>
        <div class="fas fa-bars" id="menu-btn"></div>
    </section>
    <!-- header section end  -->

    <div class="heading" style="background: url(./img/about-bg-2.avif) no-repeat;">
        <h1>About Us</h1>
    </div>

    <!-- about section start -->
    <section class="about">
        <div class="image">
            <img src="./img/about-bg.jpg" alt="">
        </div>
        <div class="content">
            <h3>why choose us?</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet quo sed fugit optio, illum magni ipsa ad, veritatis voluptate, iusto consequatur necessitatibus ipsam dolorem minus.</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>top destination</span>
                </div>
                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>affordable price</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 guide service</span>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->

    <!-- reviews section start -->
    <section class="reviews">
        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem doloremque quibusdam ea tempore repellendus laborum earum illum error tenetur obcaecati quo consectetur eveniet laboriosam molestias mollitia saepe, id consequatur? Laborum?</p>
                    <h3>jhon doe</h3>
                    <span>traveler</span>
                    <img src="./img/person-1.jpg" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem doloremque quibusdam ea tempore repellendus laborum earum illum error tenetur obcaecati quo consectetur eveniet laboriosam molestias mollitia saepe, id consequatur? Laborum?</p>
                    <h3>Lisa Benn</h3>
                    <span>traveler</span>
                    <img src="./img/person-2.jpg" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem doloremque quibusdam ea tempore repellendus laborum earum illum error tenetur obcaecati quo consectetur eveniet laboriosam molestias mollitia saepe, id consequatur? Laborum?</p>
                    <h3>Frank Harper</h3>
                    <span>traveler</span>
                    <img src="./img/person-3.jpg" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem doloremque quibusdam ea tempore repellendus laborum earum illum error tenetur obcaecati quo consectetur eveniet laboriosam molestias mollitia saepe, id consequatur? Laborum?</p>
                    <h3>Amy Fawler</h3>
                    <span>traveler</span>
                    <img src="./img/person-4.jpg" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem doloremque quibusdam ea tempore repellendus laborum earum illum error tenetur obcaecati quo consectetur eveniet laboriosam molestias mollitia saepe, id consequatur? Laborum?</p>
                    <h3>Jessica Tender</h3>
                    <span>traveler</span>
                    <img src="./img/person-5.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- reviews section end -->


    <!-- footer section starts -->
    <section class="footer">
        <div class="box-container">


            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i> Packages</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> Ask Questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i> Privacy Policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i> Terms Of Use</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123 456 7890</a>
                <a href="#"> <i class="fas fa-phone"></i> +111 222 3333</a>
                <a href="#"> <i class="fas fa-envelope"></i> example@example.com</a>
                <a href="#"> <i class="fas fa-map"></i> London, England - 400104</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#"> <i class="fab fa-twitter"></i> Twitter</a>
                <a href="#"> <i class="fab fa-instagram"></i> Instagram</a>
                <a href="#"> <i class="fab fa-linkedin"></i> Linkedin</a>
            </div>
        </div>

        <div class="credit"> created by <span>Mr.Web Designer</span> | All Right Reserved! </div>
    </section>
    <!-- footer section ends -->

    <!-- Swipper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="./js/script.js"></script>
</body>

</html>