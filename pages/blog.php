<?php
require '../models/Posts.php';
$posts = Posts::getAllPosts();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="blog_styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
        rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <!-- <a target="_blank" href="https://icons8.com/icon/19044/downward-arrow">Downward Arrow</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a>-->
    <script defer src="../js/script.js"></script>
</head>
<body>
    <section class="blog-page">
        <header class="header">
            <div class="container">
                    <div><p><a class="home-link" style="color: white; font-weight: bold;" href="../index.php"><-BACK</a></p></div>
                </div>
        </header>
        <h1>BLOG</h1>
            <section class="blog__content-">
                <div class="container">
                    <div class="blog__column">
                        <?php foreach ($posts as $post):?>
                            <div class="blog__item">
                                <div class = "col1"><h2 class="blog__item-title">Post #<?= $post['id']?></h2><br>
                                    <?php $a = $post['add_date'];
                                    $date = date("d-M-Y", strtotime($a));
                                    $date_modified = str_replace("-", " ", $date);
                                    ?>
                                    <h6 class="blog__item-date"><?= $date_modified?></h6></div>
                                <div class="col2">
                                    <img class="blog__item-image" src="../img/blog/<?= $post['image']?>" alt="IT domain">
                                </div>
                                <div class="col3">
                                    <p class="blog__item-descr" ><?= $post['full_text']?></p>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </section>
        </section>
</body>
</html>