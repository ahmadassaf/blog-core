require.config(
{
    baseUrl: "/blog/wp-content/themes/blog/js/",
    waitSeconds: 60,
    paths: {
        text: 'require-plugins/text',
        json: 'require-plugins/json',
        eventie: "require-plugins/eventie",
        eventEmitter: "require-plugins/eventEmitter",
        domReady: 'require-plugins/domReady'
    }
});
require(["domReady!"],

    function(domReady)
    {
    //This function will be called when all the dependencies
    //listed above are loaded. Note that this function could
    //be called before the page is loaded

    // Log that jquery was loaded into the global name-space.
    console.log("DOM Ready !");
    console.log("jQuery", $.fn.jquery, "loaded!");

    require(["modules/googleAnalytics","modules/bootstrap"], 
        function() {          
        if (typeof isPost !== "undefined" && isPost == true) require(["modules/index"]);
    })
});