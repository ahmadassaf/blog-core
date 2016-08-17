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

        shell: {
            jekyllBuild: {
                command: 'jekyll build'
            },
            jekyllServe: {
                command: 'jekyll serve'
            }
        },

        bgShell: {
            jekyllBuild: {
                cmd: 'jekyll build',
                done: function() {
                    console.log("Finished Building Jekyll Site");
                }
            },
            jekyllServe: {
                cmd: 'jekyll serve'
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
    grunt.loadNpmTasks('grunt-shell');
    grunt.loadNpmTasks('grunt-concurrent');
    grunt.loadNpmTasks('grunt-bg-shell');
    grunt.loadNpmTasks('grunt-minified');

    // Register the grunt build task
    grunt.registerTask('build', ['clean', 'mkdir:images', 'mkdir:js', 'copy:images', 'bgShell:jekyllBuild', 'browserify']);

    // Register the grunt serve task
    grunt.registerTask('serve', ['build', 'minified', 'concurrent:serve']);

    // Register build as the default task fallback
    grunt.registerTask('default', 'build');


};