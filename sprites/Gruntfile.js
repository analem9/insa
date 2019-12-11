module.exports = function(grunt) {
    grunt.initConfig({
        spritegenerate: {
            all: {
                src: '*.png',
                dest: 'spritesheet.png'
              }
            }
          });
       

    grunt.loadNpmTasks('grunt-spritesmith');

  };