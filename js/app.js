// afficher/masquer la barre de recherche
let searchForm = document.querySelector('.search-form')
document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active')
    shoppingCart.classList.remove('active')
    loginForm.classList.remove('active')
    subscribeForm.classList.remove('active')
    navbar.classList.remove('active')
}

// afficher/masquer le panier
let shoppingCart = document.querySelector('.shopping-cart')
document.querySelector('#cart-btn').onclick = () => {
    shoppingCart.classList.toggle('active')
    searchForm.classList.remove('active')
    loginForm.classList.remove('active')
    subscribeForm.classList.remove('active')
    navbar.classList.remove('active')
}

// afficher/masquer le formulaire de connexion
let loginForm = document.querySelector('.login-form')
document.querySelector('#login-btn').onclick = () => {
    loginForm.classList.toggle('active')
    subscribeForm.classList.remove('active')
    searchForm.classList.remove('active')
    shoppingCart.classList.remove('active')
    navbar.classList.remove('active')
}

// afficher/masquer le formulaire d'inscription
let subscribeForm = document.querySelector(".subscribe-form");
document.querySelector("#subscribe-link").onclick = () => {
    subscribeForm.classList.toggle("active")
    loginForm.classList.remove("active")
    searchForm.classList.remove("active")
    shoppingCart.classList.remove("active")
    navbar.classList.remove('active')
};

// afficher/masquer le menu pour le responsive
let navbar = document.querySelector('.navbar')
document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active')
    searchForm.classList.remove('active')
    shoppingCart.classList.remove('active')
    loginForm.classList.remove('active')
    subscribeForm.classList.remove('active')
}
window.onscroll= () => {
    searchForm.classList.remove('active')
    shoppingCart.classList.remove('active')
    loginForm.classList.remove('active')
    navbar.classList.remove('active')
    subscribeForm.classList.remove('active')
}

// JS slider
let swiper = new Swiper(".product-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1020: {
            slidesPerView: 3,
        },
    },
});
