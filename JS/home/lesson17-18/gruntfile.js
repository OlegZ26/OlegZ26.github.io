module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    concat: {
      options: {
        separator: ';',
      },
      dist: {
        src: ['js/src/*.js'],
        dest: 'js/dist/script.main.js',
      },
    },
    uglify: {
      disc: {
        src: ['js/dist/script.main.js'],
        dest: 'js/dist/script.main.min.js'
      }
    }
  });

  // Load the plugins that provides the "concat","uglify" tasks.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Default task(s).
  grunt.registerTask('default', ['concat', 'uglify']);

};