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
    <title>Home</title>
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

    <!-- home section start -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background: url(./img/home-slide-1.jpg);">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel arround the world</h3>
                        <a href="package.php" class="btn">discover more</a></a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(./img/home-slide-2.jpg);">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>discover the new palces</h3>
                        <a href="package.php" class="btn">discover more</a></a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(./img/home-slide-3.jpg);">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a></a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- home section end -->

    <!-- services section start  -->
    <section class="services">
        <h1 class="heading-title">Our Services</h1>

        <div class="box-container">
            <div class="box">
                <img src="./img/icon-1.png" alt="">
                <h3>Adventure</h3>
            </div>

            <div class="box">
                <img src="./img/icon-2.png" alt="">
                <h3>Tour Guide</h3>
            </div>

            <div class="box">
                <img src="./img/icon-3.png" alt="">
                <h3>Trekking</h3>
            </div>

            <div class="box">
                <img src="./img/icon-4.png" alt="">
                <h3>Camp Fire</h3>
            </div>

            <div class="box">
                <img src="./img/icon-5.png" alt="">
                <h3>Off Road</h3>
            </div>

            <div class="box">
                <img src="./img/icon-6.png" alt="">
                <h3>Camping</h3>
            </div>
        </div>
    </section>
    <!-- services section end  -->

    <!-- home about section start -->
    <section class="home-about">
        <div class="image">
            <img src="./img/about-bg.jpg" alt="">
        </div>
        <div class="content">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A aliquam earum rem perspiciatis ipsam inventore unde repellat laboriosam asperiores perferendis, soluta, non excepturi repudiandae architecto, blanditiis tempore iusto molestias natus?</p>
            <a href="about.php" class="btn">Read More</a>
        </div>
    </section>
    <!-- home about section end -->

    <!-- home packages section start -->
    <section class="home-packages">
        <h1 class="heading-title">our packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="./img/img-1.jfif" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, porro.</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./img/img-2.jfif" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, porro.</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./img/img-3.jfif" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, porro.</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
        </div>

        <div class="load-more">
            <a href="package.php" class="btn">Load More</a>
        </div>


    </section>
    <!-- home packages section end -->

    <!-- home offer section start -->
    <section class="home-offer">
        <div class="content">
            <h3>Upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A sequi reiciendis cum cumque accusantium alias.</p>
        </div>
        <a href="book.php" class="btn"> Book Now </a>
    </section>
    <!-- home offer section end -->

    <!-- footer section start -->
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
    <!-- footer section end -->

    <!-- Swipper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="./js/script.js"></script>
</body>

</html>