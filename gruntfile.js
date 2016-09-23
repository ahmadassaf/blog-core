module.exports = function(grunt) {

    var pkg = grunt.file.readJSON('package.json');

    grunt.initConfig({

        clean: ['assets/js/build/'],

        mkdir: {
            images: {
                options: {
                    create: ['images/posts']
                }
            },
            js: {
                options: {
                    create: ['assets/js/build']
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
            files: {
                src: ['assets/js/build/main.js'],
                dest: '_site/assets/js/build/'
            }
          },

        bgShell: {
            jekyllBuild: {
                cmd: 'jekyll build --incremental',
                done: function() {
                    console.log("Finished Building Jekyll Site");
                }
            },
            jekyllServe: {
                cmd: 'bundle exec jekyll serve --incremental'
            },
            jekyllLocal: {
                cmd: 'bundle exec jekyll serve --incremental --config _config.yml,_config.dev.yml'
            }
        },

        watch: {
            files: ['assets/js/**/*.js'],
            tasks: ['browserify']
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

    // Register the grunt build task
    grunt.registerTask('build', ['clean', 'mkdir:images', 'mkdir:js', 'copy:images', 'newer:imagemin' ,'bgShell:jekyllBuild', 'browserify', 'minified']);

    // Register the grunt serve task
    grunt.registerTask('serve', ['build', 'minified', 'concurrent:serve']);

    // Register the grunt serve task
    grunt.registerTask('local', ['build', 'minified', 'concurrent:local']);

    // Register build as the default task fallback
    grunt.registerTask('default', 'build');


};