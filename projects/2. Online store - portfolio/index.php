<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP website</title>
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <script defer src="script.js"></script>
</head>
<body>
    <header class="header">
        <div class="top-nav-wrap">
        <div class="container">
            <div class="top-nav">
                    <div class="top-nav--left">
                        <div class="top-nav--left__search pointer">
                            <div class="glass_search">
                                <span><img class="magnifying-glass pointer" src="icons/search.png" height="40px" alt="magnifying-glass"></span>
                                <span class="pointer">SEARCH</span></div>
                            <div class="search-bar">
                                <input type="text" name="search" placeholder="Product name...">
                            </div>
                        </div>
                    </div>
                    <div class="top-nav--center">
                        <div class="top-nav--center__logo">
                            <span>Domum Solatium</span>
                            <span><img id='sofa' src="icons/home.png" alt="sofa"></span>
                        </div>
                    </div>
                    <div class="top-nav--right">
                        <div><span><img alt="favourites" class="favs pointer" src="icons/favourite.png" height="40px"></span></div>
                        <div><span><img alt="registration-form" class="reg-form pointer" src="icons/user.png" height="40px"></span></div>
                        <div><span><img alt="shopping-bag" class="cart pointer" src="icons/shopping_bag.png" height="40px"></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-nav-wrap">
            <div class="container">
                <div class="bottom-nav">
                    <div class="bottom-nav__inner-nav">
                        <ul class="bottom-nav dropdown-menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#" class="dropdown-menu btn--categories">Categories
                                <span><img class="arrow-down pointer" src="icons/arrow_down.png"></span>
                            </a>
                                <ul class="dropdown-content dropdown-content--categories">
                                    <li><a href="#" target="_blank"><img class="furniture" src="icons/furniture.png"> Furniture</a></li>
                                    <li><a href="#" target="_blank"><img class="textile" src="icons/textile.png">Textiles</a></li>
                                    <li><a href="#" target="_blank"><img class="decor" src="icons/decor.png">Decorations</a></li>
                                    <li><a href="#" target="_blank"><img class="lighting" src="icons/lighting.png">Lighting</a></li>
                                    <li><a href="#" target="_blank"><img class="cozy" src="icons/cozy.png">Cozy Items</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropdown-menu btn--products">Rooms
                                <span><img class="arrow-down pointer" src="icons/arrow_down.png"></span></a> 
                                <ul class="dropdown-content dropdown-content--products">
                                    <li><a href="/" target="_blank"><img class="bedroom" src="icons/bedroom.png">Bedroom</a></li>
                                    <li><a href="#" target="_blank"><img class="kitchen" src="icons/kitchen.png">Kitchen</a></li>
                                    <li><a href="#" target="_blank"><img class="bathroom" src="icons/bathroom.png">Bathroom</a></li>
                                    <li><a href="#" target="_blank"><img class="living-room" src="icons/living-room.png">Living room</a></li>
                                    <li><a href="#" target="_blank"><img class="home-office" src="icons/home-office.png">Home office</a></li>
                                </ul>
                            </li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Reviews</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="section1-wrap">
            <div class="container">
                <section class="section1">
                        <div class="section1-inner">
                            <div class="left">
                                <img src="images/living_room/living1.jpg" alt="sales-idea" class="object-fit">
                                <div class="on-img-text-1">LIVING ROOM</div>
                                <button class="on-img-btn-1"><div>FRESH IDEAS</div>
                                    <div class="white-fon"><img class="arrow-east" src="icons/arrow-east.png"></div></button>
                            </div>
                            <div class="right">
                                <img src="images/decoration/decor1.jpg" alt="sales-idea" class="object-fit">
                                <div class="on-img-text-2">SALES 15% OFF</div>
                            </div>
                        </div>
                </section>
                <hr class="division-line">
            </div>
        </section>
        <section class="section2-wrap">
            <div class="container">
                <section class="section2-inner1">
                    <h2>Summer Sales %</h2>
                    <h4>Come to get inspired with new designers' ideas. Summer sales on a variety of products. Just use our promo code XoZ4569 to get a gift. </h4>
                </section>
                <section class="section2-inner2">
                        <div class="box box1"><img src="images/light/light1.jpg" alt="sales-idea" class="object-fit">
                        <img src='icons/star.png' class="star1 star" alt="item-description" title="sofa 30$"></div>
                        <div class="box box2"><img src="images/furniture/furniture2.jpg" alt="sales-idea" class="object-fit"></div>
                        <div class="box box3"><img src="images/decoration/decor4.jpg" alt="sales-idea" class="object-fit"></div>
                        <div class="box box4"><img src="images/decoration/decor2.jpg" alt="sales-idea" class="object-fit"></div>
                        <div class="box box5"><img src="images/decoration/decor3.jpg" alt="sales-idea" class="object-fit"></div>
                </section>
                <hr class="division-line">
            </div>
        </section>
    </main>
    <footer class="footer">
        <section class="footer-wrap">
            <div class="container">
                <section class="footer-top">
                            <div class="footer-column footer-column--left">
                                <p class="footer-logo">Domum Solatium
                                </p>
                            </div>
                            <div class="footer-column footer-column--center">
                                <p class="bold-letters">Contact us: </p>
                                <p><a class="footer-number number" href="tel:+79651112358">+7(965)-111-23-58</a></p>
                                <p>Monday - Sunday (8am - 6pm)</p>
                                <p class="bold-letters">Delivery: <span>Russia</span></p>
                            </div>
                            <div class="footer-column footer-column--right">
                                <p class="bold-letters">Head Office address: </p>
                                <p>Russia, Moscow area</p>
                                <div class="footer-map">
                                        <iframe src="https://yandex.ru/map-widget/v1/?ll=37.418055%2C55.983275&mode=usermaps&source=constructorLink&um=constructor%3A1463d499e0af37da61b58109a31b7585029bf0a3df9113857ae8ce55742fb42f&z=12" 
                                        width="300" height="200" frameborder="1" allowfullscreen="true" style="position:relative;">
                                        </iframe></div>
                                <br />
                                <p class="bold-letters">We are here: </p>
                                <p><a href="#"><img alt="vk" src="icons/vk.png" class="vk"></a>
                                    <a href="#"><img alt="fb" src="icons/fb.png" class="fb" ></a></p>
                                
                            </div>
                </section>
                
            </div>
        </section>
        <section class="footer-bottom-section">
                <p><b>&#169; <?= date('Y'); ?> Domum Solatium. All Rights Reserved</b></p>
        </section>
    </footer>
    
</body>
</html>