<?php
$room_name = $_GET['room_name']; //Getting user's request
$title = 'Rooms - ' . $room_name; //Dynamic title
require 'views/menu.php';  //Doc with dynamic menu
require 'views/header-view.php'; //Header
require 'models/Rooms.php'; //Requiring Rooms Class doc

$horizontal_images = Rooms::getFreshIdeasRooms(); //Connection with Rooms Class



?>
    <section class="product__ideas-wrap">
        <div class="container">
            <div class="product__ideas">

                <?php require 'views/search-bar.php' ?>

<!--                <div class="product__ideas--left-col">-->
<!--                    <div class = "product-ideas__search-panel">-->
<!---->
<!--                        <p>Categories</p>-->
<!---->
<!---->
<!---->
<!--                    </div>-->
<!--                </div>-->
                <div class="product-ideas--right-col">
                    <div class="fresh__ideas"><p>GET FRESH IDEAS</p></div>
                    <div class="product-ideas__items">

                    <?php foreach($horizontal_images as $image): ?>
                        <div class="product-ideas__item">
                            <div><img class="product-ideas__image" src="images/<?=$image['image'];?>" alt="<?= $image['name']?>">
                                <img src="icons/like3.png" class="like" alt="like">
                            </div>
                        </div>
                    <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
    </section>

<?php
require 'views/footer-view.php';