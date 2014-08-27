module.exports = function(grunt) {

    // contains the file specifications, which are the same for dev and prod
    var sassFiles = [
      {
          expand: true,
          cwd: 'www/assets/sass',
          // apply this rule to all scss files EXCEPT style.scss
          src: ['**/*.scss', '!style.scss'],
          dest: 'www/assets/css',
          ext: '.css'
      },
      {
        // we drop the main style.css into a temp folder so it can be run through bless without overwriting
        expand: true,
        cwd: 'www/assets/sass',
        src: 'style.scss',
        dest: 'www/assets/css/grunt_css',
        ext: '.css'
      }
    ];
    
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-bless');

    grunt.initConfig({
        sass: {
          options: { // options shared by all tasks
            bundleExec: true,
            compass:true,
            trace:true,
            unixNewlines: true,
            update: false // update: true causes the sass compilation task to fail for uncertain reasons
          },
            dev: {//target
                options: {
                    style:'nested',//nested, compact, compressed, expanded
                    //debugInfo:true,//FireSass firebug plugin
                    lineNumbers:true,
                },
                files: sassFiles
            },
            prod: {
                options: {
                    style:'compressed',//nested, compact, compressed, expanded
                    lineNumbers:false,
                },
                files: sassFiles
            }
        },
        bless: {
          css: {
            files: {
              'www/assets/css/style.css': 'www/assets/css/grunt_css/style.css'
            }
          },
        },
        watch: {
            options: {
                livereload: true,
            },
            sass: {
                files: "www/assets/sass/**/*.scss",
                tasks: ["sass:dev", "bless:css"],
            },
            php: {
                files: ['www/**/*.php', 'www/**/*.html'],
            },
        }
    });
    grunt.registerTask('dev', 'the development state task', function() {
      // Enqueue "bar" and "baz" tasks, to run after "foo" finishes, in-order.
      grunt.task.run('sass:dev', 'bless:css');
    });

    grunt.registerTask('prod', 'the production ready task', function() {
      grunt.task.run('sass:prod', 'bless:css');
    });


    grunt.registerTask('default', 'My "default" task description.', function() {
      grunt.log.writeln('grunty: Here is what you can do!' + "\n");
      grunt.log.writeln('grunt dev - this task complies the sass with line numbers and split the style.css into two sheets.');
      grunt.log.writeln('grunt prod -  this task complies the sass, splits the style.css into two sheets then minifies the new sheets.');
      grunt.log.writeln('grunt watch - this will watch the folders for changes run grunt dev if sass has changed and it auto reloads your browser. Boom! grunt on!');
    });
};
