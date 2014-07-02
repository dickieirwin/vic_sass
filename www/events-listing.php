<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'theme-default';
$GLOBALS['_html_title'] = 'Events listing | Victoria University of Wellington';

includeFile("header.php");

?>


    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span>Study at Victoria</span></div>
        <div class='toggle_block'>
            <nav>
                <h2 class='menu_title'><a href=''>Study at Victoria</a></h2>
                <ul class='section_tree'>
                    <li><a href=''>Courses</a></li>
                    <li><a href=''>Is Victoria right for you?</a></li>
                    <li class='current parent'><a href=''>Apply &amp; enrol</a>
                        <ul>
                            <li class='parent'><a href=''>Postgraduate admissions</a>
                            <ul>
                                <li><a href=''>Fees</a></li>
                                <li><a href=''>Calculate your Fees</a></li>
                                <li><a href=''>How to Pay</a></li>
                                <li><a href=''>Loans and Allowances</a></li>
                                <li><a href='' class='current'>Scholarships</a>
                                    <ul>
                                        <li><a href=''>Search Scholarships</a></li>
                                        <li><a href=''>Browse scholarships by name</a></li>
                                        <li><a href=''>Browse prizes</a></li>
                                        <li><a href=''>All scholarships for the next 12 months</a></li>
                                        <li><a href=''>Summer Research Scholarships</a></li>
                                    </ul>
                                </li>
                                <li><a href=''>Withdrawals and Refunds</a></li>
                            </ul>
                            </li>
                            <li><a href=''>Enrolling</a></li>
                            <li><a href=''>Fees &amp; Scholarships</a></li>
                        </ul>
                    </li>
                    <li><a href=''>Events &amp; Opendays</a></li>
                    <li><a href=''>New Students</a></li>
                    <li><a href=''>Accommodation &amp; Student Services</a></li>
                    <li><a href=''>Teaching &amp; Learning</a></li>
                    <li><a href=''>Parents &amp; Whanau</a></li>
                </ul>
            </nav>
            <div class='additional_complementary' >
                <h2 class=''>Contact the admissions office</h2>
                <p class=''>
                    PO Box 600, Wellington 6140,
                    New Zealand <br />
                    Phone: <strong>04 463 5620</strong> <br />
                    Fax: 04 463 5199 <br />
                </p>
            </div><!-- /additional_complementary -->
        </div><!-- /toggle_block -->
    </aside><!-- /complementary -->

    <div id='content'>
        <section role='main' class='primary'>
            <ul class='breadcrumb'>
                <li><a href=''>Study at Victoria</a></li>
                <li><a href=''>Apply &amp; Enroll</a></li>
                <li><a href=''>Postgraduate admissions</a></li>
            </ul>
            <div class='entry'>
                <h1 class='page_title'>Events</h1>
				<div class="intro">
				<p>Provide a central point for accessing information on all events at Victoria 
University of Wellington, regardless of channel. Lorem ipsum dolor sit amet, 
consectetur adipiscing elit.</p>
				</div>
				
				
                <!--<link href="http://new.victoria.ac.nz/__data/assets/file/0011/133040/squiz.css" media="screen, projection" rel="stylesheet" type="text/css" />-->
				

				<div class="bleed highlight_secondary events_search_field big_search_fields">
				
					<form class="big_search_form">
						<input class="" id="" autocomplete="off" type="text" value="" placeholder="Search events" >
						<input type="submit" value="Go">
					</form>
					
				</div>
				
                <form id="page_calendar_events_search_169320" method="get" action="" class="form_large">
				
				<div class="filters highlight_tertiary toggle toggle_all_sizes">
					<h2 class="block_caps">Filter events</h2><span class="ui_toggle_arrow"></span>
					<div class="toggle_block">
						<fieldset>
							<div class="field_container">
								<label for="queries_eventfilter_fquery_fromvalue_y">By date</label>
								<div class="field">
									<input type="date" id="queries_eventfilter_fquery_fromvalue_y" class="date-field small">
									<label for="queries_eventfilter_fquery_tovalue_y">to</label>
									<input type="date" id="queries_eventfilter_fquery_tovalue_y" class="date-field small">
									
								</div>
								
							</div>
						</fieldset>
						
						<fieldset>
							<div class="field_container">
								<label for="l1-cats">By category</label>
								<div class="field">
								<style type="text/css">
									#l1-cats { /* TODO: remove overriding styling from squiz.css */
									border-bottom-width: 2px
									}
									
									.no-desc .result_excerpt, .no-duration .event-end-date, .no-start-time .event-start-time, .no-end-time .event-end-time {
										display: none; /* This is only here for the prototype */
									}
									
								</style>
									<select id="l1-cats" class="small">
										<option>All categories</option>
									</select>
									<select id="l2-cats" class="small">
										<option>Sub categories</option>
									</select>
									
								</div>
								
							</div>
						</fieldset>
						
						<div class="field_container form_actions">
							<div class="field">
								<input type="submit" value="Apply filters" class="button secondary">
							</div>
						</div>
					
					</div>
				
				</div>
				
				
