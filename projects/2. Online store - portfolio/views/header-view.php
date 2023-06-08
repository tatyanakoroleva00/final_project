<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domum Solatium</title>
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