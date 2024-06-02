<?php
    //include auth_session.php file on all user panel pages
    include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <title>Laravelcoffee</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOzlDdKrjUygBJWO9dsWjtYRysJql02M8=initMap" async defer></script>

        <!-- Custom CSS File Link -->
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/convo.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico"><!-- Favicon / Icon -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!-- Google font cdn link -->
    </head>
    <body>
        <!-- HEADER SECTION -->
        <header class="header">
            <a href="#" class="logo">
                <img src="../assets/images/logo.png" class="img-logo" alt="Laravel Logo">
            </a>
           
            <!-- MAIN MENU FOR SMALLER DEVICES -->
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#home" class="text-decoration-none">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="text-decoration-none">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#produk" class="text-decoration-none">Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="#team" class="text-decoration-none">Team</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blogs" class="text-decoration-none">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="text-decoration-none">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="text-decoration-none">Logout</a>
                    </li>
                </ul>
                </div>
            </nav>
            <div class="icons">
                <div class="fas fa-search" id="search-btn"></div>
                <div class="fas fa-shopping-cart" id="cart-btn"></div>
                <div class="fas fa-bars" id="menu-btn"></div>
            </div>

            <!-- SEARCH TEXT BOX -->
            <div class="search-form">
                <input type="search" id="search-box" class="form-control" placeholder="search here...">
                <label for="search-box" class="fas fa-search"></label>
            </div>

            <!-- CART SECTION -->
            <div class="cart">
                <h2 class="cart-title">Your Cart:</h2>
                <div class="cart-content">

                </div>
                <div class="total">
                    <div class="total-title">Total: </div>
                    <div class="total-price">Rp.0</div>
                </div>
                <!-- BUY BUTTON -->
                <button type="button" class="btn-buy">Checkout Now</button>
            </div>
        </header>

        <!-- HERO SECTION -->
        <section class="home" id="home">
            <video autoplay muted loop id="video-bg">
                <source src="../assets/images/video.mp4" type="video/mp4">
                your browser does not support the video tag.
            </video>
            <div class="content">
                <h3>Welcome to Laravel Coffee!, <?php echo $_SESSION['username']; ?>!</h3>
                <p>
                    <strong>Experience the warmth and deliciousness in every sip of our high-quality coffee at Laravel Coffee.</strong>
                </p>
                <a href="#produk" class="btn btn-dark text-decoration-none">Order Now!</a>
            </div>
        </section>

        <!-- ABOUT US SECTION -->
        <section class="about" id="about">
            <h1 class="heading"> <span>About</span> Us</h1>
            <div class="row g-0">
                <div class="image">
                    <img src="../assets/images/about-img.png" alt="" class="img-fluid">
                </div>
                <div class="content">
                    <h3>Selamat Datang di Laravelcoffee!</h3>
                    <p>
                        Di Laravelcoffee, kami terikat pada komitmen untuk mempersembahkan kopi terbaik dari tanah air.
                        Setiap biji kopi yang kami pilih dengan cermat,
                         diolah dengan penuh dedikasi, dan disajikan dengan
                        penuh passion, mencerminkan kekayaan rasa dan warisan kopi Indonesia yang tiada duanya.
                    </p>
                    <p>
                        Kecintaan kami terhadap kopi membawa kami menjelajahi pelosok negeri, mencari varietas kopi terbaik
                        yang tersembunyi di berbagai penjuru Indonesia.
                        Dari kopi robusta yang kuat dan berkarakter hingga kopi arabika yang halus dan aromatik, kami
                        memilih biji kopi dengan kualitas terbaik, memastikan setiap tegukan kopi Anda menghadirkan sensasi
                        rasa yang tak terlupakan.
                    </p>
                    <a href="#" class="btn btn-dark text-decoration-none">Learn More</a>
                </div>
            </div>
        </section>

        <!-- MENU SECTION -->
        <section class="produk" id="produk">
            <h1 class="heading">Our <span>Produk</span></h1>
            <div class="box-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/produk/1.png" alt="" class="product-img">
                                <h3 class="product-title">Toraja Coffee</h3>
                                <div class="product-quantity">(12 Ons)</div>
                                <div class="price">Rp.75.000</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/produk/2.png" alt="" class="product-img">
                                <h3 class="product-title">Kintamani Coffee</h3>
                                <div class="product-quantity">(12 Ons)</div>
                                <div class="price">Rp.70.000</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/produk/3.png" alt="" class="product-img">
                                <h3 class="product-title">Sidikalang Coffee</h3>
                                <div class="product-quantity">(12 Ons)</div>
                                <div class="price">Rp.65.000</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div><br />
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/produk/4.png" alt="" class="product-img">
                                <h3 class="product-title">Lampung Robusta Coffee</h3>
                                <div class="product-quantity">(12 Ons)</div>
                                <div class="price">Rp.50.000</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/produk/5.png" alt="" class="product-img">
                                <h3 class="product-title">Java Arabica Coffee</h3>
                                <div class="product-quantity">(12 Ons)</div>
                                <div class="price">Rp.80.000</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/produk/6.png" alt="" class="product-img">
                                <h3 class="product-title">West Java Coffee</h3>
                                <div class="product-quantity">(12 Ons)</div>
                                <div class="price">Rp.75.000</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div><br />
                    <div class="row row-to-hide">
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/produk/7.png" alt="" class="product-img">
                                <h3 class="product-title">Wamena Coffee</h3>
                                <div class="product-quantity">(12 Ons)</div>
                                <div class="price">Rp.70.000</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/produk/8.png" alt="" class="product-img">
                                <h3 class="product-title">Gayo Coffee</h3>
                                <div class="product-quantity">(12 Ons)</div>
                                <div class="price">Rp.90.000</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div><br />
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/produk/9.png" alt="" class="product-img">
                                <h3 class="product-title">Luwak Coffee</h3>
                                <div class="product-quantity">(12 Ons)</div>
                                <div class="price">Rp.50.000</div>
                                <a class="btn add-cart">Add to Cart</a>
                            </div>
                        </div>
                        </div><br />
                        <div class="row row-to-hide">
                            <div class="col-md-4">
                                <div class="box">
                                    <img src="../assets/images/produk/10.png" alt="" class="product-img">
                                    <h3 class="product-title">Temanggung Coffee</h3>
                                    <div class="product-quantity">(12 Ons)</div>
                                    <div class="price">Rp.90.000</div>
                                    <a class="btn add-cart">Add to Cart</a>
                                </div>
                            </div>
                        </div><br />
                    <center>
                        <button id="showHideBtn" class="btn btn-dark">SHOW MORE</button>
                    </center>
                </div>
            </div>
        </section>

        <!-- Our Team -->
        <section class="team" id="team">
            <h1 class="heading">OUR <span>TEAM</span></h1>
            <div class="box-container">
                <div class="container">
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-3 mx-auto">
                            <div class="box">
                                <div class="image">
                                    <img src="../assets/images/team/redho.jpg" alt="Team Member 1">
                                </div>
                                <div class="content text-center">
                                    <h3 class="team-title">Redho Arfian Maulana</h3>
                                    <p class="position">Chief Executive Officer</p>
                                    <p class="bio">Leading with vision and innovation, our CEO drives Laravel Coffee's commitment to excellence.</p>
                                    <div class="social-media">
                                        <a href="https://www.facebook.com/ginengbimo" target="_blank"><i
                                                class="fa-brands fa-square-facebook"></i></a>
                                        <a href="https://twitter.com/ginengbimo" target="_blank"><i
                                                class="fa-brands fa-linkedin"></i></a>
                                        <a href="https://www.instagram.com/fiyanzyy?igsh=Mm0xZDJuMm40YmZ2" target="_blank">
                                            <i class="fa-brands fa-square-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    
                    <div class="row">
                        <div class="col-md-3">
                            <div class="box">
                                <div class="img-circle img-size-50">
                                    <img src="../assets/images/team/karin.jpg" alt="Team Member 1">
                                </div>
                                <div class="content">
                                    <h3 class="team-title">Karina Aulia Putri Laksana</h3>
                                    <p class="position">Head of Coffee Operations</p>
                                    <p class="bio">Ensuring quality from bean to cup, our Head of Coffee Operations oversees every step of production.</p>
                                    <div class="social-media">
                                        <a href="https://www.facebook.com/ginengbimo" target="_blank"><i
                                                class="fa-brands fa-square-facebook"></i></a>
                                        <a href="https://twitter.com/ginengbimo" target="_blank"><i
                                                class="fa-brands fa-linkedin"></i></a>
                                        <a href="https://www.instagram.com/karinaaapl?igsh=MTc4ZHBkN3J5YXFvbw==" target="_blank">
                                            <i class="fa-brands fa-square-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box">
                                <div class="image">
                                    <img src="../assets/images/team/bernike.jpg" alt="Team Member 1">
                                </div>
                                <div class="content">
                                    <h3 class="team-title">Bernike Agustina </h3>
                                    <p class="position">Master coffee Roaster</p>
                                    <p class="bio">Our Master Roaster perfects each roast, bringing out the unique flavors of our premium beans.</p>
                                    <div class="social-media">
                                        <a href="https://www.facebook.com/ginengbimo" target="_blank"><i
                                                class="fa-brands fa-square-facebook"></i></a>
                                        <a href="https://twitter.com/ginengbimo" target="_blank"><i
                                                class="fa-brands fa-linkedin"></i></a>
                                        <a href="https://www.instagram.com/brnik.gs?igsh=NHAzajRhamt0end2" target="_blank">
                                            <i class="fa-brands fa-square-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <div class="col-md-3">
                            <div class="box">
                                <div class="img-circle img-size-50">
                                    <img src="../assets/images/team/hariro.jpg" alt="Team Member 1">
                                </div>
                                <div class="content">
                                    <h3 class="team-title">Hariro Imka Harahap</h3>
                                    <p class="position">Marketing Director</p>
                                    <p class="bio">Crafting our story and connecting with coffee lovers, our Marketing Director fuels our brand's growth.</p>
                                    <div class="social-media">
                                        <a href="https://www.facebook.com/ginengbimo" target="_blank"><i
                                                class="fa-brands fa-square-facebook"></i></a>
                                        <a href="https://twitter.com/ginengbimo" target="_blank"><i
                                                class="fa-brands fa-linkedin"></i></a>
                                        <a href="https://www.instagram.com/hariroimka?igsh=MXdhd3ZzYzBvazg1cQ==" target="_blank">
                                            <i class="fa-brands fa-square-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box">
                                <div class="image">
                                    <img src="../assets/images/team/bimo.jpg" alt="Team Member 1">
                                </div>
                                <div class="content">
                                    <h3 class="team-title">Gineng Bimo Pamungkas</h3>
                                    <p class="position">Customer Relations Manager</p>
                                    <p class="bio">Dedicated to customer satisfaction, our Customer Relations Manager ensures every experience is exceptional.</p>
                                    <div class="social-media">
                                        <a href="https://www.facebook.com/ginengbimo" target="_blank">
                                            <i class="fa-brands fa-square-facebook"></i></a>
                                        <a href="https://twitter.com/ginengbimo" target="_blank">
                                            <i class="fa-brands fa-linkedin"></i></a>
                                        <a href="https://www.instagram.com/ginengbimo" target="_blank">
                                            <i class="fa-brands fa-square-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <center>
                        <button id="showBtn" class="btn btn-dark mt-5">SHOW MORE</button>
                    </center>
                </div>
        </section>
        <!-- Our team Section Selesai -->

        <!-- BLOGS SECTION -->
        <section class="blogs" id="blogs">
            <h1 class="heading">Our <span>Blogs</span></h1>
            <div class="box-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="../assets/images/pour.jpg" alt="">
                                </div>
                                <div class="content">
                                    <a href="https://www.thewaytocoffee.com/batch-brew-vs-pour-over/" target="_blank" class="title text-decoration-none">Batch Brew vs. Pour Over | The Pros and Cons Experienced by Coffee Professionals</a>
                                    <span>by The Way to Coffee</span>
                                    <p>Thinking back 15-20 years, I remember my parents going about their morning ritual of brewing coffee on weekends before burying...</p>
                                    <center>
                                        <a href="https://www.thewaytocoffee.com/batch-brew-vs-pour-over/" target="_blank" class="btn">Read More</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="../assets/images/carbon.webp" alt="">
                                </div>
                                <div class="content">
                                    <a href="https://www.taylorsofharrogate.co.uk/news/carbon-neutral-tea-and-coffee" target="_blank" class="title text-decoration-none">Carbon Neutral Tea and Coffee</a>
                                    <span>by Taylors editorial team</span>
                                    <p>All our tea and coffee is carbon neutral – but what does that actually mean? Here’s an explanation of how we’ve lowered our carbon footprint, and the three projects in Kenya, Malawi and Uganda which have reduced the emissions of our products to...</p>
                                    <center>
                                        <a href="https://www.taylorsofharrogate.co.uk/news/carbon-neutral-tea-and-coffee" target="_blank" class="btn">Read More</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <div class="image">
                                    <img src="../assets/images/coffeemaker.jpg" alt="">
                                </div>
                                <div class="content">
                                    <a href="https://coffeestylish.com/best-drip-coffee-makers/" target="_blank" class="title text-decoration-none">BEST DRIP COFFEE MAKERS 2020</a>
                                    <span>by CoffeeStylish.com</span>
                                    <p>What is a good coffee maker? A good home coffee maker should have removable parts so it can be cleaned completely because you don’t want mold or buildups in your machine. It should be fast. It...</p>
                                    <center>
                                        <a href="https://coffeestylish.com/best-drip-coffee-makers/" target="_blank" class="btn">Read More</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       

        <!-- TESTIMONIALS SECTION -->
        <section class="review" id="review">
            <h1 class="heading"><span>Testimo</span>nials</h1>
            <div class="box-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/quote-img.png" alt="" class="quote">
                                <p>
                                    Laravel Coffee membawa cita rasa autentik kopi Indonesia ke setiap cangkir.
                                    Kualitas biji kopi lokal yang mereka pilih benar-benar luar biasa! jangan lupa beli ya hehehe!
                                </p>
                                <img src="assets/images/customer/1.jpg" alt="" class="user">
                                <h3>Restu</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/quote-img.png" alt="" class="quote">
                                <p>
                                    Saya sangat terkesan dengan komitmen Laravel Coffee dalam menyajikan kopi lokal
                                    Indonesia terbaik.
                                    Setiap tegukan adalah bukti dedikasi mereka terhadap kualitas.
                                </p>
                                <img src="../assets/images/customer/2.jpg" alt="" class="user">
                                <h3>Risnanda</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <img src="../assets/images/quote-img.png" alt="" class="quote">
                                <p>
                                    Laravel Coffee adalah pilihan utama saya untuk menikmati kopi lokal Indonesia yang
                                    berkualitas tinggi.
                                    Mereka benar-benar memahami dan menghargai seni kopi!
                                </p>
                                <img src="../assets/images/customer/3.jpg" alt="" class="user">
                                <h3>Rizky</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- CONTACT US SECTION Dimulai -->
        <section class="contact" id="contact">
            <h1 class="heading"><span>Contact</span> Us</h1>
            <div class="row">
                <div id="map" class="map pull-left"></div>
                <form name="contact" method="POST" action="https://formspree.io/f/xayzavgb">
                    <h3> Get in touch with us!</h3>
                    <div class="inputBox">
                        <span class="fas fa-envelope"></span>
                        <input type="email" name="email" placeholder="Email Address">
                    </div>
                    <div class="inputBox">
                        <textarea name="message" placeholder="Enter your message..."></textarea>
                    </div>
                    <button type="submit" class="btn">Contact Now</button>
                </form>
            </div>
        </section>

        <!-- FOOTER SECTION -->
        <section class="footer">
            <div class="footer-container">
                <div class="logo">
                    <img src="../assets/images/logo.png" class="img"><br />
                    <i class="fas fa-envelope"></i>
                    <p>Laravelcoffee@gmail.com</p><br />
                    <i class="fas fa-phone"></i>
                    <p>+62-8953-6468-2628</p><br />
                    <i class="fab fa-facebook-messenger"></i>
                    <p>@Laravelcoffee</p><br />
                </div>
                <div class="support">
                    <h2>Support</h2>
                    <br />
                    <a href="#">Contact Us</a>
                    <a href="#">Customer Service</a>
                    <a href="#">Chatbot Inquiry</a>
                    <a href="#">Submit a Ticket</a>
                </div>
                <div class="company">
                    <h2>Company</h2>
                    <br />
                    <a href="#">About Us</a>
                    <a href="#">Affiliates</a>
                    <a href="#">Resources</a>
                    <a href="#">Partnership</a>
                    <a href="#">Suppliers</a>
                </div>
                <div class="newsletters">
                    <h2>Newsletters</h2>
                    <br />
                    <p>Subscribe to our newsletter for news and updates!</p>
                    <div class="input-wrapper">
                        <input type="email" class="newsletter" placeholder="Your email address">
                        <i id="paper-plane-icon" class="fas fa-paper-plane"></i>
                    </div>
                </div>
                <div class="credit">
                    <hr /><br />
                    <h2>Laravelcoffee © 2024 | All Rights Reserved.</h2>
                    <h2>Designed by <span>anonymous</span></h2>
                </div>
            </div>
        </section>

        <!-- CHAT BAR BLOCK -->
        <div class="chat-bar-collapsible">
            <button id="chat-button" type="button" class="collapsible">Chat with us! &nbsp;
                <i id="chat-icon" style="color: #fff;" class="fas fa-comments"></i>
            </button>
            <div class="content">
                <div class="full-chat-block">
                    <!-- Message Container -->
                    <div class="outer-container">
                        <div class="chat-container">
                            <!-- Messages -->
                            <div id="chatbox">
                                <h5 id="chat-timestamp"></h5>
                                <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                            </div>
                            <!-- User input box -->
                            <div class="chat-bar-input-block">
                                <div id="userInput">
                                    <input id="textInput" class="input-box" type="text" name="msg"
                                        placeholder="Tap 'Enter' to send a message">
                                    <p></p>
                                </div>
                                <div class="chat-bar-icons">
                                    <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-paper-plane"
                                        onclick="sendButton()"></i>
                                </div>
                            </div>
                            <div id="chat-bar-bottom">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CHAT BAR BLOCK SELESAI -->

        <!-- JS File Link -->
        <script src="../assets/js/googleSignIn.js"></script>
        <script src="../assets/js/script.js"></script>
        <script src="../assets/js/responses.js"></script>
        <script src="../assets/js/convo.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script>
            // CODE FOR THE FORMSPREE
            window.onbeforeunload = () => {
                for(const form of document.getElementsByTagName('form')) {
                    form.reset();
                }
            }

            // CODE FOR THE GOOGLE MAPS API
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: -6.978536856645927, lng: 107.65049609566994},
                    zoom: 9
                });

                var marker = new google.maps.Marker({
                    position: {lat: -6.978536856645927, lng: 107.65049609566994},
                    map: map,
                    title: 'Your Location'
                });
            }

            // CODE FOR THE SHOW MORE & SHOW LESS BUTTON IN PRODUK
            $(document).ready(function() {
                $(".row-to-hide").hide();
                $("#showHideBtn").text("SHOW MORE");
                $("#showHideBtn").click(function() {
                    $(".row-to-hide").toggle();
                    if ($(".row-to-hide").is(":visible")) {
                        $(this).text("SHOW LESS");
                    } else {
                        $(this).text("SHOW MORE");
                    }
                });
            });

            // CODE FOR THE SHOW MORE & SHOW LESS BUTTON IN GALLERY
            $(document).ready(function () {
                $(".pic-to-hide").hide();
                $("#showBtn").text("SHOW MORE");
                $("#showBtn").click(function () {
                    $(".pic-to-hide").toggle();
                    if ($(".pic-to-hide").is(":visible")) {
                        $(this).text("SHOW LESS");
                    } else {
                        $(this).text("SHOW MORE");
                    }
                });
            });
        </script>
    </body>
</html>