<?php                        

		/*
		<div id="dates-and-keyword-fields">
		
        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td align="right">From:</td>                <td>
                    
        <script type="text/javascript">
        //<![CDATA[
            if (typeof adjustDate != "function") {
                // function to enable + and - keys on a field
                adjustDate = function(input, evt)
                {
                    var key = evt.keyCode;
                    var value = parseInt(input.value * 1);
                    if (key == 107 || key == 109) {
                        value += (key == 109)?-1:1;
                        if (value != 0) {
                            input.value = value;
                        }
                        event.returnValue = false;
                        event.cancelBubble = true;
                        return false;
                    }
                }
            }
        //]]>
        </script>

        <input type="hidden" name="queries_eventfilter_fquery_fromshow" value="ymd" /><select name="queries_eventfilter_fquery_fromvalue[d]"  id="queries_eventfilter_fquery_fromvalue_d" class="sq-form-field"><option value="--"></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10" selected="selected">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select><select name="queries_eventfilter_fquery_fromvalue[m]"  id="queries_eventfilter_fquery_fromvalue_m" class="sq-form-field"><option value="--"></option><option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5" selected="selected">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select><script type="text/javascript" src="http://new.victoria.ac.nz/__lib/html_form/html_form.js"></script><input type="text" name="queries_eventfilter_fquery_fromvalue[y]" value="2013" size="4" maxlength="4" 
        onkeyup="validate_numeric_text_field(this, false, 0, 9999);"
        onblur="validate_numeric_range(this, 0, 9999, true);"
        onchange="validate_numeric_text_field(this, false, 0, 9999);" onkeydown="adjustDate(this, event)" onfocus="this.select()" id="queries_eventfilter_fquery_fromvalue_y" class="sq-form-field" /> <input type="hidden" name="queries_eventfilter_fquery_fromvalue[h]" value="--" /><input type="hidden" name="queries_eventfilter_fquery_fromvalue[i]" value="--" /><input type="hidden" name="queries_eventfilter_fquery_fromvalue[s]" value="--" />              </td>
                            </tr>
                        <tr>
                <td align="right">To:</td>
                <td>
                    
        <script type="text/javascript">
        //<![CDATA[
            if (typeof adjustDate != "function") {
                // function to enable + and - keys on a field
                adjustDate = function(input, evt)
                {
                    var key = evt.keyCode;
                    var value = parseInt(input.value * 1);
                    if (key == 107 || key == 109) {
                        value += (key == 109)?-1:1;
                        if (value != 0) {
                            input.value = value;
                        }
                        event.returnValue = false;
                        event.cancelBubble = true;
                        return false;
                    }
                }
            }
        //]]>
        </script>

        <input type="hidden" name="queries_eventfilter_fquery_toshow" value="ymd" /><select name="queries_eventfilter_fquery_tovalue[d]"  id="queries_eventfilter_fquery_tovalue_d" class="sq-form-field"><option value="--"></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11" selected="selected">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select><select name="queries_eventfilter_fquery_tovalue[m]"  id="queries_eventfilter_fquery_tovalue_m" class="sq-form-field"><option value="--"></option><option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6" selected="selected">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select><script type="text/javascript" src="http://new.victoria.ac.nz/__lib/html_form/html_form.js"></script><input type="text" name="queries_eventfilter_fquery_tovalue[y]" value="2014" size="4" maxlength="4" 
        onkeyup="validate_numeric_text_field(this, false, 0, 9999);"
        onblur="validate_numeric_range(this, 0, 9999, true);"
        onchange="validate_numeric_text_field(this, false, 0, 9999);" onkeydown="adjustDate(this, event)" onfocus="this.select()" id="queries_eventfilter_fquery_tovalue_y" class="sq-form-field" /> <input type="hidden" name="queries_eventfilter_fquery_tovalue[h]" value="--" /><input type="hidden" name="queries_eventfilter_fquery_tovalue[i]" value="--" /><input type="hidden" name="queries_eventfilter_fquery_tovalue[s]" value="--" />              </td>
                            </tr>
                    </table>
					
					
        
<div id="events-category-dropdown-l1">
  <input type="hidden" name="queries_categoryl1_query_posted" value="1"  class="sq-form-field" id="queries_categoryl1_query_posted" />              <ul>
                <li><input type="checkbox" name="queries_categoryl1_query[0]" value="keyDates"  id="queries_categoryl1_query_keyDates" class="sq-form-field" /><label  for="queries_categoryl1_query_keyDates">Key Dates</label></li><li><input type="checkbox" name="queries_categoryl1_query[1]" value="currentStudents"  id="queries_categoryl1_query_currentStudents" class="sq-form-field" /><label  for="queries_categoryl1_query_currentStudents">Events for current students</label></li><li><input type="checkbox" name="queries_categoryl1_query[2]" value="orientation"  id="queries_categoryl1_query_orientation" class="sq-form-field" /><label  for="queries_categoryl1_query_orientation">Orientation events</label></li><li><input type="checkbox" name="queries_categoryl1_query[3]" value="publicLectures"  id="queries_categoryl1_query_publicLectures" class="sq-form-field" /><label  for="queries_categoryl1_query_publicLectures">Public lectures and seminars</label></li><li><input type="checkbox" name="queries_categoryl1_query[4]" value="culturalEvents"  id="queries_categoryl1_query_culturalEvents" class="sq-form-field" /><label  for="queries_categoryl1_query_culturalEvents">Cultural events</label></li><li><input type="checkbox" name="queries_categoryl1_query[5]" value="shortCourses"  id="queries_categoryl1_query_shortCourses" class="sq-form-field" /><label  for="queries_categoryl1_query_shortCourses">Short courses and training</label></li><li><input type="checkbox" name="queries_categoryl1_query[6]" value="general"  id="queries_categoryl1_query_general" class="sq-form-field" /><label  for="queries_categoryl1_query_general">General events</label></li><li><input type="checkbox" name="queries_categoryl1_query[7]" value="futureStudents"  id="queries_categoryl1_query_futureStudents" class="sq-form-field" /><label  for="queries_categoryl1_query_futureStudents">Future students</label></li>                   </ul>
                    
</div>
<div id="events-category-dropdown-l2">
  <input type="hidden" name="queries_categoryl2_query_posted" value="1"  class="sq-form-field" id="queries_categoryl2_query_posted" />              <ul>
                <li><input type="checkbox" name="queries_categoryl2_query[0]" value="publicHolidays"  id="queries_categoryl2_query_publicHolidays" class="sq-form-field" /><label  for="queries_categoryl2_query_publicHolidays">Public holidays</label></li><li><input type="checkbox" name="queries_categoryl2_query[1]" value="teachingSchedule"  id="queries_categoryl2_query_teachingSchedule" class="sq-form-field" /><label  for="queries_categoryl2_query_teachingSchedule">Teaching schedule</label></li><li><input type="checkbox" name="queries_categoryl2_query[2]" value="importantDates"  id="queries_categoryl2_query_importantDates" class="sq-form-field" /><label  for="queries_categoryl2_query_importantDates">Important university dates</label></li><li><input type="checkbox" name="queries_categoryl2_query[3]" value="careerFairs"  id="queries_categoryl2_query_careerFairs" class="sq-form-field" /><label  for="queries_categoryl2_query_careerFairs">Career fairs</label></li><li><input type="checkbox" name="queries_categoryl2_query[4]" value="fitnessClasses"  id="queries_categoryl2_query_fitnessClasses" class="sq-form-field" /><label  for="queries_categoryl2_query_fitnessClasses">Fitness classes</label></li><li><input type="checkbox" name="queries_categoryl2_query[5]" value="leagueMatches"  id="queries_categoryl2_query_leagueMatches" class="sq-form-field" /><label  for="queries_categoryl2_query_leagueMatches">League matches</label></li><li><input type="checkbox" name="queries_categoryl2_query[6]" value="otherActivities"  id="queries_categoryl2_query_otherActivities" class="sq-form-field" /><label  for="queries_categoryl2_query_otherActivities">Other activities</label></li>                  </ul>
                    
</div>
<input type="text" name="queries_keyword_query" value="rugby" size="25"  class="sq-form-field" id="queries_keyword_query" />
<input type="text" name="page_calendar_events_search_169320_extra_field" id="page_calendar_events_search_169320_extra_field" disabled="disabled" style="display:none" /><input type="submit" name="page_calendar_events_search_169320_submit_button" onclick="listing_form = document.getElementById('page_calendar_events_search_169320');
                        listing_form.current_result_page.value='1';
                        if (typeof listing_form.mode != 'undefined') listing_form.mode.value = 'results';
                        return true;
                    " value="Submit" />
					
					
</div>					
					*/
