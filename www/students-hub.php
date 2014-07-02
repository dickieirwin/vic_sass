<?php

require_once 'inc/bootstrap.php';

$GLOBALS['_html_title'] = 'Student Hub | Victoria University of Wellington';
$GLOBALS['_body_class'] = 'has_big_search theme-students';
includeFile('header.php');

?>

    <?php includeFile('search.php'); ?>
    <aside id='section_menu'>
        <div id='menu_toggle' class='toggle'><span>Current Students</span></div>
        <div class='toggle_block'>
        <nav>
            <h2 class='menu_title'><a href='/students-hub.php'>Current Students</a></h2>
            <ul class='section_tree'>
                <li><a href=''>Manage your studies</a></li>
                <li><a href='/section-money.php'>Manage your money</a></li>
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
            <div id='hero' class='grid style1'>
                <a href='#'>
                    <div class='imagery'>
                      <img src="assets/images/current_students_banner.jpg" />
                      <span class='vr vr1'></span><span class='vr vr2'></span><span class='vr vr3'></span><span class='vr vr4'></span><span class='vr vr5'></span><span class='vr vr6'></span><span class='vr vr7'></span><span class='vr vr8'></span><span class='vr vr9'></span>
                                <span class='hr hr1'></span><span class='hr hr2'></span><span class='hr hr3'></span>
                                <span class='sq a1'></span><span class='sq a2'></span><span class='sq a3'></span><span class='sq a4'></span><span class='sq a5'></span><span class='sq a6'></span><span class='sq a7'></span><span class='sq a8'></span><span class='sq a9'></span><span class='sq a10'></span>
                                <span class='sq b1'></span><span class='sq b2'></span><span class='sq b3'></span><span class='sq b4'></span><span class='sq b5'></span><span class='sq b6'></span><span class='sq b7'></span><span class='sq b8'></span><span class='sq b9'></span><span class='sq b10'></span>
                                <span class='sq c1'></span><span class='sq c2'></span><span class='sq c3'></span><span class='sq c4'></span><span class='sq c5'></span><span class='sq c6'></span><span class='sq c7'></span><span class='sq c8'></span><span class='sq c9'></span><span class='sq c10'></span>
                                <span class='sq d1'></span><span class='sq d2'></span><span class='sq d3'></span><span class='sq d4'></span><span class='sq d5'></span><span class='sq d6'></span><span class='sq d7'></span><span class='sq d8'></span><span class='sq d9'></span><span class='sq d10'></span>
                            
                            <div class='info w50 left0 bottom25 wht'>
                                <h3>What if you have the answers?</h3>
                                <p>Explore PhD study</p>
                            </div>
          					</div>
                </a>
            </div>
            <ul class='breadcrumb'>
                <li class='accessibility'>Breadcrumbs</li>
                <li><a href=''>Current Students</a></li>
            </ul>
            <div class='entry'>
                <h1 class='page_title'>Current Students</h1>
                <div class='intro'>
                    <p>It&rsquo;s not just what you learn, it&rsquo;s how you learn and who you learn from, on campus and out amongst it in Wellington. At Victoria University you&rsquo;ll learn from some of the best and brightest in almost every field imaginable.</p>
                </div>
                <div class="columns columns2">
                    <div class="col col1">
                        <div class="link_block">
                             <h3><a href="http://www.victoria.ac.nz/st_services/slss/whatweoffer/examskills.aspx">Get ready for exams</a></h3>
                             <p>Come and learn ways to make revision part of your study routine.</p>
                        </div>  
                        
                        <div class="link_block">
                         <h3><a href="http://www.victoria.ac.nz/st_services/slss/whatweoffer/studyskills.aspx">Study skills workshops</a></h3>
                         <p>Make good use of your time between classes by developing effective study habits. <a href="http://www.victoria.ac.nz/st_services/slss/whatweoffer/studyskills.aspx">Workshops are now on</a> at Kelburn campus.</p>
                        </div> 

                        </div> <!-- end col1 -->
                         <div class="col col2">
                            <a class="promo highlight_primary" href="">
                              <h3 class="promo_headline">Skills and tips</h3>
                              <p>We’re hosting a series of lunchtime talks to cover the skills and tips essential to getting the most from uni studies.</p>
                            </a><!-- /promo -->
                        
                        <div class="link_block">
                         <h3><a href="http://www.victoria.ac.nz/st_services/finadvice/hardship/index.aspx">Strapped for cash?</a></h3>
                         <p>Find out if you are eligible to apply for the Hardship Fund.</p>
                        </div> 

                        <div class="widget widget_narrow highlight highlight_tertiary" id="new_div_170402">
                <header>
                <h2>Course Finder</h2>
                </header>
                <form id="" action="http://cms.victoria.ac.nz/resp/course-search">
                  <fieldset>
                    <div class="field_container">
                      <div class="form_left_col">
                        <select name="" id="">
                          <option value="">Search all courses</option>
                          <option value="Undergrad">Undergraduate courses</option>
                          <option value="Postgrad">Postgraduate courses</option>
                          <option value="Diploma">Diploma and certificate courses</option>
                        </select>
                      </div>
                      <div class="field form_search">
                        <input id="" name="q" type="text" class="form_text" autocomplete="off" placeholder="" value="">
                        <input type="submit" class="button" value="Go">
                      </div>
                    </div>
                  </fieldset>
                </form>
                <form id="form_subjects" action="http://cms.victoria.ac.nz/resp/courses-by-subject" class="auto_submit">
                  <fieldset>
                    <div class="field_container">
                      <label for="subject_url">or choose a subject</label>
                      <div class="field">        
                <select name="sub" id="subject_url" class="as_trigger"><option value="">Select a subject ...</option><option value="1">Accounting</option><option value="144">Accounting (Professional)</option><option value="165">Advanced Technology Enterprise</option><option value="155">Antarctic Research Centre</option><option value="2">Anthropology (Cultural)</option><option value="3">Applied Finance</option><option value="4">Applied Linguistics</option><option value="156">Applied Physics</option><option value="5">Applied Statistics</option><option value="6">Architecture</option><option value="164">Architecture History and Theory</option><option value="160">Archives and Records Management</option><option value="7">Art History</option><option value="9">Asian Studies</option><option value="10">Biological Sciences</option><option value="11">Biomedical Science</option><option value="12">Biotechnology</option><option value="14">Building Management</option><option value="15">Building Science</option><option value="16">Business Administration</option><option value="17">Cell and Molecular Bioscience</option><option value="18">Chemistry</option><option value="19">Chinese</option><option value="20">Classical Studies, Greek and Latin</option><option value="149">Clinical Research</option><option value="21">Cognitive and Behavioural Neuroscience</option><option value="22">Commerce</option><option value="23">Commercial Law</option><option value="24">Communications Studies</option><option value="26">Computer Science</option><option value="27">Computer System Engineering</option><option value="28">Conservation Biology</option><option value="29">Creative Writing</option><option value="30">Criminology</option><option value="31">Cultural Anthropology</option><option value="32">Culture + Context</option><option value="33">Deaf Studies</option><option value="34">Design</option><option value="35">Design Innovation</option><option value="36">Development Studies</option><option value="38">Earth Sciences</option><option value="39">Ecological Restoration</option><option value="40">Ecology and Biodiversity</option><option value="41">e-Commerce</option><option value="42">Econometrics</option><option value="43">Economics</option><option value="145">Education and Psychology</option><option value="152">Education Maori Pasifika & Indigenous</option><option value="150">Education Policy & Implementation</option><option value="153">Education Postgraduate</option><option value="151">Educational Psychology & Pedagogy</option><option value="44">Electronic and Computer System Engineering</option><option value="45">Electronic Engineering</option><option value="46">Engineering</option><option value="47">English as a Second Language</option><option value="48">English Literature and Language</option><option value="157">Environmental Science</option><option value="49">Environmental Studies</option><option value="50">European Studies</option><option value="51">Exchange</option><option value="52">Executive Development</option><option value="53">Film</option><option value="54">Finance</option><option value="55">Financial Mathematics</option><option value="154">Forensic Psychology</option><option value="56">Foundation Studies</option><option value="57">French</option><option value="163">Geographic Information Science</option><option value="59">Geography</option><option value="60">Geology</option><option value="61">Geophysics</option><option value="62">German</option><option value="159">Government</option><option value="147">Greek</option><option value="63">Health</option><option value="64">Heritage Materials Science</option><option value="65">Higher Education Learning and Teaching</option><option value="66">History</option><option value="67">Human Resource Management and Industrial Relations</option><option value="68">Humanities and Social Sciences</option><option value="70">Industrial Design</option><option value="71">Information Management</option><option value="162">Information Studies</option><option value="72">Information Systems</option><option value="73">Information Technology</option><option value="74">Interior Architecture</option><option value="75">International Business</option><option value="158">International Relations and Political Science</option><option value="76">Italian</option><option value="77">Japanese</option><option value="78">Landscape Architecture</option><option value="148">Latin</option><option value="79">Law</option><option value="80">Legal Studies</option><option value="81">Leisure Studies</option><option value="161">Library Studies</option><option value="83">Linguistics</option><option value="146">Literary Translation Studies</option><option value="84">Logic</option><option value="85">Logic and Computation</option><option value="86">Management</option><option value="87">Management Studies</option><option value="88">Maori Business</option><option value="89">Maori Studies</option><option value="90">Marine Biology</option><option value="91">Marine Conservation</option><option value="92">Marketing</option><option value="93">Mathematics</option><option value="94">Mathematics Education</option><option value="95">Media Design</option><option value="96">Media Studies</option><option value="97">Microbiology</option><option value="98">Midwifery</option><option value="99">Modern Language Studies</option><option value="100">Money and Finance</option><option value="101">Museum and Heritage Studies</option><option value="102">Music</option><option value="103">Music: Composition</option><option value="104">Music: Performance</option><option value="105">Network Engineering</option><option value="106">New Zealand Literature</option><option value="107">New Zealand Studies</option><option value="108">Nursing</option><option value="109">Operations Research</option><option value="110">Pacific Studies</option><option value="111">Petroleum Geoscience</option><option value="112">Philosophy</option><option value="113">Physical Geography</option><option value="114">Physics</option><option value="115">Political Science and International Relations</option><option value="116">Project Management</option><option value="117">Psychology</option><option value="118">Public Administration</option><option value="119">Public History</option><option value="120">Public Management</option><option value="121">Public Policy</option><option value="122">Religious Studies</option><option value="123">Samoan Studies/Fa'asamoa</option><option value="124">Science</option><option value="125">Second Language Education</option><option value="126">Sexuality Studies</option><option value="127">Social Policy</option><option value="128">Social Science Research</option><option value="129">Sociology</option><option value="130">Software Engineering</option><option value="131">Spanish</option><option value="132">Statistics</option><option value="133">Statistics and Operations Research</option><option value="134">Stochastic Processes in Finance and Insurance</option><option value="135">Strategic Studies</option><option value="136">Taxation</option><option value="137">Technology</option><option value="138">TESOL</option><option value="139">Text Technologies</option><option value="140">Theatre</option><option value="141">Tourism Management</option><option value="142">University Preparation</option><option value="143">Writing (Academic and Professional)</option></select>
                      </div>
                    </div>
                  </fieldset>
                  <input type="submit" value="View subjects" id="subject_form_submit" class="js_hide" />
                </form>
            </div><!-- /widget -->                        

                        <div class="link_block">
                         <h3><a href="http://www.victoria.ac.nz/vilp">Victoria Leadership Programmes</a></h3>
                         <p>Develop a broad range of skills to complement your degree and gain valuable life experience by participating in leadership development programmes.</p>
                        <a class="bullet_link" href="http://www.victoria.ac.nz/st_services/careers/career_development/victoriaPlus/victoria_plus.aspx">Victoria Plus</a>
                        <a class="bullet_link" href="http://www.victoria.ac.nz/home/study/leadership-programmes/vilp">Victoria International Leadership Programme (VILP)</a>
                        </div>  
                        
                        </div><!-- /col2 -->
                        </div>
