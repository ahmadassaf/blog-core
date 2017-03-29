# Ahmad Assaf Personal Webspace

### [Homepage](http://ahmadassaf.com) | [Blog](http://ahmadassaf.com/blog)

<a href="https://travis-ci.org/ahmadassaf/blog-core" id="status-image-popup" name="status-images" class="open-popup" title="Latest push build on default branch**: passed" data-ember-action="1015">
    <img src="https://travis-ci.org/ahmadassaf/blog-core.svg" alt="build**:passed"/>
</a>
<a class="badge" href="https://david-dm.org/ahmadassaf/blog-core" data-reactid="35"><img src="https://david-dm.org/ahmadassaf/blog-core/status.svg" alt="dependencies status" data-reactid="36"></a>
<a class="badge" href="https://david-dm.org/ahmadassaf/blog-core" data-reactid="35" data-type="dev"><img src="https://david-dm.org/ahmadassaf/blog-core/dev-status.svg" alt="devDependencies status" data-reactid="36"></a>

Having had my blog on WordPress for a while now, i thought i need a lighter platform especially that my blog content is very lightweight and i don't really need a fully fledged CRM. Another reason to move away from WordPress was the need to have a collaborative effort and to write posts in Markdown. I have finally decided on [Jekyll](https**://jekyllrb.com/) for its simplicity and extensibility.

Jekyll takes your content written in Markdown, passes it through your templates and spits it out as a complete static website, ready to be served.

Jekyll uses the Liquid templating language to process templates. There are two important things to know about using Liquid.
First, a YAML front-matter block is at the beginning of every content file. It specifies the layout of the page and other variables, like title, date and tags. It may include custom page variables that you’ve created, too.
Liquid template tags are used to execute loops and conditional statements and to output content.

