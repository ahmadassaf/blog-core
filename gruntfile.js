module.exports = function(grunt) {

    var pkg = grunt.file.readJSON('package.json');

    grunt.initConfig({

        clean: ['_site', 'assets/deploy/**/*'],

        mkdir: {
            deployment: {
                options: {
                    create: ['images/posts', 'assets/deploy']
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
                    'assets/deploy/main.js': 'assets/js/src/main.js'
                },
                options: {
                    debug: true,
                    transform: [
                        'stringify', 
                        ['babelify', { 'presets': ['es2015', 'es2016', 'react'] }]
                    ],
                    standalone: pkg['export-symbol']
                  }
            }
        },

        uglify: {
            options: {
                mangle: false,
                sourceMap: {
                    root: '.'
                },
                compress: {
                    drop_console: true
                }
            },
            min: {
              files: {
                '_site/assets/deploy/main.min.js' : ['assets/deploy/main.js']
              }
            }
        },
        
        validation: {
            options: {
                stoponerror: false,
                generateReport: false
            },
            files: {
                src: ['_site/**/*.html']
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
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-mkdir');
    grunt.loadNpmTasks('grunt-browserify');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-concurrent');
    grunt.loadNpmTasks('grunt-bg-shell');
    grunt.loadNpmTasks('grunt-newer');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-w3c-html-validation');

    // Register the grunt build task
    grunt.registerTask('build', ['clean', 'mkdir:deployment', 'sass', 'copy:images', 'bgShell:jekyllBuild', 'browserify', 'uglify']);

    // Register the grunt serve task
    grunt.registerTask('serve', ['build', 'uglify', 'concurrent:serve']);

    // Register the grunt serve task
    grunt.registerTask('local', ['build', 'newer:imagemin', 'uglify', 'concurrent:local']);

    // Register build as the default task fallback
    grunt.registerTask('default', 'build');

    grunt.registerTask('validate', ['validation']);

};