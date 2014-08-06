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
                files: "www/assets/sass/**/*.scss",
                tasks: ["sass:dev", "csssplit:dev"],
            },
            php: {
                files: ['www/**/*.php', 'www/**/*.html'],
            },
        },
        csssplit: {
            dev: {
              src: 'www/assets/css/style.css',
              dest: 'www/assets/css/',
              options: {
                  maxRules: 2000,
                  maxPages: 3,
                  suffix: ''
              },
            },
            prod: {
              src: 'www/assets/css/style.css',
              dest: 'www/assets/css/grunt_css/',
              options: {
                  maxRules: 1000,
                  maxPages: 3,
                  suffix: ''
              },
            }
        },
        cssmin: {
          combine: {
            files: {
              'www/assets/css/style1.css': ['www/assets/css/grunt_css/style1.css'],
              'www/assets/css/style2.css': ['www/assets/css/grunt_css/style2.css'],
            }
          }
        },
    });
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-livereload');
    grunt.loadNpmTasks('grunt-csssplit');
    grunt.loadNpmTasks('grunt-contrib-cssmin');


    grunt.registerTask('dev', 'the development state task', function() {
      // Enqueue "bar" and "baz" tasks, to run after "foo" finishes, in-order.
      grunt.task.run('sass:dev', 'csssplit:dev');
    });

    grunt.registerTask('prod', 'the production ready task', function() {
      grunt.task.run('sass:prod', 'csssplit:prod', 'cssmin');
    });


    grunt.registerTask('default', 'My "default" task description.', function() {
      grunt.log.writeln('grunty: Here is what you can do!' + "\n");
      grunt.log.writeln('grunt dev - this task complies the sass with line numbers and split the style.css into two sheets.');
      grunt.log.writeln('grunt prod -  this task complies the sass, splits the style.css into two sheets then minifies the new sheets.');
      grunt.log.writeln('grunt watch - this will watch the folders for changes run grunt dev if sass has changed and it auto reloads your browser. Boom! grunt on!');
    });
};