?>

<p class="applied_filters">Showing 5 events filtered by “Category > Key Dates”.</p>
<ul class="search_results">
  
  <li class="result result_web   no-start-time no-end-time ">
  
<h6>11th May 2013<span class="event-start-time"> at 12.00am</span><span class="event-end-date"> until 11th Jun 2013<span class="event-end-time"> at 11.59pm</span></span></h6>

<h3 class="result_title">Mobile safari</h3>


    <p class="result_excerpt">Teaser

Teaser<span class="fragment fragment_end">…</span></p>
    
 
</li><li class="result result_web  no-duration   ">
  <a data-ctype="c" data-rank="10" href="http://new.victoria.ac.nz/events/2013/05/fitness-event">
    

<h6>31st May 2013<span class="event-start-time"> at 5.00pm</span><span class="event-end-date"> until 31st May 2013<span class="event-end-time"> at 5.00pm</span></span></h6>

<h3 class="result_title">Fitness event</h3>


    <p class="result_excerpt">This is a fitness event. This is a fitness event. This is a fitness event. This is a fitness event.<span class="fragment fragment_end">…</span></p>
    
  </a>
</li><li class="result result_web    ">
  <a data-ctype="c" data-rank="10" href="http://new.victoria.ac.nz/events/2013/04/ruby-league-match-1-recurring">

