module.exports = function(grunt) {

    var pkg = grunt.file.readJSON('package.json');

    grunt.initConfig({

        clean: ['_site', 'assets/deploy/**/*'],

        mkdir: {
            images: {
                options: {
                    create: ['images/posts']
                }
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
            },
            styles:{
                files: {
                    'assets/deploy/main.css': '_site/assets/deploy.css'             
                }
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

        sass: {
            options: {
                sourceMap: true
            },
            dist: {
                files: {
                    'assets/deploy/main.css': 'assets/sass/main.scss'
                }
            }
        },

        browserify: {
            dist: {
                files: {
                    'assets/deploy/main.js': ['assets/js/src/**/*.js']
                },
                options: {
                    debug: true,
                    standalone: pkg['export-symbol']
                }
            }
        },

        minified: {
            files: {
                src: ['assets/deploy/main.js'],
                dest: 'assets/deploy/'
            },
            options : {
                sourcemap: true,
                ext: '.min.js'
            }
        },

        bgShell: {
            jekyllBuild: {
                cmd: 'jekyll build --incremental --quiet',
                done: function() {
                    console.log('Finished Building Jekyll Site');
                }
            },
            jekyllServe: {
                cmd: 'bundle exec jekyll serve --incremental --quiet'
            },
            jekyllLocal: {
                cmd: 'bundle exec jekyll serve --incremental --quiet --config _config.yml,_config.dev.yml'
            }
        },

        watch: {
            files: ['assets/js/**/*', 'assets/sass/**/*'],
            tasks: ['sass', 'copy', 'browserify']
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

    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-mkdir');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-browserify');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-concurrent');
    grunt.loadNpmTasks('grunt-bg-shell');
    grunt.loadNpmTasks('grunt-minified');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-newer');
    grunt.loadNpmTasks('grunt-sass');

    // Register the grunt build task
    grunt.registerTask('build', ['clean', 'mkdir:images', 'sass', 'copy:images', 'bgShell:jekyllBuild', 'browserify', 'minified']);

    // Register the grunt serve task
    grunt.registerTask('serve', ['build', 'minified', 'concurrent:serve']);

    // Register the grunt serve task
    grunt.registerTask('local', ['build', 'newer:imagemin', 'minified', 'concurrent:local']);

    // Register build as the default task fallback
    grunt.registerTask('default', 'build');


};