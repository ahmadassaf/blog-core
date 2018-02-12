'use strict';

const $ = global.jQuery = require('jquery');
const fitVids = require('fitvids');
const el = require('elasticlunr');
const popup = require('magnific-popup');
const typed = require('typed.js');
const AOS = require('aos');
const _ = require('lodash');

// This will include the posts.json built in the _site by jekyll
var posts = require('../../../_site/posts.json');

var blog = {

    init: function() {

        var blog = this;

        this.addImageLightBox();

        $(document).ready(function() {
            AOS.init();
            blog.addFitVideos();
            blog.addMagnifiquePopup();
            blog.addResponsiveMenu();
            blog.addSearchTrigger();
            blog.addHomePageScripts();
            const projects = require('./projects');
            document.querySelectorAll('.post--archive').forEach((e) => e.addEventListener('click', function() {window.open(e.getAttribute('data-link'), '_self')}, false))
        });
    },
    /**
     * Add the scripts needed for the homepage script to function
     * @addResponsiveMenu
     */
    addHomePageScripts: function() {
        if ($('#profession').length) {
            var professionRotator = new typed('#profession', {
                strings: ["Knowledge Seeker", "Researcher", "Software Engineer", "Data Scientist"],
                typeSpeed: 100,
                backDelay: 3500,
                loop: true,
            });
        }
    },

    /**
     * Add handlers to apply the responsive menu bar and handle the show/close of the menu itself
     * @addResponsiveMenu
     */
    addResponsiveMenu: function() {

        // Add the click listener to toggle the responsive menu class
        $('.menu-toggle, .close-menu').on('click', function() {
            $('.categories-list').toggleClass('responsive');
        });

        // Add keypress listener to exit search interface on ESC
        $(document).keyup(function(e) {
            if (e.keyCode == 27) {
                if ($('.categories-list').hasClass('responsive')) $('.categories-list').toggleClass('responsive');
            }
        });

        // This will make sure that we submit the form to add emails when we click anywhere outside of the email input field
        $(document).mouseup(function(e) {

            var container = $(".navigation-bar");

            if (!container.is(e.target) // if the target of the click isn't the container...
                &&
                container.has(e.target).length === 0) // ... nor a descendant of the container
            {
                $('.categories-list').removeClass('responsive');
            }
        });

        // Here we want to capture if the responsive menu was open and then the browser width has been resized greater than the responsive width
        // if so, we remove the responsive class and revert back to the normal navigation menu
        $(window).resize(function() {
            if ($(window).width() > 1050 && $('.categories-list').hasClass('responsive')) {
                $('.categories-list').toggleClass('responsive');
            }

            if ($('.post-title-section').length) {
                if ($(window).scrollTop() > $('.post-title-section').offset().top) {
                    $('.post-logo').fadeIn('slow');
                } else $('.post-logo').hide();
            }
        });
    },

    /**
     * Add the trigger to show/hide the search overyaly
     * @addSeachTrigger
     */
    addSearchTrigger: function() {
        $('.search-toggle, .search-close').on('click', function() {

            $('.search-container').toggle();
            // Add the focus on the input box to start searching
            $('input[type="search"]').focus();
        });

        // Add keypress listener to exit search interface on ESC
        $(document).keyup(function(e) {
            if (e.keyCode === 27) {
                if ($('.search-container').is(':visible')) $('.search-container').toggle();
            }
        });

        // We would like now to fetch the posts JSON data into lunr.js and build the index
        var index = el(function() {
            this.addField('title', { boost: 10 });
            this.addField('content', { boost: 5 });
            this.addField('category');
        });

        _.each(posts, function(post) {
            index.addDoc(_.values(post)[0]);
        });

        $('input[type="search"]').keyup(function() {
            var filter = this.value;

            // Hit the search index if the length of the query is long enough
            if (filter.length >= 3) {
    
                $('.search-results').empty();
    
                var results = index.search(filter);
                // If we have any results just hide the featured posts
                
                results.forEach(function(result) {
                    var resultObject = _.values(posts[--result.ref])[0];
                    var resultElement = '<li><a href="' + resultObject.url + '">' + resultObject.title + '</a></li>';
                    $('.search-results').append(resultElement);
                });
            } else $('.search-results').empty();
            
        });
    },
    /**
     * Add CSS class to all image links by checking the href of <a> tags and known image extension types
     * the image-popup class is picked up by the magnific popup afterwards
     * @addImageLightBox
     */

    addImageLightBox: function() {
        return $("a[href$='.jpg'], a[href$='.jpeg'], a[href$='.JPG'], a[href$='.png'], a[href$='.gif']").addClass("image-popup");
    },

    /**
     * lets your videos be responsive by keeping an intrinsic aspect ratio
     * Reference: https://github.com/rosszurowski/vanilla-fitvids
     *
     * @addFitVideos
     */

    addFitVideos: function() {
        return fitVids(".blog-post");

    },

    /**
     * Fast, light and responsive lightbox plugin, for jQuery and Zepto.js
     * Reference: http://dimsemenov.com/plugins/magnific-popup/documentation.html
     *
     * @addMagnifiquePopup
     *
     * @option {String} type    : The type of the popup galery
     * @option {String} tLoading: Text that is displayed during loading. Can contain %curr% and %total% keys
     * @option {Object} gallery : The gallery module allows you to switch the content of the popup and adds navigation arrows.
     *                            It can switch and mix any types of content, not just images
     *  @option {Boolean} enabled           : Enable gallery
     *  @option {Boolean} navigateByImgClick: Flip through gallery by clicking on the image itself
     *  @option {Array} preload             : Preloader in Magnific Popup is used as an indicator of current status.
     *                                        If option enabled, it’s always present in DOM only text inside of it changes.
     *                                        Below you can see explanation of CSS names that are applied to container that holds preloader
     *                                        and content area depending on the state of current item
     * @option {Object} image   :
     *  @option {String} tError: Error message when image could not be loaded
     * @option {Integer} removalDelay: Delay before popup is removed from DOM. Used for the animation
     * @option {String} mainClass    : String that contains classes that will be added to the root element of popup wrapper and to dark overlay
     */

    addMagnifiquePopup: function() {
        if (!!$('.image-popup').length) {
            $('.image-popup').magnificPopup({
                type: 'image',
                tLoading: 'Loading image #%curr%...',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1]
                },
                image: {
                    tError: '<a href="%url%">Image #%curr%</a> could not be loaded.',
                },
                removalDelay: 300,
                mainClass: 'mfp-fade'
            });
        }
    }
}

blog.init();