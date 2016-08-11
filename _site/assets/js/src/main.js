'use strict';

var $       = require('jquery');
var fitvids = require('fitvids');
var popup   = require('magnific-popup');

console.log("================ Loading JS files for Ahmad Assaf Blog ============================");

// Add lightbox class to all image links
$( `a[href$='.jpg'],
    a[href$='.jpeg'],
    a[href$='.JPG'],
    a[href$='.png'],
    a[href$='.gif']`
).addClass("image-popup");

// Add the fitvideo attribute for responsive videos
$(function() { $(".content").fitVids() });

$(document).ready(function() {
    $('.image-popup').magnificPopup({
    type    : 'image',
    tLoading: 'Loading image #%curr%...',
    gallery : {
      enabled           : true,
      navigateByImgClick: true,
      preload           : [0,1]
    },
    image: {
      tError      : '<a href="%url%">Image #%curr%</a> could not be loaded.',
      },
      removalDelay: 300,
      mainClass   : 'mfp-fade'
  });
});