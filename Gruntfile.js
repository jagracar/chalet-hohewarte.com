module.exports = function(grunt) {
	// Project configuration.
	grunt.initConfig({
		pkg : grunt.file.readJSON('package.json'),

		// grunt-contrib-sass
		sass : {
			files : {
				"WebContent/css/test.css" : "WebContent/sass/styles.scss"
			}
		},

		// grunt-autoprefixer
		autoprefixer : {
			files : {
				"WebContent/css/test-pref.css" : "WebContent/css/test.css"
			}
		},

		// grunt-jshint
		jshint : {
			files : [ 'Gruntfile.js', 'package.json', 'WebContent/js/location-map.js' ]
		},

		// grunt-contrib-watch
		watch : {
			files : [ 'WebContent/sass/partials/*.scss', 'WebContent/js/*.js' ],
			tasks : [ 'default' ]
		}
	});

	// Load the grunt tasks
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-watch');

	// Default task
	grunt.registerTask('default', [ 'sass', 'autoprefixer', 'jshint' ]);
};
