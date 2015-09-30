module.exports = function (grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        cssmin: {
            target: {
                files: {
                    'css/style.min.css': ['css/style.css', 'css/select.css', 'css/bootstrap-3.3.5.css', 'css/bootstrap-theme-3.3.5.css', 'css/font-awesome.css']
                }
            }
        },
        sass: {
            options: {
                sourcemap: 'none'
            },
            dist: {
                files: {
                    'css/style.css': 'css/style.scss'
                }
            }
        },
        watch: {
            css: {
                files: 'css/*.scss',
                tasks: ['sass', 'cssmin']
            }
        },
        browserSync: {
            dev: {
                bsFiles: {
                    src: "css/style.css"
                },
                options: {
                    watchTask: true,
                    proxy: 'explore-your-archive:8888',

                }
            }
        }
    });
    // Register task
    grunt.loadNpmTasks('grunt-contrib-sass');

    // Browser sync
    grunt.loadNpmTasks('grunt-browser-sync');

    // Watch files
    grunt.loadNpmTasks('grunt-contrib-watch');

    // CSS min
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    // Default task(s).
    grunt.registerTask('default', ['sass', 'watch']);
    grunt.registerTask('bSync', ['browserSync']);

};