<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'theme-research';
$GLOBALS['_html_title'] = 'Ferrier Research Institute';

includeFile("header.php");

?>

    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span class="section_name">Ferrier Research Institute</span></div>
        <div class='toggle_block'>
            <nav>
                <h2 class='menu_title'><a href='research-hub.php'>Ferrier Research Institute</a></h2>
                <ul class='section_tree'>
                    <li><a href=''>Services</a></li>
                    <li><a href=''>Research</a></li>
                    <li><a href=''>Students</a></li>
                    <li><a href=''>About</a></li>
                </ul>
            </nav>
            <div class='additional_complementary' >
                <h2>Contact Ferrier Research Institute</h2>
                <ul class="contacts_block">
                    <li><h4>All enquiries</h4>
                        <a href="mailto:pizza@eatme.com">enquiry@ferrier.ac.nz</a>
                    </li>
                    <li>
                        <h4>Important Number</h4>
                        <a href="tel:04 456 4678">04 46 4678</a>
                    </li>
                </ul>
            </div><!-- /additional_complementary -->
        </div><!-- /toggle_block -->
    </aside><!-- /navigation -->
    <div id='content'>
        <section role='main' class='primary'>
            <ul class='breadcrumb'>
                <li class='accessibility'>Breadcrumbs</li>
                <li><a href=''>Research</a></li>
            </ul><!-- /breadcrumb -->
            <div class='entry'>
                <h1 class='page_title'style="margin-bottom: 0px;">Dr Phill Rendel</h1>
                <h3 style="margin-top: 0px;">Professor of Materials Science, Macdiarmid Institute</h3>
                <div class="block_primary">
                    <ul class="contacts_list" itemscope="" itemtype="http://schema.org/ContactPoint">
                        <li><a itemprop="email" href="mailto:jane.bloggs@vuw.ac.nz">jane.bloggs@vuw.ac.nz</a></li>
                        <li><a itemprop="telephone" href="tel:080034745737">Phone: 04 4635364</a></li>
                        <li class="no_link">Hunter Bldg Gate 1 Kelburn Pde</li>
                    </ul>
                </div>
                <hr>
                <div style="margin-top: 1em;" class='intro'>
                    <p>Phill manages the custom synthesis service and has research interests in dendrimers, chiral nonsense, important carbohydrate things and other such chemistry.  </p>
                </div><!-- /intro -->
                <p>
                    Phill manages the client relationships for the Ferrier Research Institute’s contract synthesis business. “Communication is a really important part of my job. All clients are different and have different approaches and needs. I make sure we are providing information in a way that is targeted to each client’s requirements.” Contract manufacture often begins with making a small amount of material for biological testing, but many clients then choose to use GlycoSyn’s on-site cGMP facilities to make kilograms of material for clinical trials. “I work very closely with GlycoSyn so it’s a seamless transition for clients. When it comes to the larger scale work, we can carry over a lot of what we already know about the chemical process. There’s a lot of efficiency in that.” Problem-solving is an important part of Phill’s role. “It’s inevitable that things go wrong with the chemistry sometimes, but we can nearly always find a way around the hurdle. Because we are totally open with our clients, they are kept fully up to date with what’s going on, so there are no surprises. We find they appreciate this.” Dendrimer chemistry, chiral nonsense and important carbohydrate things are Phill’s main research interests and he XXXX. Phill studied for his PhD at the University of Canterbury, worked at IRL (the predecessor of Ferrier Research Institute) for several years, and then did a post-doc at Durham and Oxford universities. Outside work, his main interest is Wellington Batucada—an energetic Brazilian-style percussion band. The group of 50 musicians play in street parades, at the Rugby Sevens and in music festivals.
                </p>

                

            </div><!-- /.entry -->
        </section><!-- /main -->
        <aside role='complementary' class='secondary'>
            <img src="http://placekitten.com/217/217"></img>              
        </aside><!-- /complementary -->

    </div><!-- /#content -->
    
<?php
includeFile("footer-lite.php");