<h6>1st Jun 2013<span class="event-start-time"> at 3.00pm</span><span class="event-end-date"> until 1st Jun 2013<span class="event-end-time"> at 5.00pm</span></span></h6>

<h3 class="result_title">Rugby league match 1 (recurring)</h3>

    <p class="result_excerpt">Teaser for league match. Teaser for league match. Teaser for league match. Teaser for league match. Teaser for league match. 

Teaser for league match.<span class="fragment fragment_end">…</span></p>
    
  </a>
</li><li class="result result_web  no-duration   ">
  <a data-ctype="c" data-rank="10" href="http://new.victoria.ac.nz/events/2013/06/fitness-event">
    

<h6>1st Jun 2013<span class="event-start-time"> at 5.00pm</span><span class="event-end-date"> until 1st Jun 2013<span class="event-end-time"> at 5.00pm</span></span></h6>

<h3 class="result_title">Foam party fo da future students</h3>


    <p class="result_excerpt">This is a fitness event. This is a fitness event. This is a fitness event. This is a fitness event.<span class="fragment fragment_end">…</span></p>
    
  </a>
</li><li class="result result_web    ">
  <a data-ctype="c" data-rank="10" href="http://new.victoria.ac.nz/events/2013/04/ruby-league-match-1-recurring">

