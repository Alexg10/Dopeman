// Gruntfile.js
module.exports = function (grunt) {
  grunt.initConfig({
    // Watch task config
    watch: {
      sass: {
      	options:{livereload:true},
        files: "assets/scss/*.scss",
        tasks: ['sass']
      }
    },
    // SASS task config
    sass: {
        dev: {
            files: {
                // destination         // source file
                "assets/css/styles.css" : "assets/scss/style.scss"
            }
        }
    },
    express:{
		all:{
			options:{
				port:3000,
				hostname:'localhost',
				bases:['./public'],
				livereload:true	
			}
		}
	},
    browserSync: {
      default_options: {
        bsFiles: {
          src: [
            "assets/css/*.css",
            "*.html"
          ]
        },
        options: {
          watchTask: true,
          server: {
            baseDir: "assets",
            index: "index.html"
          },
          port: 8080
        }
      }
    },
  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-browser-sync');
  grunt.loadNpmTasks('grunt-express');	

  grunt.registerTask('server',['express','watch']);
  grunt.registerTask('default', ['browserSync', 'watch']);
};