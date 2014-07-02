<?php

require_once 'inc/bootstrap.php';

$GLOBALS['_body_class'] = 'theme-staff has_big_search';
$GLOBALS['_html_title'] = 'Staff - Victoria University of Wellington';

includeFile('header.php');

?>


    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span>Staff</span></div>
        <div class='toggle_block'>
            <nav>
                <h2 class='menu_title'><a href=''>Staff</a></h2>
                <ul class='section_tree'>
                    <li><a href=''>Our University</a></li>
                    <li><a href=''>Services & Support</a></li>
                    <li><a href=''>Staff Support &amp; Benefits</a></li>
                    <li><a href=''>On Campus</a></li>
                    <li><a href=''>News &amp; Events</a></li>
                    <li><a href=''>Student &amp; Course Management</a></li>
                </ul>
            </nav>
            <div class='additional_complementary'>
                <h2>Important numbers</h2>
                
                <ul class="contacts_block">
                	<li itemscope>
										<h4>In an emergency</h4>
										<a href="tel:044639999">ext. 8888 or 463 9999</a>
                	</li>

                	<li itemscope>
										<h4>Reception</h4>
										<a href="tel:044721000">ext. 0</a>
                	</li>
                
                	<li itemscope>
										<h4>Campus Care</h4>
										<a href="tel:044635398">ext. 5398</a>
                	</li>
                
                	<li itemscope>
										<h4>ITS Service Desk</h4>
										<a href="tel:044635050">ext. 5050</a>
                	</li>
              	</ul>
            </div>
        </div>
        </aside>
    <?php includeFile('search.php'); ?>

    <div id='content'>
        <section role='main' class='primary'>
            <div class='entry'>
               <h1 class='page_title'>Staff</h1>
                <div class='intro'>
                    <p>Get quick access to all your tools, stay in touch with what’s happening on campus, and find out more about the University here in Victoria’s new Staff Hub.</p>
                </div>
								<?php includeFile('staff-v2-very_important_announcement.php'); ?>

								<?php includeFile('staff-v2-important_announcement.php'); ?>

                <div class='columns columns2'>
                    <div class='col col1'>
											<?php includeFile('staff-v2-tools.php'); ?>
                    </div><!-- /col -->
                    <div class='col col2'>
												<div class="promo highlight highlight_secondary">
													<h2 class="promo_headline">A normal announcement</h2>
													<p>The <em>Bacon and Other Delicious Foodstuffs Policy</em> is out for consultation. <a href="">Read it and tell us what you think</a>.</p>
													<p>Dates on announcements aren't mandatory if they aren't needed.</p>
												</div>
												<?php includeFile('staff-v2-news.php'); ?>
                    </div><!-- /col -->
                </div><!-- /columns -->
            </div>
        </section>
        <?php includeFile('complementary-staff-v2.php'); ?>
    </div>


<?php includeFile('footer.php'); ?>
