/*This is a function which links each button with a specific text. Clicking on one button, other buttons will lose their shadows and the only pressed button will have its shadow. */

    const buttons = document.querySelectorAll('.about__skillbox-btn');
    const btn1 = document.querySelector('#btn1');
    const btn2 = document.querySelector('#btn2');
    const btn3 = document.querySelector('#btn3');
    const btn4 = document.querySelector('#btn4');
    const btn5 = document.querySelector('#btn5');
    const btn6 = document.querySelector('#btn6');

    const text = document.querySelectorAll('.about__skillbox-text');
    const text1 = document.querySelector('#text1');
    const text2 = document.querySelector('#text2');
    const text3 = document.querySelector('#text3');
    const text4 = document.querySelector('#text4');
    const text5 = document.querySelector('#text5');
    const text6 = document.querySelector('#text6');

    const lamp = document.querySelector('.lamp');
    const light = document.querySelector('.light');
    const lampMessage = document.querySelector('.lamp-message');



    function turnOnTheLight() {
        lamp.addEventListener("click", (e) => {
            e.preventDefault();
            light.classList.remove('animation');
            void light.offsetWidth;
            light.classList.add('animation');

        }, false);

    }
    turnOnTheLight();


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


    btn1.addEventListener('click', ()=> {
        text.forEach(textEl => {
            textEl.style.display = 'none';
        })
        buttons.forEach(btnEl => {
            btnEl.style.boxShadow = 'none';
        })
        text1.style.display = 'inline';
        btn1.style.boxShadow = '1px 1px 15px #00ffff'; 
    });

    btn2.addEventListener('click', ()=> {
        text.forEach(textEl => {
            textEl.style.display = 'none';
        })
        buttons.forEach(btnEl => {
            btnEl.style.boxShadow = 'none';
        })
        text2.style.display = 'inline';
        btn2.style.boxShadow = '1px 1px 15px #00ffff'; 
    });

    btn3.addEventListener('click', ()=> {
        text.forEach(textEl => {
            textEl.style.display = 'none';
        })
        buttons.forEach(btnEl => {
            btnEl.style.boxShadow = 'none';
        })
        text3.style.display = 'inline';
        btn3.style.boxShadow = '1px 1px 15px #00ffff'; 
    });

    btn4.addEventListener('click', ()=> {
        text.forEach(textEl => {
            textEl.style.display = 'none';
        })
        buttons.forEach(btnEl => {
            btnEl.style.boxShadow = 'none';
        })
        text4.style.display = 'inline';
        btn4.style.boxShadow = '1px 1px 15px #00ffff'; 
    });
        
    btn5.addEventListener('click', ()=> {
        text.forEach(textEl => {
            textEl.style.display = 'none';
        })
        buttons.forEach(btnEl => {
            btnEl.style.boxShadow = 'none';
        })
        text5.style.display = 'inline';
        btn5.style.boxShadow = '1px 1px 15px #00ffff'; 
    });
   
    btn6.addEventListener('click', ()=> {
        text.forEach(textEl => {
            textEl.style.display = 'none';
        })
        buttons.forEach(btnEl => {
            btnEl.style.boxShadow = 'none';
        })
        text6.style.display = 'inline';
        btn6.style.boxShadow = '1px 1px 15px #00ffff'; 
    });
        
    


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

