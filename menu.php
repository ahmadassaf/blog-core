<?php 
    
global $smarty, $cache_time;

    $menu              = array();                          // The main header menu object

    if(!$smarty->isCached('menu.tpl', "menu")) {    
        if ( false === ($value = get_transient("menu:")) ) {

            $search_categories = array();                          // The search categories for filtering
            $contact_me        = array();                          // The social contact information
            $home_url          = home_url( '/' );                  // Home URL for Search Form submission

            $menu["menu"] = wp_nav_menu(array(
                'sort_column'     => 'menu_order',
                'depth'           => 1,
                'echo'            => false,
                'container_class' => 'menu-header'
            ));

            // Prepare the search categories filter
            $categories = get_categories();

            foreach ($categories as $category) { 
                $search_categories[] = array(
                    "ID"     => $category->cat_ID,
                    "parent" => $category->parent,
                    "name"   => $category->name
                );
            }

            $contact_me = array(
                "home"     => array("link" => "http://ahmadassaf.com"                              , "name" => "Homepage"),
                "quora"    => array("link" => "http://www.quora.com/Ahmad-Assaf"                   , "name" => "Quora"   ),
                "twitter"  => array("link" => "http://twitter.com/ahmadaassaf"                     , "name" => "Twitter"),
                "google"   => array("link" => "https://plus.google.com/112890166770582228940/posts", "name" => "Google+" ),
                "facebook" => array("link" => "http://www.facebook.com/simplytech/"                , "name" => "Facebook"),
                "linkedin" => array("link" => "http://www.linkedin.com/in/ahmadassaf"              , "name" => "LinkedIn"),
                "flickr"   => array("link" => "http://www.flickr.com/photos/ahmadassaf/"           , "name" => "Flickr"  ),
                "tumblr"   => array("link" => "http://ahmadassaf.tumblr.com/"                      , "name" => "Tumblr"  ),
                "github"   => array("link" => "https://github.com/ahmadassaf"                      , "name" => "Github"  ),
                "rss"      => array("link" => "http://feeds.feedburner.com/ahmadassaf"             , "name" => "RSS Feed")
            );
            
            $menu["home_url"]          = $home_url ;
            $menu["contact_me"]        = $contact_me ;
            $menu["search_categories"] = $search_categories ;

            set_transient( "menu:" , $menu, $cache_time );
        } else $menu = get_transient("menu:");
        
        $smarty->assign('menu',$menu);
    }

    $smarty->display('menu.tpl','menu');

?>