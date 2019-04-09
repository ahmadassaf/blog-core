'use strict';

const aos = require('aos');
const fitVids = require('./vendor/fitvids');
const Typed = require('typed.js');

document.addEventListener("DOMContentLoaded", function(event) {

    var config = {
        startOnReady: true,
        theme: 'neutral'
    };
    mermaid.initialize(config);

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

    if (document.getElementsByClassName('container--home').length || document.getElementsByClassName('container--blog').length) {
        require('./projects');
    }
    // Handle the toggling of the search menu on/off
    document.addEventListener('click', function(event) {
        if ( event.srcElement.id === 'openNavigationMenu' ) {
            document.querySelector('.navigation__container').style.display = 'block';
        } else if ( event.srcElement.id === 'closeNavigationMenu' ) {
            document.querySelector('.navigation__container').style.display = 'none';
        }
      });
});

require('./search');
