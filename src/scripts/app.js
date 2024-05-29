import { gsap } from "gsap";
    
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { Draggable } from "gsap/Draggable";


gsap.registerPlugin(ScrollTrigger,Draggable);


document.addEventListener("DOMContentLoaded", function () {
    console.log("Le Dom est chargé.");

    function updateActiveLink() {
        var currentPageUrl = window.location.pathname + window.location.search;
        console.log("URL de la page actuelle :", currentPageUrl);

        var menuLinks = document.querySelectorAll('.menu__el a');
        console.log("Liens du menu :", menuLinks);

        menuLinks.forEach(function (link) {
            var linkUrl = new URL(link.href).pathname + new URL(link.href).search;
            console.log("URL du lien :", linkUrl);

            if (linkUrl === currentPageUrl) {
                console.log("La page correspond :", link.href);
                link.classList.add('Mactive');
                console.log("Classe active ajoutée au lien :", link);
            } else {
                link.classList.remove('Mactive');
            }
        });
    }

    updateActiveLink();

    var navLinks = document.querySelectorAll('.menu__el a');
    navLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            setTimeout(updateActiveLink, 100);

            if (window.getComputedStyle(menuBurger).display !== 'none') {
                toggleMenu();
                burger.classList.remove('active');
            }
        });
    });

    function onscroll() {
        var sections = document.querySelectorAll('main section');
        var scrollPos = window.scrollY || document.documentElement.scrollTop;

        sections.forEach(function (section) {
            var sectionTop = section.offsetTop;
            var sectionHeight = section.offsetHeight;

            if (scrollPos >= sectionTop - 50 && scrollPos < sectionTop + sectionHeight) {
                var currentId = section.getAttribute('id');
                console.log("Section actuelle visible :", currentId);

                navLinks.forEach(function (link) {
                    link.classList.remove('Mactive');
                    if (link.getAttribute('href') === '#' + currentId) {
                        link.classList.add('Mactive');
                    }
                });
            }
        });
    }

    window.addEventListener('scroll', onscroll);
    
    onscroll();
});

var menuBurger = document.querySelector('.menu__burger');
var menu = document.querySelector('.menu');

function toggleMenu() {
    menu.classList.toggle('menu--open');
    document.body.classList.toggle('menu--open');
}

if (menuBurger) {
    menuBurger.addEventListener('click', toggleMenu);
}

var burger = document.querySelector(".burger");

if (burger) {
    burger.addEventListener('click', function () {
        burger.classList.toggle('active');
    });
}

// pour la rotation au surval de mes passions
document.querySelectorAll('.passion').forEach(passion => {
    passion.addEventListener('mouseover', function() {
        const rotation = (Math.random() * 12) - 6; // Rotation aléatoire entre -6 et 6 degrés
        const backText = this.querySelector('.bricoler__back, .jeu__back, .rando__back, .moto__back, .dessin__back');
        backText.style.transform = `translateX(-50%) rotate(${rotation}deg)`;
    });

    passion.addEventListener('mouseout', function() {
        const backText = this.querySelector('.bricoler__back, .jeu__back, .rando__back, .moto__back, .dessin__back');
        backText.style.transform = 'translateX(-50%) rotate(0deg)';
    });
});

//pour l'apparition de mon text lié au passion 
// Sélectionnez tous les boutons et tous les éléments de texte
document.querySelectorAll('.passion').forEach(passion => {
    passion.addEventListener('mouseover', function() {
        if (window.innerWidth >= 1024) { // Vérifie si la largeur de l'écran est au moins de 1024 pixels (version PC)
            const rotation = (Math.random() * 12) - 6; // Rotation aléatoire entre -6 et 6 degrés
            const backText = this.querySelector('.bricoler__back, .jeu__back, .rando__back, .moto__back, .dessin__back');
            backText.style.transform = `translateX(-50%) rotate(${rotation}deg)`;
        }
    });

    passion.addEventListener('mouseout', function() {
        if (window.innerWidth >= 1024) { // Vérifie si la largeur de l'écran est au moins de 1024 pixels (version PC)
            const backText = this.querySelector('.bricoler__back, .jeu__back, .rando__back, .moto__back, .dessin__back');
            backText.style.transform = 'translateX(-50%) rotate(0deg)';
        }
    });
});

// Pour l'apparition du texte lié aux passions
const btnPassions = document.querySelectorAll('.btn');
const textPassions = document.querySelectorAll('.passion__text__mob');

// Ajoutez un écouteur d'événements à chaque bouton
btnPassions.forEach((btn, index) => {
  btn.addEventListener('click', () => {
    // Utilisez l'index pour trouver le paragraphe correspondant
    const textPassion = textPassions[index];
    if (window.innerWidth < 1024) { // Vérifie si la largeur de l'écran est inférieure à 1024 pixels (version mobile)
      if (textPassion.classList.contains('show')) {
        textPassion.classList.remove('show');
        textPassion.classList.remove('show-text');
        btn.classList.remove('rotate');
      } else {
        textPassion.classList.add('show-text');
        setTimeout(() => {
          textPassion.classList.add('show');
          btn.classList.add('rotate');
        }, 10); // Délai pour permettre le reflow
      }
    }
  });
});
