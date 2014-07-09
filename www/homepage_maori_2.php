<?php

require_once 'inc/bootstrap.php';

$GLOBALS['_html_class'] = '';
$GLOBALS['_html_title'] = 'Homepage | Victoria University of Wellington';
$GLOBALS['_body_class'] = 'homepage has_big_search';

includeFile('header.php');

?>

	<?php includeFile('search.php'); ?>

	<style type="text/css">
		
		.bigger_heading {
			text-transform: uppercase;
			font-weight: 600;
			font-size: smaller;
			margin-top: -5px;

		}

		#hero.grid .info {
			background-color: #1d2624;
			height: 50%;
			padding: 0.5em 0 0.5em 0.5em;

		}

		#hero.grid .info h2 {
			color: #fff;
			font-size: 2em;
		}
		 #hero.grid .info h4 {
			color: #fff;
		}

	</style>

    <div class='homepage_feature'>
        <div id='hero' class='grid style4'>
            <a href='#'>
                <div class='imagery'>
					<img src="assets/images/maori_language_2.jpg" />
					<span class='vr vr1'></span><span class='vr vr2'></span><span class='vr vr3'></span><span class='vr vr4'></span><span class='vr vr5'></span><span class='vr vr6'></span><span class='vr vr7'></span><span class='vr vr8'></span><span class='vr vr9'></span>
                    <span class='hr hr1'></span><span class='hr hr2'></span><span class='hr hr3'></span>
                    <span class='sq a1'></span><span class='sq a2'></span><span class='sq a3'></span><span class='sq a4'></span><span class='sq a5'></span><span class='sq a6'></span><span class='sq a7'></span><span class='sq a8'></span><span class='sq a9'></span><span class='sq a10'></span>
                    <span class='sq b1'></span><span class='sq b2'></span><span class='sq b3'></span><span class='sq b4'></span><span class='sq b5'></span><span class='sq b6'></span><span class='sq b7'></span><span class='sq b8'></span><span class='sq b9'></span><span class='sq b10'></span>
                    <span class='sq c1'></span><span class='sq c2'></span><span class='sq c3'></span><span class='sq c4'></span><span class='sq c5'></span><span class='sq c6'></span><span class='sq c7'></span><span class='sq c8'></span><span class='sq c9'></span><span class='sq c10'></span>
                    <span class='sq d1'></span><span class='sq d2'></span><span class='sq d3'></span><span class='sq d4'></span><span class='sq d5'></span><span class='sq d6'></span><span class='sq d7'></span><span class='sq d8'></span><span class='sq d9'></span><span class='sq d10'></span>
                </div>
                <div class='info w45 left0 bottom25 blk even_bigger'>
                    <h2>Mā Te Mōhio.<br> Whakamātauhia!</h2>
                    <h4 class="bigger_heading">Know Your Mind. Apply it now.</h4>
                </div>
				
            </a>
        </div><!-- /hero -->
    </div><!-- /homepage_feature -->

   <nav class="nav_quicklinks">
  <h2>Quicklinks</h2>
  <ul>
    <li><a href="http://www.victoria.ac.nz/study/why-victoria">Why choose Victoria?</a></li>
    <li><a href="http://www.victoria.ac.nz/study/apply-enrol">Apply and enrol</a></li>
    <li><a href="http://www.victoria.ac.nz/about/explore-victoria/campuses">Campuses and maps</a></li>
    <li><a href="http://www.victoria.ac.nz/about/explore-victoria/faculties-schools">Faculties and Schools</a></li>
    <li><a href="http://www.victoria.ac.nz/maori-at-victoria/home">Māori at Victoria</a></li>
    <li><a href="http://www.victoria.ac.nz/vicpasifika/home">Pasifika at Victoria</a></li>
    <li><a href="http://www.victoria.ac.nz/international/">International students</a></li>
    <li><a href="https://www.victoria.ac.nz/alumniandfriends/">Alumni</a></li>
  </ul>
</nav><!-- /nav_quicklinks -->


    


    <div id='content'>
	
		<div class='entry'>
		    <div class="welcome">
		        <p>Victoria University of Wellington, Te Whare Wānanga o te Ūpoko o te Ika a Māui, is the number one university in New Zealand for research quality, and attracts exceptional staff and students from around the world.</p>
		    </div>
			
			<div class="widget_wrapper">
				<div class="widget widget_narrow highlight highlight_secondary">
					<header>
					<h2>Course Finder</h2>
					</header>
					<form id="" action="">
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
					<form id="form_subjects" action="" class="auto_submit">
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
			</div>
			<section class='news_container'>
				<a class='info_block'>
					<div class='info_block_secondary'>
						<img src='/images/homepage-holder-1.jpg' alt='homepage holder'>
					</div><!-- /info_block_secondary -->
					<div class='info_block_primary'>
						<h5>News</h5>
						<h2>Top Literary Prize for Gemma</h2>
						<p>Science graduate and creative writing student Gemma Bowker-Wright has won the top prize in New Zealand’s most distinguished literary awards</p>
					</div><!-- /info_block_primary -->
				</a><!-- /info_block -->
				<a class='info_block'>
					<div class='info_block_secondary'>
						<img src='/images/homepage-holder-2.jpg' alt='homepage holder'>
					</div><!-- /info_block_secondary -->
					<div class='info_block_primary'>
						<h5>Important dates</h5>
						<h2>Applications open for 2013 on the 18th of october</h2>
						<p>Google has donated 50 Android Nexus One phones to Victoria’s School of Engineering and Computer Science for student research.</p>
					</div><!-- /info_block_primary -->
				</a><!-- /info_block -->
				<a class='info_block'>
					<div class='info_block_secondary'>
						<img src='/images/homepage-holder-3.jpg' alt='homepage holder'>
					</div><!-- /info_block_secondary -->
					<div class='info_block_primary'>
						<h5>News</h5>
						<h2>Engineering students go Android!</h2>
						<p>Victoria University researchers won three of this year’s 10 Rutherford Discovery Fellowships, which support talented emerging researchers.</p>
					</div><!-- /info_block_primary -->
				</a><!-- /info_block -->
				<a class='info_block'>
					<div class='info_block_secondary'>
						<img src='/images/homepage-holder-4.jpg' alt='homepage holder'>
					</div><!-- /info_block_secondary -->
					<div class='info_block_primary'>
						<h5>Research</h5>
						<h2>Success for emerging researchers</h2>
						<p>Victoria University researchers won three of this year’s 10 Rutherford Discovery Fellowships, which support talented emerging researchers.</p>
					</div><!-- /info_block_primary -->
				</a><!-- /info_block -->
			</section>
		</div> <!-- /entry -->
    </div><!-- /content_block -->

    <?php $homepage = true; include('inc/footer_new.php'); ?>
