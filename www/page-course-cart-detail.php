<?php

require_once 'inc/bootstrap.php';

$GLOBALS['_html_class'] = '';
$GLOBALS['_body_class'] = 'theme-study no_sidebar';
$GLOBALS['_html_title'] = 'My Courses';

includeFile('header.php');

?>

<!--- Specific stylesheet for page or page item: would be included in the head only where used -->
<link href="/assets/css/pages/research_spotlight_hero.css" media="screen, projection" rel="stylesheet" type="text/css" />

    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span>Future Students</span></div>
        <div class='toggle_block'>
            <nav>
                <h2 class='menu_title'><a href=''>Study at Victoria</a></h2>
                <ul class='section_tree'>
                    <li><a href=''>Programmes &amp; Courses</a></li>
                    <li><a href=''>Build your dream job</a></li>
                    <li><a href=''>Why choose Victoria?</a></li>
                    <li><a href='/section-admissions.php'>Admissions &amp; Enrolment</a></li>
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
<!--
        <div id='hero' class='grid style1'>
            <a href='#'>
                <div class='imagery'>
                    <img src='/images/hero-smiling_girl.jpg' alt='Smiling girl' />
                    <span class='vr vr1'></span><span class='vr vr2'></span><span class='vr vr3'></span><span class='vr vr4'></span><span class='vr vr5'></span><span class='vr vr6'></span><span class='vr vr7'></span><span class='vr vr8'></span><span class='vr vr9'></span>
                    <span class='hr hr1'></span><span class='hr hr2'></span><span class='hr hr3'></span>
                    <span class='sq a1'></span><span class='sq a2'></span><span class='sq a3'></span><span class='sq a4'></span><span class='sq a5'></span><span class='sq a6'></span><span class='sq a7'></span><span class='sq a8'></span><span class='sq a9'></span><span class='sq a10'></span>
                    <span class='sq b1'></span><span class='sq b2'></span><span class='sq b3'></span><span class='sq b4'></span><span class='sq b5'></span><span class='sq b6'></span><span class='sq b7'></span><span class='sq b8'></span><span class='sq b9'></span><span class='sq b10'></span>
                    <span class='sq c1'></span><span class='sq c2'></span><span class='sq c3'></span><span class='sq c4'></span><span class='sq c5'></span><span class='sq c6'></span><span class='sq c7'></span><span class='sq c8'></span><span class='sq c9'></span><span class='sq c10'></span>
                    <span class='sq d1'></span><span class='sq d2'></span><span class='sq d3'></span><span class='sq d4'></span><span class='sq d5'></span><span class='sq d6'></span><span class='sq d7'></span><span class='sq d8'></span><span class='sq d9'></span><span class='sq d10'></span>
                </div>
                <div class='info'><p>Get connected &ndash; read our handy guide to getting online both on campus and at home. <span class="action">Download it now.</span></p></div>
            </a>
        </div>
-->
        <section role='main' class='primary'>
            
            <div class='entry course_page'>
				
<!--					
				<h1 class="page_title">My courses</h1>
				<div class="intro"><p>This tool lets you select a group of courses you are interested in studying and find out how much they would cost to study.</p></div>
