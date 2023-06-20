/*MAIN PAGE*/
const select = document.querySelector('.change-lang');
const allLang = ['en', 'ru', 'fr'];

const langArr = {
    "title-name" : {
        "ru" : "ТК - Сайт-Портфолио",
        "en" : "TK - Portfolio Website",
        "fr" : "TK - Website Portfolio",
    },
    "home" : {
        "ru" : "ГЛАВНАЯ",
        "en" : "HOME",
        "fr" : "PAGE PRINCIPALE",
    },
    "about" : {
        "ru" : "ОБО МНЕ",
        "en" : "ABOUT",
        "fr" : "MOI",
    },
    "portfolio" : {
        "ru" : "ПОРТФОЛИО",
        "en" : "PORTFOLIO",
        "fr" : "PORTFOLIO",
    },
    "blog" : {
        "ru" : "БЛОГ",
        "en" : "BLOG",
        "fr" : "BLOG",
    },
    "alter-ego" : {
        "ru" : "АЛЬТЕР ЭГО",
        "en" : "ALTER EGO",
        "fr" : "ALTER EGO",
    },
    "home-page__title" : {
        "ru" : "ТАТЬЯНА КОРОЛЕВА",
        "en" : "TATIANA KOROLEVA",
        "fr" : "TATIANA KOROLEVA",
    },
    "home-page__subtitle" : {
        "ru" : "Младший Фулстек Разработчик",
        "en" : "Junior Fullstack Developer",
        "fr" : "Développeur Junior Full stack",
    },
    "home-page__text" : {
        "ru" : 'На данный момент я нахожусь в поиске работы на позицию "Младший Фулстек Разработчик"',
        "en" : "Currently, I am looking for the employment opportunities in the IT field as a Junior Fullstack Developer",
        "fr" : "Actuellement, je suis à la recherche d'opportunités d'emploi dans le domaine informatique en tant que développeur Junior Fullstack",
    },
    "hire-btn" : {
        "ru" : "СОБЕСЕДОВАНИЕ",
        "en" : "HIRE ME",
        "fr" : "EMBAUCHEZ-MOI",
    },
    "download-cv-btn" : {
        "ru" : "СКАЧАТЬ РЕЗЮМЕ",
        "en" : "DOWNLOAD CV",
        "fr" : "TÉLÉCHARGER LE CV",
     },
    "about__title" : {
        "ru" : ". ОБО МНЕ",
        "en" : ". ABOUT ME",
        "fr" : ". MOI",
    },
    "education" : {
        "ru" : "Образование",
        "en" : "Education",
        "fr" : "Education",
    },
    "work-experience" : {
        "ru" : "Опыт работы",
        "en" : "Work Experience",
        "fr" : "Expérience Professionnelle",
    },
    "languages" : {
        "ru" : "Языки",
        "en" : "Languages",
        "fr" : "Langues",
    },
    "computer-skills" : {
        "ru" : "Компьютерные навыки",
        "en" : "Computer Skills",
        "fr" : "Compétences informatiques",
    },
    "soft-skills" : {
        "ru" : "Мягкие навыки",
        "en" : "Soft Skills",
        "fr" : "Compétences Générales",
    },
    "certificates" : {
        "ru" : "Дипломы",
        "en" : "Certificates",
        "fr" : "Certificats",
    },
    "education1" : {
        "ru" : "2023, Фулстек-разработка. Профессиональная переподготовка. (260ч). \"Центр Профессионал\".",
        "en" : "2023, FULLSTACK courses. (260h) Center \"Professional\".",
        "fr" : "2023, cours FULLSTACK. (260h) Centre \"Professionnel\".",
    },
    "education-location" : {
        "ru" : "Москва, Россия",
        "en" : "Moscow, Russia",
        "fr" : "Moscou, la Russie",
    },
    "education2" : {
        "ru" : "2015, Второе высшее. (MBA) \"Бизнес, Европейский Менеджмент, Языки\".",
        "en" : "2015, M2 (MBA) \"Business, European Management, Languages\".",
        "fr" : "2015, M2 (MBA) \"Langues, Affaires, Management Européen\".",
    },
    "education-location2" : {
        "ru" : "Университет г.Орлеан, Франция.",
        "en" : "University of Orleans, France.",
        "fr" : "Université d'Orléans, France.",
    },
    "education3" : {
        "ru": "2009, Первое высшее. \"Международные отношения.\"",
        "en": "2009, M2 “Diplomacy, International Relations”.",
        "fr": "2009, M2 “Relations Internationales”.",
    },
    "education-location3" : {
        "ru" : "МГЛУ им.Мориса Тореза, Россия",
        "en" : "Moscow State Linguistic University, Russia.",
        "fr" : "L'Université d'Etat de Moscou, la Russie",
    },
    "education4" : {
        "ru": "Английская спецшкола",
        "en": "English Special School",
        "fr": "L'école anglaise spécialisée",
    },
    "education-location4" : {
        "ru" : "Москва, Россия",
        "en" : "Moscow, Russia",
        "fr" : "Moscou, la Russie",
    },
    "work-experience1" : {
        "ru" : "*На данный момент я нахожусь в поиске работы на позицию \"Младший Фулстек Разработчик\"",
        "en" : "*Currently, I am looking for the employment opportunities in the IT field as a Junior Fullstack Developer",
        "fr" : "*Actuellement, je suis à la recherche d'opportunités d'emploi dans le domaine informatique en tant que développeur Junior Fullstack",
    },
    "work-experience2" : {
        "ru" : "2018 – 2020, СТАРШИЙ МЕНЕДЖЕР ПО ТУРИЗМУ в (\"ЦАРЬ ВУАЯЖ\", Москва, Россия).",
        "en" : "2018 – 2020, SENIOR TRAVEL MANAGER in (\"TSAR VOYAGES\", Moscow, RU).",
        "fr" : "2018 – 2020, GESTIONNAIRE DE VOYAGES SENIOR chez (\"TSAR VOYAGES\", Moscou, RU).",
    },
    "work-exp-descr1" : {
        "ru" : " Создание туристических маршрутов и программ. Взаимодействие с клиентами из англо- и франкоговорящих стран, а также с поставщиками услуг (отели, гиды, транспортные компании, музеи...).",
        "en" : " Creating travel tourist routes and programs. Interaction with clients from anglophone and francophone countries. " +
            "Interation with service providers (hotels, guides, transport companies, museums...).",
        "fr" : " La création des itinéraires et des programmes touristiques de voyage. " +
            "L'interaction avec des clients des pays anglophones et francophones. L'interaction avec des prestataires de services (hôtels, guides, sociétés de transport, musées...).",
    },
    "work-experience3" : {
        "ru" : "2017 – 2018, СТАРШИЙ МЕНЕДЖЕР ПО ЛОГИСТИКЕ (\"KUEHNE + NAGEL\", Париж, Франция).",
        "en" : "2017 – 2018, CARGO TRANSPORTATION MANAGER (\"KUEHNE + NAGEL\", Paris, FR).",
        "fr" : "2017 – 2018, L'AFFRETEUR (\"KUEHNE + NAGEL\", Paris, FR).",
    },
    "work-exp-descr2" : {
        "ru" : " Поиск и заказ траспорта для качественной доставки грузов (медикаменты, автозапчасти) по Европе. Взаимодействие с европейскими клиентами и поставщиками услуг.",
        "en" : " Ordering transport for good delivery in Europe. Interaction with European clients and service providers.",
        "fr" : " La recherche du transport pour la livraison des marchandises (auto détails, médicaments) en Europe. L'interaction avec des clients et prestataires européens.",
    },






};


function changingLanguagesFunction() {
    select.addEventListener('change', changeURLLanguage);

    function changeURLLanguage() {
        let lang = select.value;
        location.href = window.location.pathname + '#' + lang;
        location.reload();
    }
    function changeLanguage() {
        let hash = window.location.hash;
        hash = hash.substr(1);
        // console.log(hash);
        if (!allLang.includes(hash)) {
            location.href = window.location.pathname + '#en';
            location.reload();
        }
        select.value = hash;

        for (let key in langArr){
            let elem = document.querySelector('.lng-' + key);
            if (elem) {
                elem.innerHTML = langArr[key][hash];
                if (hash === 'ru') {
                    elem.style.fontWeight = '400';
                    elem.style.fontFamily = 'Roboto';
                }

            }

        }
    }
    changeLanguage();
}

changingLanguagesFunction();






