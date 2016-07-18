define( ["modules/elements","lib/modal","lib/nicescroll","lib/jQueryTemplates"],
  function(ELEMENTS){

    function AJAX(){
      console.log("**** Building the AJAX Caller ****");
    }

    AJAX.prototype = {
      fetchSemanticDocument: function(url,text,title,tags) {
        var ajax = this;
        jQuery.ajax(
        {
            url: ELEMENTS.URLS.SemanticDocument,
            type: 'POST',
            dataType: 'json',
            data: { url: post_link,text:text, title:title,tags:tags},
            success: function(data, textStatus, xhr)
            {
              ajax.fetchSocialbar(data.url, data);
            },
            error: function(xhr, textStatus, errorThrown)
            {
                ELEMENTS.DOM.socialBarLoader.text(ELEMENTS.MESSAGES.failedSocialCall).css('color', '#d73532');
                console.log(xhr);
            }
        });
      },
      fetchSocialbar: function(url, data)
      {
          jQuery.ajax({
              url: ELEMENTS.URLS.socialBar,
              type: 'POST',
              dataType: 'json',
              data: { url: url, d: JSON.stringify(data) },
              success: function(data, textStatus, xhr){

                  console.log("**** Building Social bar ****");

                  require(["text!templates/social-bar.tpl"],function(template){

                    $.tmpl(template, data).appendTo(ELEMENTS.DOM.socialBarList);
                    ELEMENTS.DOM.socialBarLoader.hide();
                    ELEMENTS.DOM.sidebar.niceScroll({ cursorcolor: "#000" });

                    $(ELEMENTS.DOM.SNARCintentsLink).click(function(e){
                      e.preventDefault();
                      var url = $(this).attr("href");
                      require(["modules/popup"], function(POPUP){
                        popup = new POPUP();
                        popup.open(url);
                      });
                    });

                    $(ELEMENTS.DOM.socialBarExpandMultimedia).magnificPopup({ disableOn: 700, type: 'iframe', mainClass: 'mfp-fade', removalDelay: 160, preloader: true, fixedContentPos: false });

                  });
              },
              error: function(xhr, textStatus, errorThrown){
                  ELEMENTS.DOM.socialBarLoader.text(ELEMENTS.MESSAGES.failedSocialCall).css('color', '#d73532');
                  console.log("Error Loading the Social Bar ... ");
                  console.log(xhr);
              }
          });
      },
      fetchShareMenu : function(postURL) {
        var services = ["twitter","facebook","google","delicious","reddit","linkedin","stumbleupon","hackernews","pinterest","buffer"];
        jQuery.ajax({
          url: ELEMENTS.URLS.shareMenu,
          type: 'POST',
          dataType: 'json',
          data: {url: postURL, services:services},
          success: function(data, textStatus, xhr) {
            console.log("**** Finished the AJAX Share Menu Call ****");
            // Set up the total number of shares counter
            data.total !== 0 ? $('.total_share_counter').removeClass('animate-spin').addClass('active').text(data.total) : $('.total_share_counter').empty().removeClass('animate-spin').css('padding', 0);
            ELEMENTS.DOM.shareMenuLoader.fadeOut('slow',function(){
              ELEMENTS.DOM.shareMenu.tmpl(data.services).appendTo(ELEMENTS.DOM.sharePopup);
              $(ELEMENTS.DOM.shareLinks).click(function(e){
                e.preventDefault();
                var url = $(this).attr("href");
                require(["modules/popup"], function(POPUP){
                  popup = new POPUP();
                  popup.open(url);
                });
              });
            });
          },
          error: function(xhr, textStatus, errorThrown) {
            console.log("Error Loading the Share Counter Results ... ");
            console.log(xhr);
            ELEMENTS.DOM.shareMenuLoader.text(ELEMENTS.MESSAGES.failedShareCounterCall).css('color','#d73532');
          }
        });
      }
    };
    return( AJAX );
  }
);