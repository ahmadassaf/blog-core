'use strict';

const aos = require('aos');
const fitVids = require('./vendor/fitvids');
const Typed = require('typed.js');

window.onload = function() {
    
    // Initialize AOS that loads the elements animation
    aos.init();
    
    // Add Fitvids which lets you get fluid width videos in a responsive web design by keeping an intrinsic aspect ratio
    fitVids('#blog-post');
    
    // Add the type animation in the home for profession rotation
    if (document.getElementById('profession')) {
        new Typed('#profession', {
            strings: ['Knowledge Seeker', 'Researcher', 'Software Engineer', 'Data Scientist'],
            typeSpeed: 100,
            backDelay: 3500,
            loop: true,
        });
    }
    
    // Allow the archive elements to be clickable
    document
      .querySelectorAll('.post--archive')
      .forEach(e =>
        e.addEventListener(
          'click',
          function() {
            window.open(e.getAttribute('data-link'), '_self');
          },
          false
        )
      );
    
      // Handle the toggling of the search menu on/off
    document
      .getElementById('openNavigationMenu')
      .addEventListener('click', function() {
        document.querySelector('.navigation__list').style.visibility =
          'visible';
      });
    document
      .getElementById('closeNavigationMenu')
      .addEventListener('click', function() {
        document.querySelector('.navigation__list').style.visibility =
          'hidden';
      });      
};