[![screenshot](https://dl.dropboxusercontent.com/u/5258344/Blog/blog.png)](http://ahmadassaf.com)

> For more details you can check out [my blog post](ahmadassaf.com/posts/power-up-a-hero-blog-with-jekyll/)

## Setting up the environment

Jekyll is a command-line executable built with Ruby and has a few commands we need to run from time to time. Ruby comes installed by default on various operating systems, the latest stable version is 2.3.1, but anything above 2.2 should be fine. If you need to upgrade, we recommend using something like rbenv to make it easy.

You can then install Jekyll easily by executing:

```bash
gem install jekyll -v 3.1.6
```

Now, creating a new Jekyll site is as easy as:

```bash
jekyll new awesome-blog
```

The `new` command here will create an install of Jekyll with the default theme.

Jekyll comes with a built-in development server. `jekyll serve` command start this server on your machine and starts watching your files for changes similar to Grunt or Gulp.

For more detailed instructions about setting about Jekyll sites, i recommend reading:

 - [Getting Started with Jekyll ](https://scotch.io/tutorials/getting-started-with-jekyll-plus-a-free-bootstrap-3-starter-theme)
 - [Make a Static Website with Jekyll](https://www.taniarascia.com/make-a-static-website-with-jekyll/)
 - [Building a Jekyll Site: Converting a Static Website To Jekyll](https://css-tricks.com/building-a-jekyll-site-part-1-of-3/)
 - [Build A Blog With Jekyll And GitHub Pages](https://www.smashingmagazine.com/2014/08/build-blog-jekyll-github-pages/)
 - [jekyll-now - Build a Jekyll blog in minutes, without touching the command line](https://github.com/barryclark/jekyll-now)

## Directory Structure

Jekyll is, at its core, a text transformation engine. The concept behind the system is this: you give it text written in your favorite markup language, be that Markdown, Textile, or just plain HTML, and it churns that through a layout or a series of layout files.

> You can refer to Jekyll docs [documentation](https://jekyllrb.com/docs/structure/) for more detailed descriptions about the files and folders structure

 - **_data**: In addition to the built-in variables in the main config, you can specify your own custom data that can be accessed from here
 - **_includes**: Snippets of code that can be used throughout your templates
 - **_layouts**: The main layouts defined for various pages and posts
 - **_pages**: Any special pages that are not of type posts
 - **_drafts**: This folder actually isn’t there if your using the default theme. You can create this empty folder now, but this is just where you will store unpublished posts
 - **_plugins**: Any defined ruby plugins if you have any
 - **_posts**: The main folder than contains the markdown posts
 - **_script**: Contains any additional scripts you would like to run and define in your config file
 - **assets**: The main container for .js,scss,css,etc. files. Also contains any font file definitions
 - **images**: The main images folder
 - **index.md**: The main landing page/homepage
 - **posts**: This is an extra page defined with a permalink and will act as my paginated archive

```
├── _data # Custom data files
├── _includes # Snippets of code that can be used throughout your templates
├── _layouts # The main layouts defined for various pages and posts
├── _pages # Any special pages that are not of type posts
├── _plugins # Any defined ruby plugins if you have any
├── _posts # The main folder than contains the markdown posts
├── _script # Contains any additional scripts you would like to run and define in your config file
├── assets # The main container for .js,scss,css,etc. files. Also contains any font file definitions
│   ├── _sass
│   ├── css
│   ├── fonts
│   └── js
├── images
├── posts # This is an extra page defined with a permalink and will act as my paginated archive
└── _site # This is the destination of Jekyll build process | The static website
```

## Files you need to know about !

 - **_config.dev.yml**: Jekyll configuration overrides for local dev environment
 - **_config.yml**: The default jekyll configuration file
 - **posts.json**: JSON file containing data
 - **gruntfile.js**: The main build file using Grunt.js

## Configuration

`_config.yml` is [Jekyll’s configuration file](https://jekyllrb.com/docs/configuration/), containing all of the settings for your Jekyll website. The great thing about _config.yml is that you can also specify all of your own variables here to be pulled in via template files across the website. Some notable configurations are:

 - **url**: This is the main address of the blog/website which is also accessed by the `{{site.url}}` liquid variable
 - **github-repo**: This points to the Github repository where the posts are being saved. This is used in the post header to create the "contribute to this post" link.
 - **background.default-post**: This is the default image used in the generation of the post preview if there was no image post defined.
 - **permalink**: This defines the structure of the URL for the posts
 - **sass**: Defines the location of the preprocessing files
 - **google-analytics**: This is the Google Analytics tracking information that will be picked up by the `_includes/scripts.html` to inject the Google Analytics script.
 - **featured**: This is an initialization of an empty array that will be used to save featured articles
 - **disquss.shortname**: This is Disquss website shortname which is used to inject `_includes/partials/post/comments.html`

### Supported YAML Frontmatter fields

| Option | Description | Default |
| :----- | :---------- | :------ |
| `layout` | The layout template to render the post | `post` |
| `title` | The title of the post | |
| `subtitle` | The subtitle of the post | |
| `excerpt` | A brief description of the post. This description *may* be used by search engines, and *will* be used when the post is shared on Facebook and Twitter. | `site.description`
| `image` | The hero image | `site.default-post-image` |
| `category` | The category group the post belongs to |  |
| `tags` | The list of tags to attach to the post |  |
| `comments` | If `false`, there won't be a Disqus comment field on the post | `true` |
| `featured` | If `true`, the post will be rendered in the featured list | `false` |
| `hn` | If a HN link is specified, there will be a link leading to the HN discussion at the bottom of the post |  |

## Posts & Pages

There are two main types of web pages that i am using; the default `post` type which goes to the `_posts` and converts any `.md` file into an html page and a `page` which is rendered based on the templates defined in `/_pages`.

What is notable about a **page** is the ability to define a `permalink` in the front matter e.g., `permalink: /tags.html`. This means that this is the page that will be access from `{{site.url}}/tags`. Jekyll will then look at the `layout` defined in the front matter and render the correct file from `_layouts`.

## Collaborating on Posts

Since one of the reasons i moved to Jekyll and markdown-based blog is to enable people to contribute to my posts. To do so, i host the posts into a [separate Github repository](https://github.com/ahmadassaf/blog) and include that as a separate git submodule by configuring the `.gitmodules` as follows:

```
[submodule "_posts"]
    path = _posts
    url = https://github.com/ahmadassaf/blog.git
```

## Featured Posts

In the homepage i want always to show a set of most recent N featured posts. To do that, i have added a `featured` property in the front matter that will indicate if this post that i want is featured or not.

## Pagination

For pagination i have used the [jekyll-paginate](https://github.com/jekyll/jekyll-paginate) gem which should be included in the `_config.yml` as:

```yml
paginate: 7
paginate_path: "posts/page/:num"
```

The `paginate_path` is the important property that we need to take care about. It specifies the page that we want to enable pagination on. The plugin does not support pagination on `tag` and `category` pages, so as a workaround i have a new `/posts` route that will contain all the posts and enable pagination on them. To do so, i have created a new directory called `posts` in the root folder with an `index.html` page. This will be picked up by Jekyll and result in a `/posts` page. The page contains normal Liquid templates as follows:

```html
{% raw %}<div class="archive-container">
    <ul class="archive">
    {% for post in paginator.posts %}
        {% include partials/post.html %}
    {% endfor %}
    {% include partials/archive/pagination.html %}
    </ul>
</div>{% endraw %}
```

You notice that the pagination is enabled by including the partial `_includes/partials/archive/pagination`.

## Categories and Tag Pages

In a fashion similar to Wordpress i wanted to have pages for my categories and tags, to do so i have used [jekyll-archives](https://github.com/jekyll/jekyll-archives) gem. The plugin is enabled in the `config.yml` by:

```yml
jekyll-archives:
  enabled:
    - categories
    - tags
  layouts:
    category: archive
    tag: archive
  permalinks:
    tag: '/:name/'
    category: '/:name/'
```

This is straightforward as i just specify that i want to enable them on both category and tag pages and specify the layout that will render those pages. The permalink specifies the url of the page, i have set that up to be the name of the category or the tag.

> The layout specified has to be in the `/_includes` directory.

Another special page i created is a tags archive page. This is done by creating a page in `/_pages` and a `tags-archive` template. The main code to bring all the blog tags and their posts is:

```html
{% raw %}{% capture site_tags %}{% for tag in site.tags %}{{ tag | first }}{% unless forloop.last %},{% endunless %}{% endfor %}{% endcapture %}
{% assign tags = site_tags | split:',' | sort %}

{% for item in (0..site.tags.size) %}{% unless forloop.last %}
{% capture tag %}{{ tags[item] | strip_newlines }}{% endcapture %}
   <h2 id="{{ tag }}" class="tag-heading">{{ tag }}</h2>
   <ul class="archive">
    {% for post in site.tags[tag] %}{% if post.title != null %}
        {% include partials/post.html %}
    {% endif %}{% endfor %}
  </ul>
{% endunless %}{% endfor %}{% endraw %}
```

## Data Files

As explained in the directory structure, the `_data` folder is where you can store additional data for Jekyll to use when generating your site. These files must be YAML, JSON, or CSV files (using either the `.yml`, `.yaml`, `.json` or `.csv` extension), and they will be accessible via `site.data`.

## Extra Features

There are various features powered by a set of JavaScript plugins and functions. These are mainly:

 - Responsive videos using [FitVids](http://fitvidsjs.com/)
 - Image Gallery using [Magnific Popup](http://dimsemenov.com/plugins/magnific-popup/)
 - Embedding Github Gists using `gist {{gist-id}} {{gist-name}}`
 - Embedding Tweets by simply pasting the url of a tweet e.g., `https://twitter.com/SpatialRed/status/778274886561193984` into the post. The url will be picked up by [jekyll-lazy-tweet-embedding](https://github.com/takuti/jekyll-lazy-tweet-embedding) plugin and rendered properly
 - Embedding YouTube videos with `youtube {youtube-video-id}` where you pass the **id** of the YouTube video using [this gist](https://gist.github.com/joelverhagen/1805814)
 - Embedding Vimeo videos with `vimeo {vimeo-video-id}` where you pass the **id** of the Vimeo video using [jekyll-vimeo-plugin](https://github.com/gummesson/jekyll-vimeo-plugin)
 - Open Graph, Twitter and Schema.or annotation enabled
 - Image compression using [grunt-contrib-imagemin](https://github.com/gruntjs/grunt-contrib-imagemin)

## Dynamic Navigation Menu

I wanted to have a navigation menu that is dynamic and shows automatically all the categories i have configured in the posts front matter. To do that, i use the following:

```html
{% raw %}{% capture site_categories %}{% for category in site.categories %}{{ category | first }}{% unless forloop.last %},{% endunless %}{% endfor %}{% endcapture %}
{% assign categories = site_categories | split:',' | uniq %}

{% for item in (0..categories.size) %}{% unless forloop.last %}

{% capture category %}{{ categories[item] | strip_newlines }}{% endcapture %}
   <li {% if page.title == category or page.category == category %} class="current" {% endif %}><a href="{{ site.url }}/{{ category | downcase | replace:' ', '-'}}">{{ category }}</a></li>
{% endunless %}{% endfor %}{% endraw %}
```

> As you see that i transfer the name of the category to lower case and replace any space with `-` to match the permalink generated by Jekyll.

## Image Gallery

To utilize the image gallery we need to provide a simple markup

```html
{% raw %}{% capture images %}
    /images/posts/quora-better-notification.png
{% endcapture %}
{% include partials/post/gallery.html images=images caption="Quora Better Notifications (QBN) Chrome Extension" cols=1 %}{% endraw %}
```

note that the directory we referring to is `/images/posts`. This is the directory that we will copy all the posts images to using our grunt build script. Also you can pass multiple images in between the `capture`

There are also few CSS classes to display images side-by-side like:

```
<figure class="half">
    <a href="http://placehold.it/1200x600.JPG"><img src="http://placehold.it/600x300.jpg"></a>
    <a href="http://placehold.it/1200x600.jpeg"><img src="http://placehold.it/600x300.jpg"></a>
    <figcaption>Two images.</figcaption>
</figure>
<figure class="third">
.....
</figure>
```

In addition, there are various CSS classes for image alignment. They are:

```markdown
# The image blow happens to be **centered**.
![image-center](http://lorempixel.com/580/300){: .align-center}

# The image blow happens to be **left aligned**.
![image-left](http://lorempixel.com/150/150){: .align-left}

# The image blow happens to be **right aligned**.
![image-right](http://lorempixel.com/300/200){: .align-right}
```

## HTML Tags and Formatting

 - **Subscript Tag**: Getting our science styling on with `H<sub>2</sub>O`, which should push the "2" down.
 - **Superscript Tag**: Still sticking with science and Isaac Newton's `E = MC<sup>2</sup>`, which should lift the 2 up.
 - **Keyboard Tag**: This scarcely known tag emulates `<kbd>keyboard text</kbd>`, which is usually styled like the `<code>` tag.
 - **Abbreviation Tag**: Doing `*[CSS]: Cascading Style Sheets` will result in: The abbreviation CSS stands for "Cascading Style Sheets".
 - **Notices**: You can also add notices by appending `{: .notice}` to a paragraph.

 There are also a variety of button styles that can be used as follows:

```markdown
[Primary Button Text](#link){: .btn}
[Success Button Text](#link){: .btn .btn_success}
[Warning Button Text](#link){: .btn .btn_warning}
[Danger Button Text](#link){: .btn .btn_danger}
[Info Button Text](#link){: .btn .btn_info}
```

A notice displays information that explains nearby content. Often used to call attention to a particular detail.

When using Kramdown `{: .notice}` can be added after a sentence to assign the `.notice` to the `<p></p>` element. There are the following notices types:

```markdown
{: .notice}
{: .notice_info}
{: .notice_warning}
{: .notice_danger}
{: .notice_success}
```

## Code Formatting

I use rouge syntax highlighter that comes with Jekyll. Rouge can be installed if not already via `gem install rouge` then enabled in `configs.yml` with `highlighter: rouge`. I am using a custom theme that is defined in `/assets/_sass/_syntax.scss`. For various themes and presets you can check:

 - [Obsidian theme for rouge syntax highlighter](http://vgaidarji.github.io/blog/2016/02/27/obsidian-theme-for-rouge-syntax-highlighter/)
 - [Darkly Pygments CSS Theme](http://sourcey.com/darkly-pygments-css-theme/)
 - [jekyll-pygments-themes](https://github.com/jwarby/jekyll-pygments-themes)

 For any of the later, you can simply copy and replace the code in `/assets/_sass/_syntax.scss` and you should be good to go.

## Enabling Search

One thing i wanted to add is the ability to perform full text search on the posts. To do so, i first wanted to be able to grab the posts data and have them saved. I managed to o that by creating the `/posts.json`:

```html
{% raw %}
[
  {% for post in site.posts %}
  {
        "{{ forloop.index }}" : {
          "id"       : "{{ forloop.index }}",
          "title"    : "{{ post.title | escape }}",
          "category" : "{{ post.categories | join: ' ' }}",
          "content"  : "{{post.content | strip_html | strip_newlines | remove:  "   " | escape | remove: "\"}}",
          "url"      : "{{ site.baseurl }}{{ post.url }}",
          "date"     : "{{ post.date }}"
        }
  }
  {% unless forloop.last %},{% endunless %}
  {% endfor %}
]
{% endraw %}
```

Now by requesting `{{site.url}}/posts.json` i am able to have a JSON file that contains the post id, title, category, url, published data and most importantly the content.
Enabling full text search is done with [elasticlunr](https://github.com/weixsong/elasticlunr.js/) by iterating the `posts.json` and building our index

```javascript
// This will include the posts.json built in the _site by jekyll
var posts   = require('../../../_site/posts.json');
// We would like now to fetch the posts JSON data into lunr.js and build the index
var index = el(function () {
    this.addField('title', { boost: 10 });
    this.addField('content', { boost: 5 });
    this.addField('category');
});

_.each(posts, function(post){
    index.addDoc(_.values(post)[0]);
});
```

## Putting it all together

To wrap up all these features together i have created a little build script using `Grunt.js`. The notable build actions are:

 - Cleaning up working directories (the images folder and the built JavaScript destination)
 - Create the images directory that we will copy the posts images into as well as the JavaScript build destination directory
 - Copy the images from the posts directory into the main images folder

 Now, i would like to easily be able deploy my application on my live server as well as being able to run and test it in my local machine. The main thing to note here is that we need to have the `url` pointing to two different URIs on each machine. To do this dynamically, i created a new `_config.dev.yml` file that will overwrite only the `url` setting to run on `localhost:4000` and kept the url in my main `_config.yml` to my live server address.

 Now, after doing that to serve the site locally i pass in the `--config` flag with the two config files, with the overriding config last as: `bundle exec jekyll serve --incremental --config _config.yml,_config.dev.yml`

 > note that the `--incremental` is a defualt optional flag to optimize the build and serve process by rebuilding changed files only and not the whole site

## Using Jekyll, Grunt and Browserify

I use [Browserify](http://browserify.org/) in my `main.js` to easily bundle up all of my front-end dependencies. Now, if i am serving my site and want to test my JavaScript changes, it is painful to build everytime the site for that. The jekyll watch feature will not run browserify for me, so instead i use the [grunt-concurrent](https://github.com/sindresorhus/grunt-concurrent) with a `watch` task defined to monitor and fire a browserify build whenever a change is detected and a background shell process using [grunt-bg-shell](https://github.com/rma4ok/grunt-bg-shell) to serve. The all come together like:

```javascript
clean: ['assets/js/build/'],

mkdir: {
    images: {
        options: { create: ['images/posts'] }},
    js: {
        options: { create: ['assets/js/build'] }
    }
},

copy: {
    images: {
        files: [{
            expand: true,
            cwd: '_posts/images',
            src: ['**'],
            dest: 'images/posts/'
        }]
    }
},

imagemin: {
    dynamic: {
      files: [{
        expand: true,
        cwd: 'images/posts/',
        src: ['**/*.{png,jpg,gif}'],
        dest: 'images/posts/'
      }]
    }
  },

browserify: {
    dist: {
        files: {
            'assets/js/build/main.js': ['assets/js/src/**/*.js']
        },
        options: {
            debug: true,
            standalone: pkg['export-symbol']
        }
    }
},

minified: {
    files: { src: ['assets/js/build/main.js'], dest: '_site/assets/js/build/' }
  },

bgShell: {
    jekyllBuild: {
        cmd: 'jekyll build --incremental',
        done: function() {
            console.log("Finished Building Jekyll Site");
        }
    },
    jekyllServe: { cmd: 'bundle exec jekyll serve --incremental' },
    jekyllLocal: { cmd: 'bundle exec jekyll serve --incremental --config _config.yml,_config.dev.yml' }
},

watch: {
    files: ['assets/js/**/*.js'],
    tasks: ['copy', 'browserify']
},

concurrent: {
    serve: [
        'watch',
        'bgShell:jekyllServe'
    ],
    local: [
        'watch',
        'bgShell:jekyllLocal'
    ],
    options: {
        logConcurrentOutput: true
    }
}
});

```

In the end, i have three main grunt tasks:


```javascript
// Register the grunt build task
grunt.registerTask('build', ['clean', 'mkdir:images', 'mkdir:js', 'copy:images', 'bgShell:jekyllBuild', 'browserify', 'minified']);

// Register the grunt serve task
grunt.registerTask('serve', ['build', 'minified', 'concurrent:serve']);

// Register the grunt serve task locally
grunt.registerTask('local', ['build', 'newer:imagemin', 'minified', 'concurrent:local']);

// Register build as the default task fallback
grunt.registerTask('default', 'build');
```

# Continuous Deployment with Travis CI

## Failed experiments

I have my Jekyll instance running on a Digital Ocean Droplet, to configure one, you can easily follow [their great tutorial](https://www.digitalocean.com/community/tutorials/how-to-get-started-with-jekyll-on-an-ubuntu-vps).

Jekyll website has nice [articles on continuous integration](http://jekyllrb.com/docs/continuous-integration/) and [Deployment](https://jekyllrb.com/docs/deployment-methods/). In a nutshell, serving Jekyll can be done in two ways:

 - It is a static website, so just have a web server like Apache running and point that to the `_site`
 - Run the `jekyll serve` process on your server and proxy your web server e.g., Apache to point to your `http://0.0.0.0:4000`

> Setting 0.0.0.0 as an address to serve from is a way of saying to match all network interfaces on the machine. So if your local IP was 192.168.0.1 it would serve on both 127.0.0.1 and 192.168.0.1, computers on your local network would have access to your jekyll site. By doing `jekyll serve -H 0.0.0.0` you make sure the website is accessible externally properly.

To enable those two scenarios, i used [Codeship's](http://codeship.com) deployment pipeline that will make sure to pull the latest changes on the website and its submodules whenever a push is triggered on Github. I did that by having this line:

```shell
ssh -p $SSH-PORT-NUMBER root@SERVER-ADDRESS 'cd /www/blog; git pull origin master; git submodule foreach git pull origin master'
```

Where as you substitute the location of your github repo in the server to point correctly, e.g., `/www/blog`.

Now, after that you can have a git `post-receive` or `post-merge` hook that will run the appropriate grunt task e.g., `grunt serve` or if you running using [tmux](https://tmux.github.io/) for example and a jekyll serve process is already running, then it will pick up the change automatically and your changes will be reflected automatically.

Both files must have the correct permission and are executable:

```bash
#!/bin/bash
echo "Running Git Post Merge Hooks"
cd /var/www/blog && grunt build
```

The only thing i'd like to note if you are using the `jekyll serve` approach is that you will need to tell your webserver to proxy requests to jekyll's instance. To do that, you will need to edit `/etc/apache2/sites-available/000-default.conf` file as follows:

```shell
<VirtualHost *:*>
    ProxyPreserveHost On
    # The ServerName directive sets the request scheme, hostname and port that
    # the server uses to identify itself. This is used when creating
    # redirection URLs. In the context of virtual hosts, the ServerName
    # specifies what hostname must appear in the request's Host: header to
    # match this virtual host. For the default virtual host (this file) this
    # value is not decisive as it is used as a last resort host regardless.
    # However, you must set it for any further virtual host explicitly.
    #ServerName www.example.com

    ServerAdmin webmaster@localhost
    DocumentRoot /www/blog

    # Available loglevels: trace8, ..., trace1, debug, info, notice, warn,
    # error, crit, alert, emerg.
    # It is also possible to configure the loglevel for particular
    # modules, e.g.
    #LogLevel info ssl:warn

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined

    ProxyPass / http://0.0.0.0:4000/
    ProxyPassReverse / http://0.0.0.0:4000/

    ServerName localhost
    # For most configuration files from conf-available/, which are
    # enabled or disabled at a global level, it is possible to
    # include a line for only one particular virtual host. For example the
    # following line enables the CGI configuration for this host only
    # after it has been globally disabled with "a2disconf".
    #Include conf-available/serve-cgi-bin.conf
</VirtualHost>
```

For various reason that i am still not sure what, this process failed to me as the website was not updating as i was pushing changes. For example, when i push to Github, the build triggers and the build is successful and is able to pull the latest for the main repo and the submodule but the git hooks seem to never be fired. However, I have tried to pull manually from the repo and indeed the hooks were triggered then.

What i tried as well was creating a new script called `deploy.sh` which will be called as well as part of the codeship custom script so that the script is:

```bash
ssh -root@SERVER 'cd /var/www/blog; npm install; git pull origin master; git submodule foreach git pull origin master; bash /var/www/blog/deploy.sh'
```

And the `deploy.sh` has the correct permissions and is:

```bash
#!/usr/bin/bash

grunt build && echo "blog deployed via hook on: `git log -1`" >> deployment.txt
```
Where the file `deployment.txt` will contain a log of the latest commit messages that were deployed. Again, this method failed as well.

I have tried to add a remote in my web server called `production` so that i can push directly to my server with git push production master .. the data is pushed indeed but i still dont get the hooks to be run at all.

As a result of my failed attempts, i had to try another approach and i decided to go and try [TravisCI](travis-ci.org).

# Going the Travis way

{% capture images %}
    /images/posts/CD.jpg
{% endcapture %}
{% include partials/post/gallery.html images=images caption="Continuous Deployment & Integration with Travis CI" cols=1 %}

> Image Reference: [Website Continuous Integration with Travis CI, Jekyll, gulp, and GitHub](https://cesiumjs.org/2016/02/03/Cesium-Website-Continuous-Integration/)

The first step to achieving this new workflow was to have rigorous rules set up on the server. No more deployments as root, from now on we’re doing things correctly.

## Setting up the server

### Create a new user with restricted access

We need to create a new user with limited permissions: the user will be only allowed to operate in the destination where you have blog in the server e.g., `/var/www/blog`. This new user will also be used by Travis CI to log in, and we’ll give it ownership of our live directory.

```bash
$ adduser travis
$ chown -R travis:travis /var/www/blog
```

### Set up public key authentication

For Travis CI to log in to the server, we’ll set up public key authentication. To do this, on your **local machine**, you should run:

```bash
ssh-keygen
```

Which should output something like this:

```bash
Generating public/private rsa key pair.
Enter file in which to save the key (/Users/USNER_NAME/.ssh/id_rsa): deploy-key
```
It will also ask for a passphrase; leave that blank. This process should leave you with two files in your `.ssh` folder: `deploy-key`, which is your private key (this is like a password, so protect it at all times!) and `deploy-key.pub`, your public key.

Now your server needs to know your public key for the correct user so that you can log in using your private key. SSH to your **live server** and:

$ su - travis

Then, we’ll create a `.ssh` directory in the home directory, and an `authorized_keys` file inside of it:

```bash
$ mkdir .ssh
$ chmod 700 .ssh
$ vi .ssh/authorized_keys
```

At this point, you can paste in the contents of your `deploy-key.pub` file. Now, we’ll just restrict the permissions to the `authorized_keys` file:

```bash
$ chmod 600 .ssh/authorized_keys
```

### Create a remote

We want now to be able to push to our server the same how we push to Github. Now, to understand how we will structure our folders, we need to remember how Jekyll compiles and generates our site. Basically, Jekyll will build based on your template and configurations the final "static" version of the website and have that in the `_site` folder. This means that what you should be serving is only that folder and we really don't care about all the other stuff.

I have created a separate hidden folder called `.build` which will contain all the site to build. I then create a subfolder for each remote repository. For example, for my blog i have created an empty Git repo in it `mkdir /var/www/.build/blog` and then initialize the git repo there with `cd /var/www/.build/blog && git init --bare`.

We need to make sure that we have correct access permissions and ownership for our repositories.

```bash
chown -R travis /var/www/.build/
```
Now we need to add a `post-receive` hook, which is a list of commands to run once the remote has received a push:

```bash
$ cd hooks
$ vi post-receive
```

Now, i need to tell Git where to find my main `_site` or the content that will be served live. For me, i have set up my server to serve my content from `var/www/blog`. So, in my git hook i have:

```bash
#!/bin/sh
git --work-tree=/var/www/blog --git-dir=/var/www/.build/blog checkout -f
```

The post-receive hook will just need to be executable, so that it actually can do its job:

```bash
$ chmod +x post-receive
```

## Setting up Travis CI

Everything now is ready for Travis to start doing its magic. However, we have a slight problem of granting Travis access to the private key. If our Github repo is private this can be a solution although this is definitely not a recommended approach.

It turns out that Travis has a [command-line utility to encrypt files](https://docs.travis-ci.com/user/encryption-keys/). Using this, it’s safe to upload the key publicly to GitHub, and Travis CI can still use it. You’ll need to log in first though, because it will have to add two private environment variables to your Travis account, so that it can decrypt the encrypted private key later on (yeah, we’re getting into some pretty heavy crypto setups now, but it’s the best we can do).

Travis executes commands based on instructions defined in `.travis.yml` file. We need to create such a file in your repository:

```bash
touch .travis.yml
```

You’ll need to copy your private key file (deploy-key) to your local repository. Then, we’ll install the Travis command line utility, log in, and encrypt the file:

```bash
gem install travis
travis login
travis encrypt-file deploy-key --add
```

The last command will create an encrypted copy of your deployment key, `deploy-key.enc`. It will also add a few lines to your `.travis.yml`

```yaml
before_install:
  - openssl aes-256-cbc -K $encrypted_22009518e18d_key -iv $encrypted_22009518e18d_iv -in deploy-key.enc -out deploy-key -d
```

> You should immediately remove the unencrypted private key from your repo, so that you don’t risk uploading it to GitHub. There are bots out there that do nothing but analyze GitHub commits to find login information, and they will compromise your server in a matter of seconds if you accidentally disclose the key.


### Instructing Travis with `.travis.yml`

All we need to do now is to tell Travis how to build, test and deploy the site. For that purpose, we have the `.travis.yml`, which acts as a list of instructions for Travis.

Right now, my .travis.yml file looks like this:

```yaml
language: ruby
cache:
  bundler: true
  directories:
  - node_modules
rvm:
- 2.2
env:
  global:
  - NOKOGIRI_USE_SYSTEM_LIBRARIES=true
addons:
  ssh_known_hosts:
  - <SERVER_IP_ADDRESS>
  - <SERVER_IP_ADDRESS>:<SERVER_PORT_NUMBER>
sudo: false
before_install:
- bundle install
- nvm install 4.2.2
- nvm use 4.2.2
- npm install grunt-cli -g
- npm install
- bash _scripts/install.sh
before_script:
- echo -e "Host <SERVER_IP_ADDRESS>\n\tStrictHostKeyChecking no\n" >> ~/.ssh/config
- echo -e "Host <SERVER_IP_ADDRESS>:<SERVER_PORT_NUMBER>\n\tStrictHostKeyChecking no\n" >> ~/.ssh/config
script:
- bash _scripts/build.sh
- bash _scripts/test.sh
after_success:
- bash _scripts/deploy.sh
notifications:
  slack: <SLACK_CHANNEL>:<TOKEN>
```

> Note that i have masked various things like server address and slack token for security reasons. The variables `<SERVER_IP_ADDRESS>`, `<SERVER_PORT_NUMBER>`, `<SLACK_CHANNEL>` and `<TOKEN>` have to be filled with your specific details

There are [various configurations that we can set up to customize the build](https://docs.travis-ci.com/user/customizing-the-build). Our configuration file defines Ruby as the main language, and version 2.2 as the version that should be installed on Travis with `rvm`.

We define as well what files and folders to cache. This is of great important as it speeds up our build significantly. [Caches](https://docs.travis-ci.com/user/caching) lets Travis CI store directories between builds, which is useful for storing dependencies that take longer to compile or download. For us, we cache the dependencies for Jekyll with `bundler` and all of our `node_modules` as well.

We also add our server IP address as well as our SSH IP address (i did this as i have a different SSH port number that the default one) as known hosts so that I don’t get a warning when I try to connect to it.

I reference a few bash scripts to run at various stages of the build process. These scripts have been placed in the `_scripts` directory, which won’t be built by Jekyll since its name starts with an underscore.

#### `before_install`

Before starting any of the process we need to make sure that we have set up our environment by installing `nvm`, `Node.js` and all of our global `npm` modules and `gem` files. Necessary files and folders will be brought up from the cache when needed. Afterwards, we execute the `install.sh` file which contains:

```bash
#!/bin/bash
set -x # Show the output of the following commands (useful for debugging)

# Import the SSH deployment key
openssl aes-256-cbc -K $encrypted_7bbee2d42c21_key -iv $encrypted_7bbee2d42c21_iv -in deploy-key.enc -out deploy-key -d
rm deploy-key.enc # Don't need it anymore
chmod 600 deploy-key
mv deploy-key ~/.ssh/id_rsa
```
The `openssl` command decrypts the encrypted private key.  I’ve actually just copy-pasted what travis encrypt-file added to `.travis.yml` earlier on.

Also, note that I’m moving the key to the `.ssh` directory under the name `id_rsa`. This is the default name for the key Git will look for when pushing to the server. It makes our lives a bit easier to place it there, under that name, since we won’t need to specify what key should be used later on.

#### before_script

A common problem i hit when trying to connect with SSH to my server was having SSH read properly from the `known_hosts` whenever i try to connect. However, there seemed to be a problem that i could not wrap my head around until i came across [this article](http://bencane.com/2013/07/22/ssh-disable-host-checking-for-scripts-automation/). As a result, i disable `StrictHostKeyChecking` to enable Travis to log in properly with these two commands.

#### build

The build is straightforward for me as i have everything configured in Grunt. My `build.sh` file looks like:

```bash
#!/bin/bash
set -x
# Build the site with Jekyll
grunt build
```

#### test

Testing is done with [HTML-Proofer](https://github.com/gjtorikian/html-proofer). Since it is in my Gemfile, Travis automatically installs it for us. My test file is configured as:

```bash
#!/bin/bash
set -x

bundle exec htmlproofer _site --url-ignore "/ahmadassaf.com|github.com/" --only-4xx --http-status-ignore "403" --check-html --check-favicon
```

In this one command, I’m validating HTML, checking that no external link returns a 400-error (ignoring any redirects as they are fine), and that the favicon is present and referenced on every page. I ignore my blog address url and Github's with `_site --url-ignore "/ahmadassaf.com|github.com/"` as whenever you’re adding a new post, it’ll return an error because the post isn’t online yet (i do that also for Github as i link as well the posts to my Github repository).

#### deploy

At this point, we want to deploy what we’ve just built. That’s why we’re going to push from a new repo in our `_site` folder.

```bash
#!/bin/bash
set -x

# Initialize a new git repo in _site, and push it to our server.
cd _site
git init

git remote add deploy "ssh://travis@<IP_ADDRESS>:<PORT_NUMBER>/var/www/.build/blog"
git config user.name "Travis CI"
git config user.email "ahmad.a.assaf+travisCI@gmail.com"

git add .
git commit -m "Deploy"
git push --force deploy master
```

We’re adding our remote with the deployment username that we have configured earlier, on the path where our `.git` directory is. We commit everything and push it using the `--force`. This is necessary, since this new repo isn’t strictly linked to our remote; it doesn’t have the same history or anything. This argument just tells Git to ignore that fact.

Feel free to ask or check out my [GitHub repo](https://github.com/ahmadassaf/blog-core) to check how everything is set up in action !

## Relevant References:

 - [Website Continuous Integration with Travis CI, Jekyll, gulp, and GitHub](https://cesiumjs.org/2016/02/03/Cesium-Website-Continuous-Integration/)
 - [Travis CI deployments to DigitalOcean](https://kjaer.io/travis/)
 - [Setting Up a Continuous Delivery Blog](http://blog.grubernaut.com/vps-migration/)
 - [How To Set Up Apache Virtual Hosts on Ubuntu](https://www.digitalocean.com/community/tutorials/how-to-set-up-apache-virtual-hosts-on-ubuntu-14-04-lts)
