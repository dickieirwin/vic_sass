<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'theme-students no_sidebar template-drilldown';
$GLOBALS['_html_title'] = 'Section Page';

includeFile("header.php");

?>

    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span>Current Students</span></div>
        <div class='toggle_block'>
        <nav>
            <h2 class='menu_title'><a href='/students-hub.php'>Current Students</a></h2>
            <ul class='section_tree'>
                <li><a href=''>Manage your studies</a></li>
                <li class="parent"><a class="current" href=''>Manage your money</a></li>
                <li><a href=''>Services and support</a></li>
                <li><a href=''>On Campus</a></li>
                <li><a href='/section-new_students.php'>New Students</a></li>
                <li><a href=''>Get Involved</a></li>
            </ul>
        </nav>
        <div class='additional_complementary' >
            <h2>Student Services</h2>
            <ul class='bullet_list divider_list'>
                <li><a href=''>Accommodation</a></li>
                <li><a href=''>Advocacy &amp; equity</a></li>
                <li><a href=''>Bookshop</a></li>
                <li><a href=''>Careers &amp; employment</a></li>
                <li><a href=''>Chaplains</a></li>
                <li><a href=''>Childcare</a></li>
            </ul>
        </div>
        </div>
    </aside>

    <div id='content'>
    <section role='main' class='primary'>
        <div class='entry'>
            <header class="entry-header"> 
                <h1 class='page_title'>Manage your money</h1>
                <div class='intro'>
                    <p>Everything you need to know to stay on top of your finances, including managing your student loan or allowance, paying fees, budgeting and scholarships.</p>
                </div><!-- /intro -->
            </header>
            <div class="promo highlight highlight_secondary" id="feature_-_mental_health_awareness_week">
                <h2>Vic Info Ihonui</h2>
                <p>Need help, information or directions? Visit the Vic Info Ihonui stations by the library entrances on levels 1 and 2 in the Hub. They are open 9am–5pm.</p>
                <p><a href="#">Kelburn Campus Map</a></p>
            </div>

            <div class="blocks blocks-3col bleed_box">
                <a class="link_block" href="/section-fees.php">
                    <h3 class=''>Fees</h3>
                    <p>Calculate how much your courses will cost, find out how to pay your fees, and learn about the other compulsory fees for study at Victoria.</p>
                </a><a class="link_block" href="#">
                    <h3 class=''>How to pay</h3>
                    <p>There are various ways you can pay your fees. Learn about the different methods on this page.</p>
                </a><a class="link_block" href="#">
                    <h3 class=''>Scholarships</h3>
                    <p>Find what scholarships you are eligible for</p>
                </a><a class="link_block" href="#">
                    <h3 class=''>Student loans and allowances</h3>
                    <p>Get help with applying for a Student Loan or Allowance through StudyLink.</p>
                </a><a class="link_block" href="#">
                    <h3 class=''>Course withdrawals and refunds</h3>
                    <p>If you want to withdraw from a course you need to make sure you follow the correct process in order to get your fees refunded. Learn what you need to know here.</p>
                </a><a class="link_block" href="#">
                    <h3 class=''>Financial Survival</h3>
                    <p>Learn about how to set up a budget, read financial tips from previous students, and learn how to manage your money, as well as how to get help if you're in serious difficulty.</p>
                </a>
            </div>
        </div>
    </section><!-- /main -->
    </div>
<?php
includeFile("footer.php");