<!--
                <div class="columns columns2">
                    <div class='col col1'>
                        <div class='link_block'>
                            <h3><a href=''>Courses</a></h3>
                            <p>With over 3,290 different courses there&rsquo;s bound to be something for you.</p>
                        </div>
                        <div class='link_block'>
                            <h3><a href=''>Is Victoria Right for you?</a></h3>
                            <p>With over 3,290 different courses there’s bound to be something for you.</p>
                            <a class='bullet_link' href=''>Link one</a>
                        </div>
                        <div class='link_block'>
                            <h3><a href=''>Accomodation Student Services</a></h3>
                            <p>With over 3,290 different courses there’s bound to be something for you.</p>
                        </div>
                        <div class='link_block'>
                            <h3><a href=''>Events, Openday Visits</a></h3>
                        </div>
                        <div class='link_block'>
                            <h3>Library Hours for today</h3>
                            <h6><span class="day">21</span> <span class="month">May</span></h6>
                            <ul class="divider_list">
                                <li>
                                    <a href="http://library.victoria.ac.nz/library/about/hours/central.html" class="external">
                                        <h6>Central Library</h6>
                                        <p>8:00 am – 10:30 pm</p>
                                    </a>
                                    </li>
                                <li>
                                    <a href="http://library.victoria.ac.nz/library/about/hours/ad.html" class="external">
                                        <h6>Architecture and Design Library</h6>
                                        <p>8:30 am – 10:30 pm</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://library.victoria.ac.nz/library/about/hours/commerce.html" class="external">
                                        <h6>Commerce Library</h6>
                                        <p>8:00 am – 8:00 pm</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://library.victoria.ac.nz/library/about/hours/law.html" class="external">
                                        <h6>Law Library</h6>
                                        <p>8:00 am – 11:30 pm</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://library.victoria.ac.nz/library/about/hours/wjscott.html" class="external">
                                        <h6>WJ Scott Education Library</h6>
                                        <p>8:00 am – 7:00 pm</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class='link_block'>
                            <h3><a href=''>Teaching &amp; Learning</a></h3>
                            <p>With over 3,290 different courses there’s bound to be something for you.</p>
                        </div>
                    </div>
                    <div class='col col2'>
                        <a class='promo highlight highlight_primary'>
                            <h2 class='promo_headline' href=''>Apply and Enrol</h2>
                            <p>Applications for Semester Two close on June 30th!</p>
                        </a>
                        <div class="widget highlight highlight_secondary">
                            <h2>Course Finder</h2>
                            <form action="">
                                <fieldset>
                                    <div class="field_container">
                                        <label for="term">Year/Trimester</label>
                                        <select name="" id="term">
                                            <option>2012 - all trimesters</option>
                                            <option>2012 - Summer</option>
                                            <option>2012 - Winter</option>
                                        </select>
                                    </div>
                                    <div class="field_container">
                                        <label for="course_level">Level</label>
                                        <select name="" id="course_level">
                                            <option>Undergraduate - Level 100</option>
                                            <option>Undergraduate - Level 50</option>
                                            <option>Undergraduate - Level 25</option>
                                        </select>
                                    </div>
                                    <div class="field_container">
                                        <label for="subject">Subject</label>
                                        <select name="" id="subject">
                                            <option>All subjects</option>
                                            <option>Design</option>
                                            <option>Development</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <input class='button primary' type='submit' value='Show Courses'>
                                <a class='button tertiary' href=''>Course A-Z</a>
                            </form>
                        </div>
                    </div>

                </div>-->
            </div>
        </section>
        <?php includeFile('complementary-dates.php'); ?>
    </div>

<?php
includeFile('footer.php');
