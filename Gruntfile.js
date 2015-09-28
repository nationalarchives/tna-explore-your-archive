module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
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
                tasks: 'sass'
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

    // Default task(s).
    grunt.registerTask('default', ['sass','watch']);
    grunt.registerTask('bSync', ['browserSync']);


};