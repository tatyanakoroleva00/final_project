const dropdownBtnCategories = document.querySelector('.dropdown-menu.btn--categories');
const dropdownBtnProducts = document.querySelector('.dropdown-menu.btn--products');
const dropdownContentCategories = document.querySelector('.dropdown-content--categories');
const dropdownContentProducts = document.querySelector('.dropdown-content--products');
const glassAndSearch = document.querySelector('.glass_search ');
const searchBar = document.querySelector('.search-bar input');

/***********************DROPDOWN CATEGORIES****************/
function showAndhideDropdownCategories() {
dropdownBtnCategories.addEventListener('click', () => {
if (dropdownContentCategories.style.display === 'block') {
    dropdownContentCategories.style.display = 'none';
} else {
    dropdownContentCategories.style.display = 'block'
}
});
}
showAndhideDropdownCategories();

/***********************DROPDOWN PRODUCTS****************/

function showAndhideDropdownProducts () {
    dropdownBtnProducts.addEventListener('click', () => {
    if (dropdownContentProducts.style.display === 'block') {
        dropdownContentProducts.style.display = 'none';
    } else {
        dropdownContentProducts.style.display = 'block'
    }
    });
    }
showAndhideDropdownProducts();


/*************************SHOWING AND HIDING SEARCHING BAR ************************************/
function showANDhideSearchBar () {
glassAndSearch.addEventListener('click', () => {
    if (searchBar.style.display === 'block') {
        searchBar.style.display = 'none'
    } else {
        searchBar.style.display = 'block';
    }
});
}
showANDhideSearchBar();

<script>!function(e,t,a){var c=e.head||e.getElementsByTagName("head")[0],n=e.createElement("script");n.async=!0,n.defer=!0, n.type="text/javascript",n.src=t+"/static/js/widget.js?config="+JSON.stringify(a),c.appendChild(n)}(document,"https://app.engati.com",{bot_key:"603df0e0c9164b38",welcome_msg:true,branding_key:"default",server:"https://app.engati.com",e:"p" });</script>