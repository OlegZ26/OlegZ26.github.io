module.exports = function(grunt) {

  // Project configuration.
grunt.initConfig({
  concat: {
    css: {
      src: ['css/init/*.css'],
      dest: 'css/dist/style.main.css'
    },
    js: {
      options: {
        separator: ';',
      },
      src: ['js/src/*.js'],
      dest: 'js/dist/script.main.js',
    }
  },
  cssmin: {
    css: {
      src: 'css/dist/style.main.css',
      dest: 'css/dist/style.main.min.css'
    }
  },
  uglify: {
    js: {
      src: ['js/dist/script.main.js'],
      dest: 'js/dist/script.main.min.js'
    }
  },
  watch: {
    css: {
      files: ['css/init/*.css'],
      tasks: ['concat:css', 'cssmin:css']
    },
    js: {
      files: ['js/src/*.js'],
      tasks: ['concat:js', 'uglify:js']
    }
  }
});

  // Load the plugins that provides the "concat","uglify" tasks.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['concat', 'uglify', 'cssmin']);

};