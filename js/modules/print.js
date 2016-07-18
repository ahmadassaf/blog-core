define( [],
  function(  ){   

    console.log("**** Preparing page to print ****");

    var pfHeaderImgUrl = '';
    var pfHeaderTagline = '';
    var pfdisableClickToDel = 0;
    var pfHideImages = 0;
    var pfDisablePDF = 0;
    var pfDisableEmail = 0;
    var pfDisablePrint = 0;
    var pfCustomCSS = '';
    var pfBtVersion = '1';

    $.getScript("http://cdn.printfriendly.com/printfriendly.js", function(data, textStatus, jqxhr) {
       console.log('**** Script print is loaded ****');
       window.print();return false;
    });
  }
);

