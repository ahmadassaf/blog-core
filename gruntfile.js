module.exports = function(grunt) {

    var pkg = grunt.file.readJSON('package.json');

    grunt.initConfig({

        clean: ['_site/assets/js/build/'],

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
                    '_site/assets/js/build/main.js': ['assets/js/**/*.js']
                },
                options: {
                    debug: true,
                    standalone: pkg['export-symbol']
                }
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
                'mkdir:images', 'copy:images', 'bgShell:jekyllBuild', 'browserify',
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

    // Register the grunt build task
    grunt.registerTask('build', ['mkdir:images', 'copy:images', 'bgShell:jekyllBuild', 'clean', 'browserify']);

    // Register the grunt serve task
    grunt.registerTask('serve', ['concurrent:serve']);

    // Register build as the default task fallback
    grunt.registerTask('default', 'build');


};