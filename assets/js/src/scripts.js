// Add lightbox class to all image links
$("a[href$='.jpg'],a[href$='.jpeg'],a[href$='.JPG'],a[href$='.png'],a[href$='.gif']").addClass("image-popup");

$(function() {
  $(".content").fitVids();
});

// Projects Menu
$('.projects-menu-icon').click(function() {
  $('html').toggleClass('no-scroll');
  $(this).toggleClass('active');
  $('.overlay').toggleClass('show');
});

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
