module.exports = function(grunt) {

  var pkg         = grunt.file.readJSON('package.json');

  grunt.initConfig({

    clean: ['assets/js/build', '_site', 'assets/js/prod'],

    mkdir: {
      images: { options: { create: ['images/posts'] } },
      js    : { options: { create: ['assets/js/prod'] } }
    },

    copy: {
      images: { files: [ {
        expand: true,
        cwd   : '_posts/images',
        src   : ['**'],
        dest  : 'images/posts/'
      } ] }
    },

    browserify: {
      dist: {
        files: {'assets/js/prod/main.js' : ['assets/js/**/*.js']},
        options: {
          debug: true,
          standalone: pkg['export-symbol']
        }
      }
    }


  });

  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-mkdir');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-browserify');
  grunt.loadNpmTasks('grunt-exec');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['clean', 'mkdir:images', 'copy:images',  'mkdir:js' ,'browserify']);


};