-->
				<header class="entry-header">
	                <h1 class='page_title'>My courses</h1>
	                <div class="intro">
	                    <p>This tool lets you select a group of courses you are interested in studying and find out how much they would cost to study.</p>
	                </div>
	                <p><strong>Please Note:</strong>  While we make every effort to ensure that the information it presents is accurate, the "My Courses" tool is indicative only.  Your final amount of fees will be calculated and invoiced by Victoria University on acceptance of your enrolment application.</p>
	           
	            </header>
	            

	            <div class='widget highlight highlight_secondary'>

	            	<p> [WHEN NOT LOGGED IN &darr;] </p>

	            	<h6><label for="login-form">View saved courses</label></h6>
		            <div class="form__input--submit-beside">
		                <input type='email' id='login-form' class='form_text' placeholder="Enter email address" />  
		                <button class="secondary">Login</button>
		            </div>

		            <p> [WHEN LOGGED IN &darr;] </p>
	                
	                <p>Viewing courses for <strong>kevin.holland@vuw.ac.nz</strong></p>
	            	<button class="secondary">Logout</button>

		            <h6><label for="fees-type">Showing fees for</label></h6>
	                <select id="fees-type" class="" name="">
	                    <option value="d" selected="selected">Domestic students</option>
	                    <option value="i">International students</option>
	                </select>

	            </div>


				 
	         <!--   

	            <p>Viewing courses for <strong>kevin.holland@vuw.ac.nz</strong></p>
	            <button class="secondary">Logout</button>

            -->

				<ul class='course_cart__list columns columns3 columns--first45 columns--divider'>
	                <li class="header row">
	                	<h2>Courses in 2013</h2>
						<!--<div class="field">
							<label class="visuallyhidden" for="fees-type">Tuition fees</label>
			                <select id="fees-type" class="" name="">
			                    <option value="d" selected="selected">Domestic fees</option>
			                    <option value="i">International fees</option>
			                </select>
		            	</div>-->
	                </li>
	                <li class="row rule">
	                	<div class="col"><a href="#"><h3>ACCY 111</h3> Accounting</a></div>
	                	<div class="col">15 <span>Points</span></div>
	                	<div class="col">$693.75</div>
	                	<a href="#" class="a-delete" title="Delete this course"></a>
	                </li>
	                <li class="row">
	                	<div class="col"><a href="#"><h3>SARC 111</h3> Introduction to Design Processes</a></div>
	                	<div class="col">15 <span>Points</span></div>
	                	<div class="col">$693.75</div>
	                	<a href="#" class="a-delete" title="Delete this course"></a>
	                </li> 	 
	                <li class="row">
	                	<div class="col"><a href="#"><h3>SARC 112</h3> Design Processes</a></div>
	                	<div class="col">15 <span>Points</span></div>
	                	<div class="col">$693.75</div>
	                	<a href="#" class="a-delete" title="Delete this course"></a>
	                </li>
	                <li class="row">
	                	<div class="col"><a href="#"><h3>SARC 121</h3> Introduction to Built Environment Technology</a></div>
	                	<div class="col">15 <span>Points</span></div>
	                	<div class="col">$693.75</div>
	                	<a href="#" class="a-delete" title="Delete this course"></a>
	                </li> 
	                <li class="row">
	                	<div class="col"><a href="#"><h3>SARC 122</h3> Introduction to Applied Physics, Numerical Methods and Statistics for Designers</a></div>
	                	<div class="col">115 <span>Points</span></div>
	                	<div class="col">$693.75</div>
	                	<a href="#" class="a-delete" title="Delete this course"></a>
	                </li>
	                
	                <!--
	                <li class="row course_cart__totals">
	                	<div class="col right-align">Total</div>
	                	<div class="col">190 Points
	                		
	                		<p class="totals__points"><dfn title="Equivalent full-time student">EFTS</dfn> value: 0.250
	                		</p>
	                	</div>
	                	<div class="col">$3093.75</div>
	                </li>
	                
	                <li class="row course_cart__totals">
	                	<div class="col right-align">Assistance fees</div>
	                	<div class="col">&nbsp;</div>
	                	<div class="col">$24.00</div>
	                </li>-->
	            </ul>
	            <h4>Totals for 2013</h4>
	            <ul class='course_cart__list columns columns3 columns--first45 columns--divider'>
	                <li class="row">
	                	<div class="col"><h6>Points</h6>
	                		<!--<p class="error_note">A normal year’s workload in full-time study is 120 points.</p>-->
	                		<p class="note">A normal year’s workload in full-time study is 120 points.<br />
	                		<a href="http://www.studylink.govt.nz/">StudyLink</a> uses <abbr title="Equivalent Full-Time Student">EFTS</abbr> to determine eligibility for <a href="http://www.victoria.ac.nz/home/admisenrol/payments/loansandallowances">loans and allowances</a>.
	                		</p>
	                	</div>
	                	<div class="col"><h6>190 Points</h6>
	                		
	                		<p class="note"><dfn title="Equivalent full-time student">EFTS</dfn> value: 0.250
	                		</p>
	                	</div>
	                	<div class="col">
	                		&nbsp;
	                	</div>
	                </li>
	                <li class="row">
	                	<div class="col">
	                		<h6>Tuition fees</h6>
	                		<p class="note">This estimate does not include any course material charges that may apply — refer to the relevant <a href="http://www.victoria.ac.nz/home/study/undergrad/prospectusug">undergraduate</a> or <a href="http://www.victoria.ac.nz/home/study/postgrad/prospectuspg">postgraduate subject prospectus</a> for details.</p>	
	                	</div>
	                	<div class="col">&nbsp;
	                	</div>
	                	<div class="col"><h6>$3093.75</h6></div>
	                </li>
	                <li class="row">
	                	<div class="col"><h6>Assistance fees</h6></div>
	                	<div class="col">&nbsp;
	                	</div>
	                	<div class="col"><h6>$24.00</h6></div>
	                </li>
	                <li class="row no_border">
	                	<div class="col"><h6>Student services</h6>
	                		<p class="note">The non tuition costs are based on a single year of study only and are for students studying courses <strong>on campus</strong>. <br /><strong>Distance</strong> students (including all nursing, midwifery &amp; health students) pay reduced non-tuition fees. (see <a href="http://www.victoria.ac.nz/home/admisenrol/payments/fees#other">Other Fees</a>)<br /><strong>Please note that the information on this page is indicative only.</strong> Your fees account will be calculated and issued with your Offer of Study.</p>
	                	</div>
	                	<div class="col">&nbsp;
	                	</div>
	                	<div class="col"><h6>$676.00</h6></div>
	                </li>
	                <li class="row footer">
	                	<div class="col"><h2>Total (NZD)</h2></div>
	                	<div class="col">&nbsp;
	                	</div>
	                	<div class="col"><h2>$5000.00</h2></div>
	                </li>
	                
	            </ul>
	            
	            <!--
	            <h4>Totals fees for 2013</h4>
	            <ul class='course_cart__list course_cart__totals columns columns2 columns--divider'>
	            	<li class="row">
	                	<div class="col right-align">Tuition fees</div>
	                	<div class="col">$3093.75</div>
	                </li>
	                <li class="row">
	                	<div class="col right-align">Assistance fees</div>
	                	<div class="col">$24.00</div>
	                </li>
	                <li class="row">
	                	<div class="col right-align">Student services levy</div>
	                	<div class="col">$676.00</div>
	                </li>
	                <li class="row">
	                	<div class="col right-align"><strong>Total (NZD)</strong></div>
	                	<div class="col"><strong>$5000.00</strong></div>
	                </li>
	            </ul>
	        	-->

	            <ul class='course_cart__list columns columns3 columns--first45 columns--divider'>
	                <li class="header row">
	                	<h2>Courses in 2012</h2>
						<!--<div class="field">
							<label class="visuallyhidden" for="fees-type">Tuition fees</label>
			                <select id="fees-type" class="" name="">
			                    <option value="d" selected="selected">Domestic fees</option>
			                    <option value="i">International fees</option>
			                </select>
		            	</div>-->
	                </li>
	                <li class="row rule">
	                	<div class="col"><a href="#"><h3>ACCY 111</h3> Accounting</a></div>
	                	<div class="col">15 <span>Points</span></div>
	                	<div class="col">$693.75</div>
	                	<a href="#" class="a-delete" title="Delete this course"></a>
	                </li>
	                <li class="row">
	                	<div class="col"><a href="#"><h3>SARC 111</h3> Introduction to Design Processes</a></div>
	                	<div class="col">15 <span>Points</span></div>
	                	<div class="col">$693.75</div>
	                	<a href="#" class="a-delete" title="Delete this course"></a>
	                </li> 	 
	                <li class="row">
	                	<div class="col"><a href="#"><h3>SARC 112</h3> Design Processes</a></div>
	                	<div class="col">15 <span>Points</span></div>
	                	<div class="col">$693.75</div>
	                	<a href="#" class="a-delete" title="Delete this course"></a>
	                </li>
	                <li class="row">
	                	<div class="col"><a href="#"><h3>SARC 121</h3> Introduction to Built Environment Technology</a></div>
	                	<div class="col">15 <span>Points</span></div>
	                	<div class="col">$693.75</div>
	                	<a href="#" class="a-delete" title="Delete this course"></a>
	                </li> 
	                <li class="row">
	                	<div class="col"><a href="#"><h3>SARC 122</h3> Introduction to Applied Physics, Numerical Methods and Statistics for Designers</a></div>
	                	<div class="col">115 <span>Points</span></div>
	                	<div class="col">$693.75</div>
	                	<a href="#" class="a-delete" title="Delete this course"></a>
	                </li>
	                
	            </ul>
	            <h4>Totals for 2012</h4>
	            <ul class='course_cart__list columns columns3 columns--first45 columns--divider'>
	                <li class="row">
	                	<div class="col"><h6>Points</h6>
	                		<!--<p class="error_note">A normal year’s workload in full-time study is 120 points.</p>-->
	                		<p class="note">A normal year’s workload in full-time study is 120 points.<br />
	                		<a href="http://www.studylink.govt.nz/">StudyLink</a> uses <abbr title="Equivalent Full-Time Student">EFTS</abbr> to determine eligibility for <a href="http://www.victoria.ac.nz/home/admisenrol/payments/loansandallowances">loans and allowances</a>.
	                		</p>
	                	</div>
	                	<div class="col"><h6>190 Points</h6>
	                		
	                		<p class="note"><dfn title="Equivalent full-time student">EFTS</dfn> value: 0.250
	                		</p>
	                	</div>
	                	<div class="col">
	                		&nbsp;
	                	</div>
	                </li>
	                <li class="row">
	                	<div class="col">
	                		<h6>Tuition fees</h6>
	                		<p class="note">This estimate does not include any course material charges that may apply — refer to the relevant <a href="http://www.victoria.ac.nz/home/study/undergrad/prospectusug">undergraduate</a> or <a href="http://www.victoria.ac.nz/home/study/postgrad/prospectuspg">postgraduate subject prospectus</a> for details.</p>	
	                	</div>
	                	<div class="col">&nbsp;
	                	</div>
	                	<div class="col"><h6>$3093.75</h6></div>
	                </li>
	                <li class="row">
	                	<div class="col"><h6>Assistance fees</h6></div>
	                	<div class="col">&nbsp;
	                	</div>
	                	<div class="col"><h6>$24.00</h6></div>
	                </li>
	                <li class="row no_border">
	                	<div class="col"><h6>Student services</h6>
	                		<p class="note">The non tuition costs are based on a single year of study only and are for students studying courses <strong>on campus</strong>. <br /><strong>Distance</strong> students (including all nursing, midwifery &amp; health students) pay reduced non-tuition fees. (see <a href="http://www.victoria.ac.nz/home/admisenrol/payments/fees#other">Other Fees</a>)<br /><strong>Please note that the information on this page is indicative only.</strong> Your fees account will be calculated and issued with your Offer of Study.</p>
	                	</div>
	                	<div class="col">&nbsp;
	                	</div>
	                	<div class="col"><h6>$676.00</h6></div>
	                </li>
	                <li class="row footer">
	                	<div class="col"><h2>Total (NZD)</h2></div>
	                	<div class="col">&nbsp;
	                	</div>
	                	<div class="col"><h2>$5000.00</h2></div>
	                </li>
	            </ul>

	            <p><button class="primary">+ Add more courses</button> <button class="secondary">Remove all courses</button></p>

	            <h2>Finished for now?</h2>
				<!--  \\\\\\\\\\\\\\\\\\ WHEN NOT LOGGED IN /////////////////// -->
	            <p>You can keep your courses to work with later by filling in your name and email address</p>

	            
            	<div class="left w50 form__field form__field--submit-beside">
                	<input type="email" id="save-courses" class="form_text" placeholder="Enter email address">   
                	<input id="" type="submit" value="Save my courses">
				</div>
				

	            <p class="clear">[ -------------- AFTER SAVING --------------- ]</p>

	            <p class="clear">Thank you. Any changes you've made have been saved for later. You can view your calculator at any time by returning to this page and entering your email address.</p>

	            <p>You can also send your courses to your email address <button class="primary">Email my courses</button></p>

	            <h3>Discuss your options with an adviser</h3>
	            
	            <p>Student Recruitment & Course Advice are here to help you; enter your details along with any questions you have below. Your enquiry and selected courses will be sent to one of our team. You can expect an email reply with more information and some further questions within 24 hours.</p>

	            <div class="form__field w50">
	            	<label class="form__label--block" for="first_name">Name</label>
	            	<input type="text" id="first_name" required="required">
	            </div>
	            <div class="form__field w50">
	            	<label class="form__label--block" for="email_enquiry">Email address</label>
	                <input type='email' id='email_enquiry' class='form_text' placeholder="Enter email address" value="my-email@something.com" />
	            </div>
	            <div class="form__field w70">
					<label class="form__label--block" for="email_message">Your message</label>
	                <textarea class="" id="email_message"></textarea>   
	                
	            </div>
				<input id="" type='submit' value='Send enquiry' />

	            

	            

	            <!--
	            <h6><label for="save-courses">Save your courses</label></h6>
	            <div class="field">
		                <input type='email' id='save-courses' class='form_text' placeholder="Enter email address" />   
		                <input id="" type='submit' value='Save' />
	            </div>

	            
	            <h6><label for="login-form">View saved courses</label></h6>
	            <div class="field">
	                <input type='email' id='login-form' class='form_text' placeholder="Enter email address" />  
	                <button class="secondary">Login</button>
	            </div>
	        -->


	            <!--<div class='widget widget_large highlight highlight_secondary'>


	                <h6><label for="save-courses">Save your courses</label></h6>
            
		            <div class="form__input--submit-beside">
		                <input type='email' id='save-courses' class='form_text' placeholder="Enter email address" />   
		                <input id="" type='submit' value='Save' />
		            </div>

		            
		            <h6><label for="login-form">View saved courses</label></h6>
		            <div class="form__input--submit-beside">
		                <input type='email' id='login-form' class='form_text' placeholder="Enter email address" />  
		                <button class="secondary">Login</button>
		            </div>

		            <h6><label for="fees-type">Fee type</label></h6>
	                <select id="fees-type" class="" name="">
	                    <option value="d" selected="selected">Domestic</option>
	                    <option value="i">International fees</option>
	                </select>

	            </div>-->
					          
        
            </div>
        </section>
        <?php //includeFile('complementary-course.php'); ?>
    </div>

<?php
includeFile('footer.php');
