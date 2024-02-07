<?php

/* Configuration file for LionWiki-t2t. */
/* https://lionwiki-t2t.sourceforge.io/ */

/* **** MAIN TITLE **** */
$WIKI_TITLE = '__WIKI__'; // name of the site

/* **** PASSWORDS **** */
// SHA1 hash of password. If empty (or commented out), no password is required

$PASSWORD = sha1("__PASSWORD__");
$Admin["PASSWORD"] = sha1("__PASSWORD__");

// if true, you need to enter the password for entering the wiki and reading pages.
// before setting to true, read http://lionwiki.0o.cz/index.php?page=UserGuide%3A+How+to+use+PROTECTED_READ
$PROTECTED_READ = false;


/* **** SKINS **** */


// Some of those templates are using markitup, a convenient and advanced toolbar to edit the wiki.

//$TEMPLATE = 'templates/minimaxing/minimaxing.html'; // this one was once the default skin for lionwiki-t2t
//$TEMPLATE = 'templates/minimaxing/minimaxing_links.html'; // this one is for a basic landpage without menu

//$TEMPLATE = 'templates/red.html';
//$TEMPLATE = 'templates/txt2tags/txt2tags.html';  // used once on the old txt2tags wiki (now offline)


//$TEMPLATE = 'templates/ElectricObsidian/ElectricObsidian.html';  // dark theme
//$TEMPLATE = 'templates/literature/literature.html';      // light theme

//$TEMPLATE = 'templates/bootstrap/bootstrap.html';  // bootstrap




// Those templates are more minimalistic and use only a basic toolbar:

//$TEMPLATE = 'templates/ggp/ggp.html';
//$TEMPLATE = 'templates/newspaper/newspaper.html';      // light theme
//$TEMPLATE = 'templates/stellar/index.html';     // in development
//$TEMPLATE = 'templates/editorial/index0.html';  // in development
//$TEMPLATE = 'templates/blazekiss/blazekiss.html';  // deprecated
//$TEMPLATE = 'templates/sissou.html';
//$TEMPLATE = 'templates/fravashyo/fravashyo.html';
//$TEMPLATE = 'templates/dandelion.html';
//$TEMPLATE = 'templates/flexbox.html';    // in development
//$TEMPLATE = 'templates/minimal.html';
//$TEMPLATE = 'templates/terminal/terminal.html';
//$TEMPLATE = 'templates/terminal_green.html';
//$TEMPLATE = 'templates/terminal_white.html';
//$TEMPLATE = 'templates/geek/geek.html';
//$TEMPLATE = 'templates/brut/brut.html';        // ugly colors and brutism aesthetics
//$TEMPLATE = 'templates/lagrange/lagrange.html';      // looks like the gemini browser lagrange
//$TEMPLATE = 'templates/light.html';
//$TEMPLATE = 'templates/print.html';
//$TEMPLATE = 'templates/paper/paper.html';
$TEMPLATE = 'templates/mimoza/mimoza.html';  // current default template
//$TEMPLATE = 'templates/cafe.html';
// $TEMPLATE = 'templates/smallweb/smallweb.html';    // not finished and not very good
//$TEMPLATE = 'templates/wikiss.html';
//$TEMPLATE = 'templates/skeleton/skeleton.html';    // deprecated
//$TEMPLATE = 'templates/simple.html';  //

/* **** MORE OPTIONS **** */

$NO_HTML = true; // XSS protection

$START_PAGE = 'main'; // Which page should be default (start page)?

$RSS = '<a href="./var/rss.xml">RSS</a>';

// if needed (if autodetection doesn't work), force language
//$LANG = fr;
$LANG = __LANGUAGE__;

/* see the file config.t2t to tweak the syntax and even more! */

/* *********************************************** */
