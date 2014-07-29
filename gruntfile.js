module.exports = function(grunt) {
    grunt.initConfig({
        sass: {
            dev: {//target
                options: {
                    trace:true,
                    style:'expanded',//nested, compact, compressed, expanded
                    compass:true,
                    //debugInfo:true,//FireSass firebug plugin
                    lineNumbers:true,
                },
                files: [{
                    expand: true,
                    cwd: 'www/assets/sass',
                    dest: 'www/assets/css',
                    src: '**/*.scss',
                    ext: '.css'
                }]
            },
            prod: {
                options: {
                    trace:true,
                    style:'compressed',//nested, compact, compressed, expanded
                    compass:true,
                    lineNumbers:false
                },
                files: [{
                    expand: true,
                    cwd: 'www/assets/sass',
                    dest: 'www/assets/css',
                    src: '**/*.scss',
                    ext: '.css'
                }]
            }
        },
        watch: {
            options: {
                livereload: true,
            },
            sass: {
                files: "**/*.scss",
                tasks: ["sass:dev"],
            },
            all: {
                files: "**/*",
            },
        },
    });
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-livereload');
};