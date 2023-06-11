<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Domum Solatium';?></title>
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/styles_shop.css">
    <link rel="stylesheet" href="styles/products.css">
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
                    <div><span><a href="login.php"><img alt="registration-form" class="reg-form pointer" src="icons/user.png" height="40px"></a></span></div>
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
                        <li><a href="<?=$pages['home'];?>">Home</a></li>
                        <li><a href="#" class="dropdown-menu btn--categories">Categories
                                <span><img class="arrow-down pointer" src="icons/arrow_down.png" alt="arrow down"></span>
                            </a>
                            <ul class="dropdown-content dropdown-content--categories">
                                <li><a class="dropdown-content-link" href="categories.php?category_name=<?= 'furniture'?>"><img class="furniture" src="icons/furniture.png" alt="furniture"> Furniture</a></li>
                                <li><a class="dropdown-content-link" href="categories.php?category_name=<?= 'textiles'?>"><img class="textile" src="icons/textile.png" alt="textiles">Textiles</a></li>
                                <li><a class="dropdown-content-link" href="categories.php?category_name=<?= 'decorations'?>"><img class="decor" src="icons/decor.png" alt="decorations">Decorations</a></li>
                                <li><a class="dropdown-content-link" href="categories.php?category_name=<?= 'lighting'?>"><img class="lighting" src="icons/lighting.png" alt="lighting">Lighting</a></li>
                                <li><a class="dropdown-content-link" href="categories.php?category_name=<?= 'cozy items'?>"><img class="cozy" src="icons/cozy.png" alt="cozy items">Cozy Items</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="dropdown-menu btn--products">Rooms
                                <span><img class="arrow-down pointer" src="icons/arrow_down.png" alt="arrow down"></span></a>
                            <ul class="dropdown-content dropdown-content--products">
                                <li><a class="dropdown-content-link" href="rooms.php?room_name=<?= 'bedroom'?>"><img class="bedroom" src="icons/bedroom.png" alt="bedroom">Bedroom</a></li>
                                <li><a class="dropdown-content-link" href="rooms.php?room_name=<?= 'kitchen'?>"><img class="kitchen" src="icons/kitchen.png" alt="kitchen" >Kitchen</a></li>
                                <li><a class="dropdown-content-link" href="rooms.php?room_name=<?= 'bathroom'?>"><img class="bathroom" src="icons/bathroom.png" alt="bathroom">Bathroom</a></li>
                                <li><a class="dropdown-content-link" href="rooms.php?room_name=<?= 'living room'?>"><img class="living-room" src="icons/living-room.png" alt="living room">Living room</a></li>
                                <li><a class="dropdown-content-link" href="rooms.php?room_name=<?= 'home office'?>"><img class="home-office" src="icons/home-office.png" alt="home office">Home office</a></li>
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