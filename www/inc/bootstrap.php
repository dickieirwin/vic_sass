<?php

// Define web site root
define("WEBROOT", dirname(__FILE__) . "/");

/**
 * Includes a php file relative to the website root, wraps html comments around
 * the included file.
 *
 * @param $file
 * @return mixed
 */
function includeFile($file)
{
    // Check the file exists
    if (!is_file(WEBROOT . $file)) {
        print "Couldn't load: '" . WEBROOT . $file . "'\n";
        return;
    }

    // print "<!-- Including '" . $file . "'-->\n"; // Forces IE into quirks mode when printed before the doctype
    include WEBROOT . $file;
    print "\n<!-- Finish including '" . $file . "'-->\n";
}