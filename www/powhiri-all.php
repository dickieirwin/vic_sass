<?php

require_once 'inc/bootstrap.php';

$GLOBALS['_html_class'] = 'maori';
$GLOBALS['_body_class'] = 'theme-maori no_sidebar template-drilldown';
$GLOBALS['_html_title'] = 'Maori at Victoria';

includeFile('header.php');

?>

<!--- Specific stylesheet for page or page item: would be included in the head only where used -->
<link href="/assets/css/page-specific/powhiri.css" media="screen, projection" rel="stylesheet" type="text/css" />

    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span>Maori at Victoria</span></div>
        <div class='toggle_block'>
            <nav>
                <h2 class="menu_title"><a href="maori-at-vic.php">Home</a></h2>                <ul class="section_tree">
                  
                                    <li class=""><a class="" href="maori-at-vic.php">Tauira Hou</a>
                  		
                  </li>
                                  <li class="parent"><a class="parent" href="maori-at-vic.php">Ako</a>
                  		
                    <ul>
                                              <li class=""><a class="" href="maori-at-vic.php">Māori courses</a>
                          		
                        </li>
                                              <li class=""><a class="" href="maori-at-vic.php">Te Kawa a Māui</a>
                          		
                        </li>
                                              <li class=""><a class="" href="maori-at-vic.php">Te Reo at Victoria</a>
                          		
                        </li>
                                              <li class=""><a class="" href="maori-at-vic.php">Māori academic support</a>
                          		
                        </li>
                                              <li class="parent"><a class="parent" href="maori-at-vic.php">Library services ?</a>
                          		
                            <ul>
                                                              <li class="current"><a class="current" href="maori-at-vic.php">Māori Librarian</a>
                                  		
                                </li>
                                                          </ul>
                          
						
                        </li>
                                              <li class=""><a class="" href="maori-at-vic.php">Staff teaching resources</a>
                          		
                        </li>
                                          </ul>
                  
						
                  </li>
                                  <li class=""><a class="" href="maori-at-vic.php">Tautoko</a>
                  		
                  </li>
                                  <li class=""><a class="" href="maori-at-vic.php">Victoria Whānau</a>
                  		
                  </li>
                                  <li class=""><a class="" href="maori-at-vic.php">Rangahau</a>
                  		
                  </li>
                                  <li class=""><a class="" href="maori-at-vic.php">Rangatiratanga</a>
                  		
                  </li>
                                </ul>
              </nav>            <div class='additional_complementary' >
                <h2>Contact the research office</h2>
                <p>
                    PO Box 600, Wellington 6140,<br /> New Zealand
                    Fax: 04 463 5199<br />
                    Phone: 04 463 5620
                </p>
                <h2>Faculty of graduate research</h2>
                <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
            </div><!-- /additional_complementary -->
        </div><!-- /toggle_block -->
    </aside><!-- /complementary -->
    <div id='content'>
        <section role='main' class='primary'>
            <div class='entry'>
                
                <header class="entry-header">
                    <h1 class='page_title'>Nau mai, haere mai ki te Whare Wānanga o te Ūpoko o te Ika a Māui.</h1>
                    <div class='intro'>
                        <p>A quick bit of additional info with some english context for the headline and further information about the content.</p>
                    </div><!-- /intro -->
                </header>
                
                <div class="highlight_secondary highlight columns columns2">
                    <div class="col col1">
                        <a href='powhiri-story'><img class="link_block_image" src="images/powhiri/powhiri-01.jpg" /></a>
                    </div>
                    <div class="col col2">
                        <h3><a href='powhiri-story'>Pro Vice-Chancellor Piri Sciasia talks about the significance of Maori at Victoria</a></h3>
                        <p>A little bit of of a teaser for the rest of the story. We welcome enquiries from potential undergraduate and postgraduate students as well as researchers, academics and others interested in wishing to establish connections with academic and research staff in the School.</p>
                    </div>
                </div>
                
                <div class="blocks blocks-3col bleed_box">
                    <a class="link_block link_block-has_image link_block-secondary" href="powhiri-story.php">
                        <img class="link_block_image" src="images/powhiri/powhiri-01.jpg" />
                        <div class="link_block_body">
                        <h3>Identity and teaching</h3>
                        <p>Ocean Mercier gives a 3min tour of Maori research at Victoria</p>
                        </div>
                    </a><a class="link_block link_block-has_image link_block-secondary" href="powhiri-story.php">
                        <img class="link_block_image" src="images/powhiri/powhiri-02.jpg" />
                        <div class="link_block_body">
                        <h3>Identity and teaching</h3>
                        <p>Ocean Mercier gives a 3min tour of Maori research at Victoria</p>
                        </div>
                    </a><a class="link_block link_block-has_image link_block-secondary" href="powhiri-story.php">
                        <img class="link_block_image" src="images/powhiri/powhiri-03.jpg" />
                        <div class="link_block_body">
                        <h3>Identity and teaching</h3>
                        <p>Ocean Mercier gives a 3min tour of Maori research at Victoria</p>
                        </div>
                    </a><a class="link_block link_block-has_image link_block-secondary" href="powhiri-story.php">
                        <img class="link_block_image" src="images/powhiri/powhiri-04.jpg" />
                        <div class="link_block_body">
                        <h3>Identity and teaching</h3>
                        <p>Ocean Mercier gives a 3min tour of Maori research at Victoria</p>
                        </div>
                    </a>           
                </div>
            </div>
        </section><!-- /main -->
    </div>

<?php
includeFile('footer.php');
