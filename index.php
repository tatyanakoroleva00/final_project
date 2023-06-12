<?php
require 'models/Posts.php';
$posts = Posts::getLimitedNumberOfPosts();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="lng-title-name">TK - Portfolio website</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap">
    <!-- <a target="_blank" href="https://icons8.com/icon/19044/downward-arrow">Downward Arrow</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a>-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <script defer src="js/script.js"></script>
    <script defer src="js/translation.js"></script>


</head>

<body>
    <section class="home-page home-page--top" id="home">
        <header class="header">
            <div class="container">
                <div class="header__nav-bar">
                    <div class="logo"><a href="#about" style="color: white;"><p>TK</p></a></div>
                    <nav class="menu">
                        <ul class="menu__list">
                            <li class="menu__list-item"><a class="menu__link menu__link--active lng-home" href="#">HOME</a></li>
                            <li class="menu__list-item"><a class="menu__link lng-about" href="#about">ABOUT</a></li>
                            <li class="menu__list-item"><a class="menu__link lng-portfolio" href="#portfolio">PORTFOLIO</a></li>
                            <li class="menu__list-item"><a class="menu__link lng-blog" href="#blog">BLOG</a></li>
                            <li class="menu__list-item"><a class="menu__link" href="mailto:tatianakoroleva_work@mail.ru"><img class="menu__send-email" src="img/icons/mail.png" alt="mail me"></a></li>
                            <li class="menu__list-item"><a class="menu__link menu__link--alter-ego lng-alter-ego" href="projects/AlterEgo_site/index.html">ALTER EGO></a></li>
                            <li class="menu__list-item"><select class="change-lang">
                                    <option class="rus-lang" value="ru">RU</option>
                                    <option class="eng-lang" value="en" selected>EN</option>
                                    <option class="fr-lang" value="fr">FR</option></select></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
    </section>
    <section class="home-page">
        <div class="home-page__content-wrap">
            <div class="container">
                <aside class="home-page__left-decor"></aside>
                <section class="home-page__content">
                    <div class="home-page__content--left-col">
                        <div class="home-page__items">
                            <h1 class="title home-page__title lng-home-page__title">TATIANA KOROLEVA</h1>
                            <h2 class="subtitle home-page__subtitle lng-home-page__subtitle">Junior Fullstack Developer</h2>
                            <p class="home-page__text lng-home-page__text"> Currently, I am looking for the employment opportunities in the IT field as a Junior
                                Fullstack Developer.</p>
                        </div>
                        <div class="home-page__buttons">
                            <button class="hire-btn home-page__hire-btn lng-hire-btn" onclick="location.href='mailto:tatianakoroleva_work@mail.ru'">HIRE
                                ME</button>

                            <button class="download-cv-btn home-page__download-cv-btn">
                                <a class="download-cv-btn__link lng-download-cv-btn" href="CV/CV_Koroleva_ТА.pdf" download>DOWNLOAD CV</a>
                                <img class="download-cv-btn__icon" src="img/icons/download.png" alt="download cv">
                            </button>
                        </div>
                        <div class="bottom-arrow">
                            <a href="#about"><img src="img/icons/arrow.png" alt="bottom arrow"></a>
                        </div>
                    </div>
                    <div class="home-page__content--right-col">
                        <img class="home-page__image" src="img/me.jpg" alt="profile picture">
                    </div>
                </section>
                <aside class="home-page__right-decor">
                    <div class="vertical-line"></div>
                    <div class="icons">
                        <a href="https://github.com/tatyanakoroleva00" target="_blank"><img id="github"
                                                                                            src="img/icons/github.png" alt="github"></a>
                        <a href="https://www.linkedin.com/mwlite/in/tatianakoroleva" target="_blank"><img id="linkedin"
                                                                                                          src="img/icons/linkedin.png" alt="linkedin"></a>
                        <a href="https://www.codewars.com/users/Tatiana%20Koroleva" target="_blank"><img id="codewars"
                                                                                                         src="img/icons/codewars.png" alt="codewars"></a>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <section class="about" id="about">
        <div class="container">
            <h3 class="title about__title lng-about__title">. ABOUT ME</h3>
            <section class="about__content">
                <div class="about__skillbox">
                    <div class="about__skillbox-btns">
                        <button id="btn1" class="about__skillbox-btn lng-education "><span>Education</span></button>
                        <button id="btn2" class="about__skillbox-btn lng-work-experience"><span>Work Experience</span></button>
                        <button id="btn3" class="about__skillbox-btn lng-languages"><span>Languages</span></button>
                        <button id="btn4" class="about__skillbox-btn lng-computer-skills"><span>Computer Skills</span></button>
                        <button id="btn5" class="about__skillbox-btn lng-soft-skills"><span>Soft Skills</span></button>
                        <button id="btn6" class="about__skillbox-btn lng-certificates"><span>Certificates</span></button>
                    </div>
                    <div class="about__skillbox-descr">
                        <div id="text1" class="about__skillbox-text about__education">
                            <ul class="about__skillbox-list">
                                <li class="about__skillbox-list-item one"><span class="special-span lng-education1">2023, FULLSTACK courses. (260hours) Center "Professional"</span>
                                    Moscow, Russia. </li>

                                <li class="about__skillbox-list-item"><span class="lng-education2">2015, M2 (MBA) "Business, European Management, Languages" </span><br>
                                    University of Orleans, France.</li>

                                <li class="about__skillbox-list-item"><span class="lng-education3">2011, Military Interpreter (lieutenant grade)
                                    </span><br>Moscow State Linguistic University, Military department, Russia.</li>

                                <li class="about__skillbox-list-item"><span class="lng-education4">2009, M2 “Diplomacy, International Relations” </span><br> Moscow State
                                    Linguistic University, Russia.</li>

                                <li class="about__skillbox-list-item"><span class="lng-education4">English Special School</span><br>Moscow, Russia</li>
                            </ul>
                        </div>
                        <div id="text2" class="about__skillbox-text about__work-experience">
                            <ul class="about__skillbox-list">
                                <li class="about__skillbox-list-item"><span class="special-span">*Currently searching for work experience in the IT domain.<span class="special-span"></span> </li>
                                <li class="about__skillbox-list-item"><span>2018 – 2020, SENIOR TRAVEL MANAGER in ("TSAR VOYAGES", Moscow, RU). </span>Creating travel tourist routes and programs. Interaction with clients from anglophone and francophone countries. Interation with service providers (hotels, guides, transport companies, museums...).</li>
                                <li class="about__skillbox-list-item"><span>2017 – 2018, CARGO TRANSPORTATION MANAGER ("KUEHNE + NAGEL", Paris, FR).</span>  Ordering
                                    transport for good delivery in
                                    Europe. Interaction with European clients and service providers. </li>
                            </ul>
                        </div>
                        <div id="text3" class="about__skillbox-text about__languages">
                            <ul class="about__skillbox-list">
                                <li class="about__skillbox-list-item"><span>Russian</span> - native, C2</li>
                                <li class="about__skillbox-list-item"><span>English, French</span> - advanced, C1/C2;</li>
                                <li class="about__skillbox-list-item"><span>Spanish, Italian, German</span> – intermediate, B1;</li>
                                <li class="about__skillbox-list-item"><span>Chinese</span> - A1</li>
                                <li class="about__skillbox-list-item"><span>Latin</span></li>
                            </ul>
                        </div>
                        <div id="text4" class="about__skillbox-text about__computer-skills">
                            <p><span>CSS</span><span>HTML</span><span>JavaScript</span><span>PHP</span><br><br>
                               <span>SQL</span><span>BEM</span></p><br>

                            <p><span>Git</span><span>PhpStorm</span><span>VSCode</span></p><br>
                            <p><span>Sublime</span><span>Figma</span></p><br /><br>

                            <p><span>Adobe Photoshop</span><span>Adobe Premiere Pro</span></p><br>

                            <p><span>Fast Blind typewriting > 500 symb/min;</span></p><br />

                            <p><span>Excel</span><span>Word</span><span>PowerPoint</span></p><br />
                            
                        </div>
                        <div id="text5" class="about__skillbox-text about__soft-skills ">
                            <ul class="about__skillbox-list">
                                <li class="about__skillbox-list-item"><span>Responsible, attentive</span></li>
                                <li class="about__skillbox-list-item">Able to work <span>independently</span>  and in a <span>group</span> </li>
                                <li class="about__skillbox-list-item">Both <span>analytical</span> and
                                <span>creative</span> mindsets</li>
                                <li class="about__skillbox-list-item">In constant <span>self-development</span></li>
                                <li class="about__skillbox-list-item"><span>Leadership and
                                organizational skills</span></li>
                                <li class="about__skillbox-list-item">Capability of <span>analyzing</span> and <span>solving</span> complex problems</li>
                            </ul>
                        </div>
                        <div id="text6" class="about__skillbox-text about__certificates">
                            <ul class="about__skillbox-list">
                                <li class="about__skillbox-list-item"><a href="https://www.freecodecamp.org/certification/tatianakoroleva/responsive-web-design"><span class="special-span">"Responsive Web Design. <br> Developer Certification, representing approximately 300hours of coursework. FREECODE.CAMP (21Feb. 2023)</span></a> (<-)</li>
                                <li class="about__skillbox-list-item">Certificate "JavaScript for beginners" (100%), 2021, Stepik.org</li>
                                <li class="about__skillbox-list-item">Certificate "HTML/CSS: basic" (100%), 2021, Stepik.org</li>
                                <li class="about__skillbox-list-item">Certificate "IELTS", 2014 (English)</li>
                                <li class="about__skillbox-list-item">Certificate "DALF C1", 2013 (French)</li>
                                <li class="about__skillbox-list-item">Certificate "HTML / CSS", 2006, (Computer Center "Specialist" at the Bauman University)</li>
                                <li class="about__skillbox-list-item">Certificate "Photoshop CS2", 2006, (Computer Center "Specialist" at the Bauman University)</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="about__content-text">
                    <p>Hi! My name is Tatiana.</p><br>
                    <p>I've been passionate about <span>languages and computers</span> since
                        my early childhood. I have both <span>creative and practical minds</span> that help me
                        easily to switch
                        between different tasks.I also have a sort of <span>a computer intuition</span> which has
                        always assisted me
                        in having this easy human-computer interaction.</p>
                    <br>
                    <p>These days, I am applying for Junior Fullstack jobs because I see myself
                        keeping up with the
                        development of technology in the future,
                        and becoming a high-qualified specialist, the one who is not afraid of challengies, the one
                        who
                        is in constant self-enrichment and the one who is passionate about his job.</p>

                </div>
            </section>
        </div>
    </section>
    <section class="portfolio" id="portfolio">
        <div class="container">
                <h3 class="title portfolio__title">. PORTFOLIO</h3>
                <div class="portfolio__links">
                        <div><a class="portfolio__link--templates"  id="templates-link">+ TEMPLATES</a></div>
                        <div><a class="portfolio__link--pers-proj" id="personal-projects-link">+ PERSONAL PROJECTS</a></div>
                </div>
                <div class="portfolio__gallery portfolio__gallery--templates" id="templates-gallery">
                    
                    <div class="portfolio__gallery-item proj1">
                        <div class="portfolio__item project-col1">
                            <a href="projects/Templates_practice/01.Template_Mogo/index.html" target="_blank">
                            <div class="portfolio__img-box"><img class="portfolio__img first-img" src="img/tiny_pics_portfolios/mogo1.jpg" alt="project1"></div>
                            
                            <div class="portfolio__img-box"><img class="portfolio__img" src="img/tiny_pics_portfolios/mogo2.jpg" alt="project1"></div>
                            
                            <div class="portfolio__img-box"><img class="portfolio__img" src="img/tiny_pics_portfolios/mogo3.jpg" alt="project1"></div>
                            
                            <div class="portfolio__img-box"><img class="portfolio__img" src="img/tiny_pics_portfolios/mogo4.jpg" alt="project1"></div>
                            
                            <div class="portfolio__img-box"><img class="portfolio__img" src="img/tiny_pics_portfolios/mogo5.jpg" alt="project1"></div>
                            
                            <div class="portfolio__img-box"><img class="portfolio__img" src="img/tiny_pics_portfolios/mogo6.jpg" alt="project1"></div>
                            
                            <div class="portfolio__img-box"><img class="portfolio__img" src="img/tiny_pics_portfolios/mogo7.jpg" alt="project1"></div>
                            
                            <div class="portfolio__img-box"><img class="portfolio__img" src="img/tiny_pics_portfolios/mogo8.jpg" alt="project1"></div>
                            
                            <div class="portfolio__img-box"><img class="portfolio__img" src="img/tiny_pics_portfolios/mogo9.jpg" alt="project1"></div>
                            
                            <div class="portfolio__img-box"><img class="portfolio__img" src="img/tiny_pics_portfolios/mogo10.jpg" alt="project1"></div>
                            
                            <div class="portfolio__img-box"><img class="portfolio__img" src="img/tiny_pics_portfolios/mogo11.jpg" alt="project1"></div></a>
                            <button class="portfolio__left-arrow">&lt;</button>
                            <button class="portfolio__right-arrow">&gt;</button>
                        </div>
                            
                        <div class="portfolio__item-descr">
                            <a class="portfolio__item-descr-link" href="https://github.com/tatyanakoroleva00/final_project/tree/main/projects/Templates_practice/01.Template_Mogo" target="_blank"><h5 class="portfolio__item-title">#4."Welcome To Mogo" (2023)</h5></a><br>
                            <p>This multi-pages project, I consider to be the one which shows the growth in coding skills.
                                It gave me the vast knowledge in HTML / CSS layout, and also gave me the vision of real websites.
                                I used absolute and relative positions to place items one on another, opacity and filters. There were repetitive sections, flex-boxes,
                                icons near the text, accordion that I created functioning. Quotes with side arrows that I didn't animate not knowing the designer's idea.
                                Three layer positioning: image, image shifted to the left-top, icons. Large pictures gallery. Tiny icons: views and comments.
                                Subscribe form. Map. Footer with 3 columns, instagram gallery, blogs.
                            </p>
                        </div>
                    </div>
                    

                    <div class="portfolio__gallery-item proj2">
                        <div class="portfolio__item project-col2"><a href="projects/Templates_practice/03.Template_Pipernet_is_here/index.html" target="_blank">
                            <div class="portfolio__img-box"><img class="portfolio__img" src="img/tiny_pics_portfolios/PiperNet1.jpg" alt="project2"></div>
                            <div class="portfolio__img-box"><img class="portfolio__img" src="img/tiny_pics_portfolios/PiperNet2.jpg" alt="project2"></div></a>
                            <button class="portfolio__left-arrow">&lt;</button>
                            <button class="portfolio__right-arrow">&gt;</button>
                        </div>

                        <div class="portfolio__item-descr">
                            <a class="portfolio__item-descr-link" href="https://github.com/tatyanakoroleva00/final_project/tree/main/projects/Templates_practice/03.Template_Pipernet_is_here" target="_blank"><h5 class="portfolio__item-title">#3."PiperNet Is Here" (2023)</h5></a><br>
                            <p>It was my first project that I found while doing my HTML / CSS layout course. I made it in 2021 for first time.
                                But in 2023, I've decided to try to do it again. I got acquainted with the flex layout.
                                My coding was more conscious. I've learnt about 100% heading and containers.
                                Also, how to place a text on an image using absolute and relative positioning. How to use flex-wrap and to make images round. </p>
                        </div> 
                    </div>


                    <div class="portfolio__gallery-item proj3">
                        <div class="portfolio__item project-col3"><a href="projects/Templates_practice/04.John/index.html" target="_blank">
                            <div class="portfolio__img-box"><img class="portfolio__img" src="img/tiny_pics_portfolios/John1.jpg" alt="project3"></div>
                            <div class="portfolio__img-box"><img class="portfolio__img" src="img/tiny_pics_portfolios/John2.jpg" alt="project3"></div></a>
                            <button class="portfolio__left-arrow">&lt;</button>
                            <button class="portfolio__right-arrow">&gt;</button>
                        </div>

                        <div class="portfolio__item-descr">
                            <a class="portfolio__item-descr-link"  href="https://github.com/tatyanakoroleva00/final_project/tree/main/projects/Templates_practice/04.John" target="_blank"><h5 class="portfolio__item-title">#2."John" (2022)</h5></a><br>
                            <p>This project gave me an idea of the responsive design. What I learned was auto margin,
                                nav panel, positioning of an image and text aside, download resume button, flex-boxing
                                applied to posts. The section "featured" taught me to place image to the left of the text,
                                which also consisted of flexes. Icons in the bottom and copyright were new to me. I learnt
                                how to search them and to place them. </p>
                        </div>
                    </div>
                    
                    <div class="portfolio__gallery-item proj4">
                        <div class="portfolio__item project-col4"><a href="projects/Templates_practice/02.Template_Watches/index.html" target="_blank">
                            <div class="portfolio__img-box"><img class="portfolio__img" src="img/tiny_pics_portfolios/watch1.jpg" alt="project4"></div>
                            <div class="portfolio__img-box"><img class="portfolio__img" src="img/tiny_pics_portfolios/watch2.jpg" alt="project4"></div>
                            <div class="portfolio__img-box"><img class="portfolio__img" src="img/tiny_pics_portfolios/watch3.jpg" alt="project4"></div>
                            <div class="portfolio__img-box"><img class="portfolio__img" src="img/tiny_pics_portfolios/watch4.jpg" alt="project4"></div></a>
                            <button class="portfolio__left-arrow">&lt;</button>
                            <button class="portfolio__right-arrow">&gt;</button>
                        </div>
                    
                        <div class="portfolio__item-descr no-overflow">
                            <a class="portfolio__item-descr-link"  href="https://github.com/tatyanakoroleva00/final_project/tree/main/projects/Templates_practice/02.Template_Watches" target="_blank"><h5 class="portfolio__item-title">#1."Watches" (2022)</h5></a><br>
                            <p>This website template represented to me the vision of a commercial website. I have
                                got acquainted with margins, several pages website, vertical and horizontal page viewing, repetitive sections.  </p>
                        </div>

                       
                    </div>
                </div>

                <!-- Personal portfolio-->
                <div class="portfolio__gallery portfolio__gallery--pers-proj" id="personal-projects-gallery">

                    <div class="portfolio__gallery-item proj">
                        <div class="portfolio__item pers-proj-col1"><a href="projects/Online_store/index.php" target="_blank">
                            <div class="portfolio__img-box"><img class="portfolio__img" src="img/page_site/online_store.jpg" alt="online store"></div></a>
                            
                        </div>
                        <div class="portfolio__item-descr">
                            <a class="portfolio__item-descr-link" href="https://github.com/tatyanakoroleva00/final_project/tree/main/projects/Online_store" target="_blank"><h5 class="portfolio__item-title">#1."Domium Solatium" (2023)</h5></a><br>
                            <p>This is my first invented portfolio Online Store. Here, I wanted to show my knowledge of FrontEnd and BackEnd all together.
                                What was new for me: small icons in nav menu, design creation for the shop, best solutions finding for transparent buttons
                                (colors, fonts, arrows). Search bar, shopping cart, favourites, login / registration icons.
                            </p>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <section class="blog" id="blog">
        <div class="container">
            <h3 class="title blog__title">. BLOG</h3>
            <section class="blog__items">
                <?php foreach ($posts as $post):?>
                <div class="blog__item">
                    <img class="blog__item-image" src="img/blog/<?= $post['image']?>" alt="IT domain">
                    <?php $a = $post['add_date'];
                    $date = date("d-M-Y", strtotime($a));
                    $date_modified = str_replace("-", " ", $date);
                    ?>

                    <p class="blog__item-date"><?= $date_modified?></p>
                    <h4 class="blog__item-title">POST #<?= $post['id']?></h4>
                    <p class="blog__item-text"><?= $post['short_text']?>... <a class="blog__item-read-more" target="_blank"  href="pages/blog.php?=<?=$post['id']?>">Read more -></a></p>
                </div>
                <?php endforeach;?>
            </section>
        </div>
    </section>
    <section class="contact" id="contact">
      <div class="container">
          <h3  class="title contact__title">. CONTACT ME </h3>
<!--            here <img class="contact__image" src="img/icons/inc-feather.png" alt="contact form"></h3>-->
          <form class="contact__form" action="pages/form_send.php" method="post">
            <input class="contact__form-input" name="Name" type="text"  placeholder="Name" required>
            <input class="contact__form-input" name="Email" type="email"  placeholder="Email address" required>
            <textarea class="contact__form-textarea" name="Message" placeholder="Your Message" rows="10" style="resize: none;"  required></textarea>
            <input class="contact__form-submit" type="submit" value="Send">
        </form>
          <img class="lamp" src="img/1.png" alt="lamp">
          <div class="light animation"></div>
          <div class="lamp-message">You are most welcome to send me a message</div>
      </div>
    </section>
    <section class="footer">
        <div class="container">
            <div class="copyright">
                <div>&nbsp;Copyright &#9400; <?= date('Y'); ?> TK. All Rights Reserved</div>
            </div>
        </div>
    </section>
 
</body>

</html>
<div>