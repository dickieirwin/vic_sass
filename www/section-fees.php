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
                <li class="parent"><a class="" href='/section-money.php'>Manage your money</a>
                    <ul>
                        <li class="current"><a class="current" href="http://new.victoria.ac.nz/students/manage-your-money/fees">Fees</a>
                          		
                            <ul>
                                                              <li class=""><a class="" href="http://new.victoria.ac.nz/students/manage-your-money/fees/calculate-your-fees">Fees calculator</a>
                                  		
                                </li>
                                                              <li class=""><a class="" href="http://new.victoria.ac.nz/students/manage-your-money/fees/domestic-fees">Domestic students fees</a>
                                  		
                                </li>
                                                              <li class=""><a class="" href="http://new.victoria.ac.nz/students/manage-your-money/fees/international-fees">International students fees</a>
                                  		
                                </li>
                                                              <li class=""><a class="" href="http://new.victoria.ac.nz/students/manage-your-money/fees/student-services-levy-faqs">Student services levy FAQs</a>
                                  		
                                </li>
                                                          </ul>
                          
						
                        </li>
                                              <li class=""><a class="" href="http://new.victoria.ac.nz/students/manage-your-money/financial-survival">Financial survival</a>
                          		
                        </li>
                                              <li class="external"><a class="" href="http://new.victoria.ac.nz/students/manage-your-money/financial-support-and-advice2">Financial support and advice</a>
                          		
                        </li>
                                              <li class=""><a class="" href="http://new.victoria.ac.nz/students/manage-your-money/scholarships">Scholarships</a>
                          		
                        </li>
                                              <li class=""><a class="" href="http://new.victoria.ac.nz/students/manage-your-money/student-loans-and-allowances">Student loans and allowances</a>
                          		
                        </li>
                                              <li class=""><a class="" href="http://new.victoria.ac.nz/students/manage-your-money/withdrawals-and-refunds">Course withdrawals and refunds </a>
                          		
                        </li>
                                          </ul>
                
                </li>
                <li><a href=''>Services and support</a></li>
                <li><a href=''>On Campus</a></li>
                <li><a href='/section-new_students.php'>New Students</a></li>
                <li><a href=''>Get Involved</a></li>
            </ul>
        </nav>
        </div>
    </aside>

    <div id='content'>
    <section role='main' class='primary'>
        <div class='entry'>
            <header class="entry-header">
                <h1 class='page_title'>Fees for 2013</h1>
                <div class='intro'>
                    <p>Calculate how much your courses will cost, find out how to pay your fees, and learn about the other compulsory fees for study at Victoria.</p>
                </div><!-- /intro -->
            </header>
            <div class="blocks blocks-3col bleed_box">
                <a class="link_block" href="#">
                    <h3 class=''>Fees Calculator</h3>
                    <p>The Fees Calculator enables you to select a group of courses you are interested in studying and find out how much they would cost to study. Fees for 2013 courses are currently available.</p>
                </a><a class="link_block" href="#">
                    <h3 class=''>Domestic student fees</h3>
                    <p>Domestic students are generally citizens or permanent residents of New Zealand, but this category includes some other groups as set out in section 3 of the Fees Statute 2013.</p>
                </a><a class="link_block" href="#">
                    <h3 class=''>International Student Fees</h3>
                    <p>This page contains all the information you need to know about fees if you are an international student.</p>
                </a><a class="link_block" href="/page-levy.php">
                    <h3 class=''>Other compulsory fees</h3>
                    <p>All students enrolled at Victoria University are required to pay some additional fees such as the Student Services Levy</p>
                </a><a class="link_block" href="#">
                    <h3 class=''>How to pay your fees</h3>
                    <p>I couldn&rsquo;t work this out but ti strikes me as quite important.</p>
                </a>
            </div>
        </div>
    </section><!-- /main -->
    </div>
<?php
includeFile("footer.php");
