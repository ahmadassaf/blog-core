define(["modules/ajax", "modules/elements", "modules/popupOpener"],
  function( AJAX , ELEMENTS, POPUP_OPENER){

    function SHARE(post_link) {

      console.log("**** Building The Share Counter Button and Menu ****");

      var ajaxLoader = new AJAX();
      this.popup = new POPUP_OPENER({
          activator       : ELEMENTS.DOM.shareMenuHandler,
          element_to_show : ELEMENTS.DOM.sharePopup,
          timeout         : 300
      });
      ajaxLoader.fetchShareMenu(post_link);
      this.build();
    }

    SHARE.prototype = {
      build: function() {
        this.popup.attach();
      }
    };
    return (SHARE);
  }
);
