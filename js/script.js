/*This is a function which links each button with a specific text. Clicking on one button, other buttons will lose their shadows and the only pressed button will have its shadow. */

                                    /*SWITCH TEXTS WITH BTNS*/
function switchTextsWithBtns() {
    const btns = document.querySelector('.about__skillbox-btns');
    const btn = document.querySelectorAll('.about__skillbox-btn');
    const text = document.querySelectorAll('.about__skillbox-text');

    btns.addEventListener('click', (event) => {
        if (event.target && event.target.classList.contains('about__skillbox-btn')) {
            if (!event.target.classList.contains('box-shadow')) {
                event.target.classList.add('box-shadow');

                btn.forEach((item, i) => { /*removing all styles*/
                    item.style.boxShadow = 'none';
                    item.classList.remove('box-shadow');
                    if (event.target == item) { /*linking a text with a button*/
                        text.forEach(item => {
                            item.style.display = 'none';
                        })
                        text[i].style.display = 'inline';
                    }
                })
                event.target.style.boxShadow= '1px 1px 15px #00ffff'; /*shadow */
            }
        }
    })
}
switchTextsWithBtns()





/* LIGHT AND LAMP*/
function turnOnTheLight() {
    const lamp = document.querySelector('.lamp');
    const light = document.querySelector('.light');
    const lampMessage = document.querySelector('.lamp-message');

    lamp.addEventListener("click", (e) => {
        e.preventDefault();
        light.classList.remove('animation');
        void light.offsetWidth;
        light.classList.add('animation');

    }, false);
}
turnOnTheLight();

/*SMOOTH MOVEMENT*/

const anchors = document.querySelectorAll('a[href*="#"]'); /*Работает в Google Chrome*/
for (let anchor of anchors) {
    anchor.addEventListener("click", function(event) {
        event.preventDefault();
        const blockID = anchor.getAttribute('href');
        document.querySelector('' + blockID).scrollIntoView({
            behavior: "smooth", block: "start"
        })
        anchor.style.cursor = 'pointer';
    })
}


/*This function will make the portfolio works appear or disappear*/


    const personalProjectsLink = document.querySelector('#personal-projects-link');
    const templateLink = document.querySelector('#templates-link');
    const templatesGallery = document.querySelector('#templates-gallery');
    const personalProjectsGallery = document.querySelector('#personal-projects-gallery');


    function openGalleries() {
    templateLink.addEventListener('click', ()=> {
        templatesGallery.style.display = 'grid';
        templateLink.style.color = '#00ffff';
        templateLink.style.fontWeight = 'bold';

        personalProjectsGallery.style.display = 'none';
        personalProjectsLink.style.color = '#828387';
        personalProjectsLink.style.fontWeight = 'normal';
    });

    personalProjectsLink.addEventListener('click', ()=> {
        templatesGallery.style.display = 'none';
        templateLink.style.color = '#828387';
        templateLink.style.fontWeight = 'normal';
        
        personalProjectsGallery.style.display = 'grid';
        personalProjectsLink.style.color = '#00ffff';
        personalProjectsLink.style.fontWeight = 'bold';
    });
    }
    openGalleries();


function slider1() {

    const prev = document.querySelector('.project-col1 .portfolio__left-arrow'); 
    const next = document.querySelector('.project-col1 .portfolio__right-arrow');

    let slideIndex = 1;
    showSlides(slideIndex);

    function nextSlide() {
        showSlides(slideIndex += 1);
    }

    next.addEventListener('click', nextSlide);

    function previousSlide() {
        showSlides(slideIndex -= 1);
    }
    prev.addEventListener('click', previousSlide);

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        const slides = document.querySelectorAll('.proj1 .portfolio__img-box');

        if (n > slides.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides.length;
        }

        for (let slide of slides) {
            slide.style.display = 'none';
        }
        slides[slideIndex - 1].style.display = 'block';
    }
}
slider1();

function slider2() {
    const prev2 = document.querySelector('.project-col2 .portfolio__left-arrow'); 
    const next2 = document.querySelector('.project-col2 .portfolio__right-arrow');

    let slideIndex = 1;
    showSlides(slideIndex);

    function nextSlide() {
    showSlides(slideIndex += 1);
    }
    next2.addEventListener('click', nextSlide);

    function previousSlide() {
    showSlides(slideIndex -= 1);
    }
    prev2.addEventListener('click', previousSlide);

    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

function showSlides(n) {
    const slides2 = document.querySelectorAll('.proj2 .portfolio__img-box');

    if (n > slides2.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides2.length;
    }

    for (let slide of slides2) {
        slide.style.display = 'none';
    }
    slides2[slideIndex - 1].style.display = 'block';
}
}
slider2();

function slider3() {

    const prev3 = document.querySelector('.project-col3 .portfolio__left-arrow'); 
    const next3 = document.querySelector('.project-col3 .portfolio__right-arrow');
    
    let slideIndex = 1;
    showSlides(slideIndex);
    
    function nextSlide() {
        showSlides(slideIndex += 1);
    }
    next3.addEventListener('click', nextSlide);
    
    function previousSlide() {
        showSlides(slideIndex -= 1);
    }
    prev3.addEventListener('click', nextSlide);
    
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
        const slides3 = document.querySelectorAll('.project-col3 .portfolio__img-box');
    
        if (n > slides3.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides3.length;
        }
    
        for (let slide of slides3) {
            slide.style.display = 'none';
        }
        slides3[slideIndex - 1].style.display = 'block';
    }
    }
    slider3();

    function slider4() {

        const prev4 = document.querySelector('.project-col4 .portfolio__left-arrow'); 
        const next4 = document.querySelector('.project-col4 .portfolio__right-arrow');
        
        let slideIndex = 1;
        showSlides(slideIndex);
        
        function nextSlide() {
            showSlides(slideIndex += 1);
        }
        next4.addEventListener('click', nextSlide);
        
        function previousSlide() {
            showSlides(slideIndex -= 1);
        }
        prev4.addEventListener('click', nextSlide);
        
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
            const slides4 = document.querySelectorAll('.project-col4 .portfolio__img-box');
        
            if (n > slides4.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides4.length;
            }
        
            for (let slide of slides4) {
                slide.style.display = 'none';
            }
            slides4[slideIndex - 1].style.display = 'block';
        }
        }
        slider4();

/*CHANGE LANGUAGE*/

