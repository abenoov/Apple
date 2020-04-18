<!DOCTYPE html>
<html>
<head>
    <!--  auth---admin---adding- -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple</title>
    <link rel="stylesheet" type="text/css" href="style/all.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <?php 
    include "./connect.php";
     ?>
    <nav>
        <div class="menu">
            <span class="header-menu--close" onclick="showMenu()">
                x
            </span>
            <ul>
                <li><a href="index.php"><i class="fa fa-apple"></i></a></li>
                <li><a href="mac.html" class="menu-item">Mac</a></li>
                <li><a href="ipad.html" class="menu-item">iPad</a></li>
                <li><a href="iphone.html" class="menu-item">iPhone</a></li>
                <li><a href="watch.html" class="menu-item">Watch</a></li>
                <li><a href="tv.html" class="menu-item">TV</a></li>
                <li><a href="music.html" class="menu-item">Music</a></li>
                <li><a href="#" class="menu-item">Support</a></li>
                <li class="item"><a href="#" id="search"></a></li>
                <li class="item"><a href="#" class="trigger"></a></li>
            </ul>
            <div class="search-form">
                <form>
                    <input type="text" name="" placeholder="Search apple.com">
                </form>
            </div>
            <a class="close"><i class="fa fa-times"></i></a>
        </div>
        <div class="modal">
            <div class="modal-content">
                <span class="close-button">×</span>
                <div class="modal-item">
                    <p>Your Bag is empty.</p>
                    <ul>
                        <hr>
                        <li> <img src="https://store.storeimages.cdn-apple.com/4982/store.apple.com/shop/rs-external/rel/us/ac-globalnav-dist/assets/ac-store/bag.svg"> <a href="#"> Bag</a></li>
                        <hr>
                        <li><img src="https://store.storeimages.cdn-apple.com/4982/store.apple.com/shop/rs-external/rel/us/ac-globalnav-dist/assets/ac-store/favorites.svg"><a href="#">Favorites</a></li>
                        <hr>
                        <li><img src="https://store.storeimages.cdn-apple.com/4982/store.apple.com/shop/rs-external/rel/us/ac-globalnav-dist/assets/ac-store/orders.svg"><a href="#">Orders</a></li>
                        <hr>
                        <li><img src="https://store.storeimages.cdn-apple.com/4982/store.apple.com/shop/rs-external/rel/us/ac-globalnav-dist/assets/ac-store/account.svg"><a href="#">Account</a></li>
                        <hr>
                        <?php
                            session_start();
                            if (isset($_SESSION['email'])) {
                                $email = $_SESSION['email'];
                                echo '<li><img src="https://store.storeimages.cdn-apple.com/4982/store.apple.com/shop/rs-external/rel/us/ac-globalnav-dist/assets/ac-store/signIn.svg"><a href="signIn.php">'.$email.'</a></li>';
                            } else {
                                 echo '<li><img src="https://store.storeimages.cdn-apple.com/4982/store.apple.com/shop/rs-external/rel/us/ac-globalnav-dist/assets/ac-store/signIn.svg"><a href="signIn.php">Sign in</a></li>'; 
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <section>
        <div class="container">
            <div class="slider">
                <div class="slide slide1">
                </div>
                <div class="slide slide2">
                </div>
                <div class="slide slide3">
                </div>
                <div class="slide slide1">
                </div>
            </div>
        </div>
        <div class="home-main">
            <div class="iPhoneXr">
                <div class="iPhoneXr-content">
                    <h2 class="iPhoneXr-h">iPhone XR from $18.99/mo. or $449.*</h2>
                    <h3 class="iPhoneXr-h">Two great ways to buy. Just trade in your current</h3>
                    <h3 class="iPhoneXr-h">iPhone online or at an Apple Store.*</h3>
                    <div class="learnMore-buy">
                        <ul>
                            <li><a href="">Learn more ></a></li>
                            <li><a href="">Buy ></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="iPhoneXr2">
                <div class="iPhoneXr2-content">
                    <img src="https://www.apple.com/v/home/ed/images/logos/dark-iphone_xr_logo_hero__f8r05iokxoi2_large.png">
                    <h3 class="iPhoneXr2-h">All-screen design. Longest battery life ever in an iPhone</h3>
                    <h3 class="iPhoneXr2-h">Fastest perfomance. Studio-quality photos.</h3>
                    <div class="learnMore-buy">
                        <ul>
                            <li><a href="">Learn more ></a></li>
                            <li><a href="">Buy ></a></li>
                        </ul>
                    </div>
                    <img src="https://www.apple.com/v/home/ed/images/heroes/spring-iphone-xr/iphone_xr__b0z59ak0bqdy_large.jpg">
                </div>
            </div>
            <div class="iPhoneXs">
                <div class="iPhoneXs-content">
                    <img src="https://www.apple.com/v/home/ed/images/logos/dark-iphone_xs_logo_hero__f4gl7cr4f662_large.png">
                    <h3 class="iPhoneXs-h">Largest Super Retina display. Fastest performance with</h3>
                    <h3 class="iPhoneXs-h">A12 Bionic. Most secure facial authentication with Face ID.</h3>
                    <h3 class="iPhoneXs-h">Breakthrough dual cameras with Depth Control.</h3>
                    <div class="learnMore-buy">
                        <ul>
                            <li><a href="">Learn more ></a></li>
                            <li><a href="">Buy ></a></li>
                        </ul>
                    </div>
                    <img src="https://www.apple.com/v/home/ed/images/heroes/spring-iphone-xs/iphone_xs__cm637qa5dno2_large.jpg">
                </div>
            </div>
            <div class="TV">
                <div class="TV-content">
                    <img src="https://www.apple.com/v/home/ed/images/logos/apple_tv_plus_logo_hero__blvwcfzvxno2_large.png">
                    <h3 class="TV-h">Original stories from the most creative minds in TV and film.</h3>
                    <a href="">Learn more ></a>
                </div>
            </div>
        </div>
        <div class="news-arcade">
            <div class="news">
                <img src="https://www.apple.com/v/home/ed/images/logos/apple_news_plus_logo_tile__c3qc90sq7auu_large.png">
                <h3 class="news-h">Everything you love about News. Plus.</h3>
                <a href="">Learn more ></a>
            </div>
            <div class="arcade">
                <img src="https://www.apple.com/v/home/ed/images/logos/apple_arcade_logo_tile__c0v90gsic96q_large.png">
                <h3 class="arcade-h">Games that redefine games.</h3>
                <h3 class="arcade-h">Coming to the App Store this fall.</h3>
                <a href="">Learn more ></a>
            </div>
        </div>
    </section>
    <footer>
        <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</blockquote>
        <div class="columnWrapper">
            <div class="column">
                <h4>Shop and Learn</h4>
                <div class="address">
                    <ul>
                        <li><a href="#">Mac</a></li>
                        <li><a href="#">iPad</a></li>
                        <li><a href="#">iPhone</a></li>
                        <li><a href="#">Watch</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">Music</a></li>
                        <li><a href="#">iTunes</a></li>
                        <li><a href="#">iPod touch</a></li>
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Gift Cards</a></li>
                    </ul>
                </div>
            </div>
            <div class="column">
                <h4>Apple Store</h4>
                <div class="address">
                    <ul>
                        <li><a href="#">Find a Store</a></li>
                        <li><a href="#">Genius Bar</a></li>
                        <li><a href="#">Today at Apple</a></li>
                        <li><a href="#">Youth Programs</a></li>
                        <li><a href="#">Apple Store App</a></li>
                        <li><a href="#">Refurbished and Clearance</a></li>
                        <li><a href="#">Financing</a></li>
                        <li><a href="#">Apple GiveBack</a></li>
                        <li><a href="#">Order Status</a></li>
                        <li><a href="#">Shopping Help</a></li>
                    </ul>
                </div>
            </div>
            <div class="column">
                <h4>For Education</h4>
                <div class="address">
                    <ul>
                        <li><a href="#">Mac</a></li>
                        <li><a href="#">iPad</a></li>
                        <li><a href="#">iPhone</a></li>
                        <li><a href="#">Watch</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">Music</a></li>
                        <li><a href="#">iTunes</a></li>
                        <li><a href="#">iPod touch</a></li>
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Gift Cards</a></li>
                    </ul>
                </div>
            </div>
            <div class="column">
                <h4>For Healthcare</h4>
                <div class="address">
                    <ul>
                        <li><a href="#">Find a Store</a></li>
                        <li><a href="#">Genius Bar</a></li>
                        <li><a href="#">Today at Apple</a></li>
                        <li><a href="#">Youth Programs</a></li>
                        <li><a href="#">Apple Store App</a></li>
                        <li><a href="#">Refurbished and Clearance</a></li>
                        <li><a href="#">Financing</a></li>
                        <li><a href="#">Apple GiveBack</a></li>
                        <li><a href="#">Order Status</a></li>
                        <li><a href="#">Shopping Help</a></li>
                    </ul>
                </div>
            </div>
            <div class="column">
                <h4>Account</h4>
                <div class="address">
                    <ul>
                        <li><a href="#">Mac</a></li>
                        <li><a href="#">iPad</a></li>
                        <li><a href="#">iPhone</a></li>
                        <li><a href="#">Watch</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">Music</a></li>
                        <li><a href="#">iTunes</a></li>
                        <li><a href="#">iPod touch</a></li>
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Gift Cards</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <p class="copyrightText">More ways to shop: Visit an Apple Store, call </p>
       <div class="copyright-bottom"> <p> For find a reseller. Copyright © 2019 Apple Inc. All rights reserved.</p>
       </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#search').click(function() {
            $('.menu-item').addClass('hide-item')
            $('.search-form').addClass('active')
            $('.close').addClass('active')
            $('#search').hide()
        })
        $('.close').click(function() {
            $('.menu-item').removeClass('hide-item')
            $('.search-form').removeClass('active')
            $('.close').removeClass('active')
            $('#search').show()
        })
    })
    </script>
    <script type="text/javascript" src="js/modal.js"></script>
</body>

</html>