<h6>8th Jun 2013<span class="event-start-time"> at 3.00pm</span><span class="event-end-date"> until 8th Jun 2013<span class="event-end-time"> at 5.00pm</span></span></h6>

<h3 class="result_title">Rugby league match 1 (recurring)</h3>

    <p class="result_excerpt">Teaser for league match. Teaser for league match. Teaser for league match. Teaser for league match. Teaser for league match. 

Teaser for league match.<span class="fragment fragment_end">…</span></p>
    
  </a>
</li><li class="result result_web   no-start-time no-end-time showLink">
  <a data-ctype="c" data-rank="10" href="http://new.victoria.ac.nz/events/2013/06/mobile-safari">
    

<h6>11th Jun 2013<span class="event-start-time"> at 12.00am</span><span class="event-end-date"> until 11th Jun 2013<span class="event-end-time"> at 11.59pm</span></span></h6>

<h3 class="result_title">Future students sausage sizzle</h3>


    <p class="result_excerpt">Teaser blue bottle direct trade butcher art party, photo booth flexitarian brooklyn fashion axe before they sold out bespoke locavore street art.<span class="fragment fragment_end">…</span></p>
    
  </a>
</li><li class="result result_web    ">
  <a data-ctype="c" data-rank="10" href="http://new.victoria.ac.nz/events/2013/04/ruby-league-match-1-recurring">

<h6>15th Jun 2013<span class="event-start-time"> at 3.00pm</span><span class="event-end-date"> until 15th Jun 2013<span class="event-end-time"> at 5.00pm</span></span></h6>

<h3 class="result_title">Rugby league match 1 (recurring)</h3>

    <p class="result_excerpt">Teaser for league match. Teaser for league match. Teaser for league match. Teaser for league match. Teaser for league match. 

Teaser for league match.<span class="fragment fragment_end">…</span></p>
    
  </a>
</li><li class="result result_web no-desc no-duration no-start-time  hideLink">
    

<h6>21st Jun 2013<span class="event-start-time"> at 12.00am</span><span class="event-end-date"> until 21st Jun 2013<span class="event-end-time"> at 12.00am</span></span></h6>

<h3 class="result_title">Trimester 2 and 3 deadline</h3>


    <p class="result_excerpt"><span class="fragment fragment_end">…</span></p>
    
  </li><li class="result result_web    ">
  <a data-ctype="c" data-rank="10" href="http://new.victoria.ac.nz/events/2013/04/ruby-league-match-1-recurring">

<h6>22nd Jun 2013<span class="event-start-time"> at 3.00pm</span><span class="event-end-date"> until 22nd Jun 2013<span class="event-end-time"> at 5.00pm</span></span></h6>

<h3 class="result_title">Rugby league match 1 (recurring)</h3>

    <p class="result_excerpt">Teaser for league match. Teaser for league match. Teaser for league match. Teaser for league match. Teaser for league match. 

Teaser for league match.<span class="fragment fragment_end">…</span></p>
    
  </a>
</li>
</ul>

 <ul role="navigation" class='pagination'>
	<li class="prev"><a href="#"><span>Previous</span></a></li>
	
	<li><a href="#"><span>2</span></a></li>
	<!--  -->
	<li class="current"><span>3</span></li>
	<li><a href="#"><span>4</span></a></li>
	
	<li class="next"><a href="#"><span>Next</span></a></li>
</ul>
 
 <div>
            <input type="hidden" name="current_result_page" value="1" />
            <input type="hidden" name="results_per_page" value="10" />
                        <input type="hidden" name="submitted_search_category" value="" />
            <input type="hidden" name="mode" value="" />
            </div>
            
                    </form>
            </div><!-- /content -->
        </section><!-- /main -->
       <?php //includeFile('complementary-links.php'); ?>
    </div><!-- /page -->



<?php
includeFile("footer.php");
