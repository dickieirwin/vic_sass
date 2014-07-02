
<?php

require_once "inc/bootstrap.php";
includeFile("header.php");
?>

<style type='text/css'>


    div[role="navigation"],
    footer[role="contentinfo"],
    #mobile_masthead {
        display:none;
    }

    section {
        max-width: 50em !important;
        margin: 0 auto !important;
    }

    a p {
        color: #444 !important;
    }

    .intro {
        font-family: Georgia, serif !important;
        font-size: 18px !important;
        color: #777 !important;
        margin: 0 !important;
        padding: 0 0 1em;
    }


</style>
<section role='main' class='primary'>

    <div class="entry">
        <h1>Vagrant. Wow. Many awesome.</h1>
    <h2>Hub pages</h2>

    <p class="intro">These pages are intended to provide a wealth of useful starting points for specific users or areas of interest.</p>
    
    <div class="blocks blocks-2col">
        <a class="link_block" href='research-hub.php'>
            <h3>Research with Impact</h3>
            <p>This hub is intended to be primarily a showcase. Use this balance of content where users are likely to need guiding or are looking for an overall understanding. The hero area here carries a bespoke interface for featured items in the Research Spotlight - likely pulled and ordered randomly from a pool of 'tagged' articles.</p>
        </a><a class="link_block" href='students-hub.php'>
            <h3>Current Students</h3>
            <p>This template shows a more wayfaring-focused set of content combined with a single hero piece.</p>
        </a><a class="link_block" href='study-hub.php'>
            <h3>Study at Victoria</h3>
            <p>Hub landing pages intended for promotion or exploration can include a larger hero element. It sits outside the <code>.primary</code> div but still within the <code>#content</code> wrapper.</p>
        </a><a class="link_block" href='staff-hub.php'>
            <h3>Staff</h3>
            <p>The staff area is news & wayfaring focused. It demonstrates a latest news teaser area, a custom item in the sidebar (the Vice-Chancellor's message) and has no hero piece.</p>
        </a>
    </div>

    <hr class="rule--light" />

    <h2>Content focused pages</h2>

    <p class="intro">Workhorse pages for reading or viewing long-form content.</p>
    <div class="blocks blocks-2col">

        <a class="link_block" href='research-article.php'>
            <h3>Typical article page</h3>
            <p>An example long-form content page (a research story) which includes a slideshow, various captioned images and pull quotations.</p>
        </a><a class="link_block" href='content-page.php'>
            <h3>Overview style content page</h3>
            <p>These pages are a bit like manually constructed sections. They're used quite extensively on the current homesite to provide overviews of a particular area plus lots of jumping off points.</p>
        </a><a class="link_block" href='elements.php'>
            <h3>&lsquo;Bucket list&rsquo; of elements</h3>
            <p>Page-level elements in the main content area including: lists; forms; tables; embedded video and maps; and more.</p>
        </a><a class="link_block" href='forms.php'>
            <h3>Form styling</h3>
            <p>Demonstration page for widgets and standard forms.</p>
        </a><a class="link_block" href='buttons.php'>
            <h3>Buttons</h3>
            <p>All the button styling and sizing options.</p>
        </a>

    </div>

    <hr class="rule--light" />

    <h2>Section pages</h2>

    <p class="intro">Pages for drilling down to deeper content or a concise set of jumping off points on a particular subject.</p>
    <div class="blocks blocks-2col">
        <a class="link_block" href='section-admissions.php'>
            <h3>Drilldown page</h3>
            <p>This is a standard text-only overview page. As discussed it would likely be edited as normal page content: adding highlights, headings and links as required.</p>
        </a><a class="link_block" href='research-expertise.php'>
            <h3>Drilldown page with images</h3>
            <p>The blocks on this </p>
        </a><a class="link_block" href='research-spotlight.php'>
            <h3>Research spotlight</h3>
            <p>This is a custom template for drilling down into lots of articles where the content is image-heavy and can be closely controlled.</p>
        </a>
    </div>   
      <hr class="rule--light" />
  
    <h2>Specific pages</h2>
    <div class="blocks blocks-2col">

        <a class="link_block" href='homepage.php'>
            <h3>Homepage</h3>
            <p>Specific template for the homepage &ndash; grabs it's own unique <abbr>CSS</abbr> override.</p>
        </a><a class="link_block" href='services.php'>
            <h3>Services</h3>
            <p>Large lists of links.</p>
        </a><a class="link_block" href='search-results.php'>
            <h3>Search</h3>
            <p>Standard search results page.</p>
        </a><a class="link_block" href='alerts.php'>
            <h3>Alerts</h3>
            <p>System and page-specific alert styling.</p>
        </a>

    </div>
    </div>
</section>


<?php
includeFile("footer.php");
