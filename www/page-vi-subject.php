<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'theme-study template-drilldown no_sidebar';
$GLOBALS['_html_title'] = 'Section Page';

includeFile("header.php");

?>

    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span>Future Students</span></div>
        <div class='toggle_block'>
            <nav>
                <h2 class='menu_title'><a href=''>Study at Victoria</a></h2>
                <ul class='section_tree'>
                    <li><a href=''>Programmes &amp; Courses</a></li>
                    <li><a href=''>Build your dream job</a></li>
                    <li><a href=''>Why choose Victoria?</a></li>
                    <li class="parent"><a href=''>Admissions &amp; Enrolment</a>
                        <ul>
                           <li class="parent"><a class="current" href=''>Undergraduate Admission Information</a>
                                <ul>
                                    <li><a href=''>New Zealand University Entrance</a></li>
                                    <li><a href=''>Cambridge International Examinations (CIE)</a></li>
                                    <li><a href=''>International Baccalaureate (IB)</a></li>
                                </ul>                           
                           </li>
                           <li><a href=''>International Students</a></li>
                           <li><a href=''>Admission to Teacher Education Programmes</a></li>
                           <li><a href=''>Postgraduate Admissions</a></li>
                       </ul>
                    </li>
                    <li><a href=''>Financing your study</a></li>
                    <li><a href=''>Services &amp; Support</a></li>
                </ul><!-- /section_tree -->
            </nav><!-- /nav_tertiary -->
            <div class='additional_complementary' >
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
    <div id='hero'>
      <div class='imagery'>
          <img src='/images/econ_fpo.jpg' alt='Smiling girl' />
      </div>
    </div>

    <section role='main' class='primary'>
        <div class='entry'>
            
            <h1 class='page_title'>Economics</h1>
            
            
            <div class="intro">
                <p>Behind the rapid innovation and development of the new technology of our increasingly hi-tech world are skilled engineering professionals applying scientific knowledge to the design and development of new or improved products, systems, and processes. As electronic and computer-based systems contribute increasingly to our creativity, communications, entertainment, and well-being, the demand for qualified engineering graduates continues to grow.</p>
            </div><!-- /intro -->
            
            <div class="blocks blocks-3col bleed_box">
              <a href="https://www.victoria.ac.nz/staff/services-resources/on-campus" class="link_block">
                <div class="link_block_body">
                  <h3>Campus Services</h3>
                  <p>Facilities Management, Campus Development, Campus Operations, Early Childhood Services and Student Accommodation all make up Campus Services.</p>
                </div>
              </a>

              <a href="https://www.victoria.ac.nz/staff/services-resources/on-campus" class="link_block">
                <div class="link_block_body">
                  <h3>Campus Services</h3>
                  <p>Facilities Management, Campus Development, Campus Operations, Early Childhood Services and Student Accommodation all make up Campus Services.</p>
                </div>
              </a>

              <a href="https://www.victoria.ac.nz/staff/services-resources/on-campus" class="link_block">
                <div class="link_block_body">
                  <h3>Campus Services</h3>
                  <p>Facilities Management, Campus Development, Campus Operations, Early Childhood Services and Student Accommodation all make up Campus Services.</p>
                </div>
              </a>
            </div>
        </div>
    </section>
    
    </div>
<?php
includeFile("footer.php");
