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
                    lineNumbers:true
                },
                files: sassFiles
            },
            prod: {
                options: {
                    style:'compressed',//nested, compact, compressed, expanded
                    lineNumbers:false
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
                livereload: true
            },
            sass: {
                files: ["www/assets/sass/**/*.scss", "www/dev/*.scss"],
                tasks: ["sass:dev", "bless:css"]
            },
            php: {
                files: ['www/**/*.php', 'www/**/*.html']
            },
        }
    });
    grunt.registerTask('help', 'Available commands.', function() {
      grunt.log.writeln("Usage: grunt [task]");
      grunt.log.writeln("");
      grunt.log.writeln("Running 'grunt' with no parameters is equivalent to running 'grunt watch'.");
      grunt.log.writeln("");
      grunt.log.writeln("TASKS");
      grunt.log.writeln("");
      grunt.log.writeln("  dev       Compile a dev version of the CSS: unminified, with comments");
      grunt.log.writeln("            indicating the source .scss file, and a source-map.");
      grunt.log.writeln("  help      Show this help.");
      grunt.log.writeln("  prod      Compile a minified, production-ready version of the CSS.");
      grunt.log.writeln("  watch     Watch for changes to .scss, .html and .php files, and run");
      grunt.log.writeln("            the 'dev' task when they occur. You can also use:");
      grunt.log.writeln("            watch:sass - just watch the .scss files");
      grunt.log.writeln("            watch:php  - just watch .php and .html files");
      grunt.log.writeln("  ");
      grunt.log.writeln("  ");
      grunt.log.writeln("PLUMBING TASKS");
      grunt.log.writeln("");
      grunt.log.writeln("You _can_ run these directly, but you probably won't need to.");
      grunt.log.writeln("");
      grunt.log.writeln("  bless     Split the CSS output into multiple files to work around");
      grunt.log.writeln("            Internet Explorer's 4096-selector limitation. Requires the");
      grunt.log.writeln("            output of the sass task to work on.");
      grunt.log.writeln("  sass      Compile the .scss files. Never just run 'grunt sass'!");
      grunt.log.writeln("            If you do have a need to use this task, specify a target,");
      grunt.log.writeln("            either sass:dev or sass:prod.");
    });

    // load the 'sass' task
    grunt.loadNpmTasks('grunt-contrib-sass');
    
    // load the 'watch' task
    grunt.loadNpmTasks('grunt-contrib-watch');

    // load the 'bless' task
    grunt.loadNpmTasks('grunt-bless');

    grunt.registerTask('dev',  ['sass:dev', 'bless:css']);
    grunt.registerTask('prod', ['sass:prod', 'bless:css']);

    grunt.registerTask('default', 'Default task when `grunt` is run without options.', ['watch']);
};
