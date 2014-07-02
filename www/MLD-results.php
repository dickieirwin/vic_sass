<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'search_page has_big_search no_section_menu';
$GLOBALS['_html_title'] = 'Search results page';

includeFile("header.php");

?>

    <!--<div class="big_search_fields">
        <form id="big_search_form" class="">
            <input class="" id="" autocomplete="off" type="text" value="derctor">
            <input type="submit" value="Go">
        </form>
        
    </div>-->

    <form class="big_search_form" action="http://new.victoria.ac.nz/search">
        <div id="big_search_fields" class="big_search_fields">
          <label for="big_search_query" class="js_hide">Search Victoria</label>
          <input class="field_placeholder live_search" id="big_search_query" autocomplete="off" type="text" name="q" placeholder="Search Victoria" value="tikanga">
          <input type="submit" value="Go">
        </div>
        <div class="search_filters">
          <div id="big_search_filter">
            <label for="search_everything"><input type="radio" name="site" value="global_search_collection" id="search_everything" checked=""> Everything</label>
            <label for="search_courses"><input type="radio" name="site" value="course_search_collection" id="search_courses"> Courses</label>
            <label for="search_people"><input type="radio" name="site" value="people_search_collection" id="search_people"> People</label>
          </div>
        </div>
    </form>

    <div id='content'>
    <section role='main' class='primary'>
        
        <div class='entry'>

            <p>Showing results 1 - 9 of 9 results</p>
        
			<style type="text/css">
            .nested_gloss {font-weight: normal; font-family: "Segoe WP", "Nimbus Sans L", Arial, "Helvetica Neue", "Helvetica", sans-serif; font-size: 14px; margin-left:0.5em;}
            .nested_variant:before
                {
                    /*content: '\021B3';*/
                }
            .entry .sense, .entry .nested_variant {
                margin-bottom: 2em;
            }
            .entry .senses {margin-left:1em;}

            .search_results .button {display: inline-block!important;}

            .show_more {margin-left: 1em; margin-top:-1em;}

            #content .search_results .result.result_web {padding-bottom:2em;padding-top:1.5em;}

            </style>
			
			<ul class="search_results">
			
				<li class='result result_web'>
                    
                        
                        <h3 class="result_title">
                            <a href="mld-entry.php">
                            tikanga
                            </a>
                        </h3>
                    

                    <ol class="senses course_page">
                        <!-- TODO course_page to be removed and SASS changed to open course_flag styling outside course_page -->
                        <li class="sense">
                            <h4><a href="mld-entry.php">provision</a></h4>
                            <p><em>Ā, ki taku whakaaro e hē ana te tuku ohorere mai o tēnei Pire ki te Whare i te mea kāhore anō ngā tāngata e pāngia ana e tēnei Ture [kia] mātau noa ki ōna tikanga.</em></p>
                            
                        </li> 
                        <li class="sense">
                            <h4><a href="mld-entry.php">rules</a></h4>
                            <p><em>Kei te hanga tikanga aua Kaunihera Marae ināianei [kia] whakamutu i te mahi inu waipiro a ngā Māori.</em></p>
                            
                        </li> 
                        <li class="sense">
                            <h4><a href="mld-entry.php">management, governance</a></h4>
                            <p><em>Wāhia ā mātou whenua katoa, wehewehea ngā poraka, kia riro motuhake ai i ia tangata o mātou, tōna pīhi, tōna pīhi, me te waiho māna te tikanga mō tōna pīhi, mō tōna pīhi.</em></p>
                            
                        </li>
                        
                        <li class="sense">
                            <h4><a href="mld-entry.php">practice, process</a></h4>
                            <p><em>Ko tētahi take anō i mate ai ngā Māori i aua ture, he whakaae nō aua ture kia uru ngā rōia ki roto ki ngā Kōti Whenua Māori, he tikanga hē rawa tēnei, ā, kāore e tika ana kia whakaaetia.</em></p>
                            
                        </li>
                        <li class="sense">
                            <h4><a href="mld-entry.php">right</a></h4>
                            <p><em>Kei te tautoko te iwi Māori i tēnei Pire, nō te mea e kite ana rātou mā tēnei Pire ka oti he tikanga e taea ai e rātou te rīhi i ō rātou whenua.</em></p>
                            
                        </li> 
                        <li class="sense">
                            <h4><a href="mld-entry.php">terms, conditions</a></h4>
                            <p><em>Ko aua tū mahinga ika i rāhuitia ki ngā Māori i raro i [ngā] tikanga o te tīti hoko o [te iwi].</em></p>
                            
                        </li> 
                        <li class="sense">
                            <h4><a href="mld-entry.php">protocol</a></h4>
                            <p><em>I te mea kua pau taku tāima, kāti me torutoru nei āku kupu, e taea hoki te pēhea i ngā tikanga o te Whare nei.</em></p>
                            
                        </li> 
                        <li class="sense">
                            <h4><a href="mld-entry.php">discretion</a></h4>
                            <p><em>Kāhore kau he mea i roto i tēnei ture e tukua kia pokanoa ki ngā tikanga o te Huperetini o te Porowini.</em></p>
                            
                        </li> 
                    </ol> 

                    <a class="show_more button tertiary">Show more</a>                 
                                    
                </li>

                <li class='result result_web'>
                    
                        
                        <h3 class="result_title">
                            <a href="mld-entry.php">tikanga Māori</a> 
                            <b class="nested_gloss">Māori customary values and practices</b>
                        </h3>
                    
                    
                                        
                                    
                </li>

                <li class='result result_web'>
                   
                    <h3 class="result_title">
                        <a href="mld-entry.php">tikanga tiaki</a> <b class="nested_gloss">trusteeship</b>
                    </h3>
                                       
                                    
                </li>

                <li class='result result_web'>
                    <h3 class="result_title">
                        <a href="mld-entry.php">tikanga tuku iho</a> <b class="nested_gloss">law, customary laws</b>
                    </h3>

                                    
                </li>

                <li class='result result_web'>
                    <h3 class="result_title">
                        <a href="mld-entry.php">tikanga whakahaere</a> <b class="nested_gloss">management practices</b>
                    </h3>

                </li>

                <li class='result result_web'>
                    <h3 class="result_title">
                        <a href="mld-entry.php">Ture Whakatakoto Tikanga mō ngā Tāone me ngā Whenua 1977</a> <b class="nested_gloss">Town and Country Planning Act 1977</b>
                    </h3>                   
                                    
                </li>

                <li class='result result_web'>
                    <h3 class="result_title">
                        <a href="mld-entry.php">
                        whai tikanga
                        </a>
                    </h3>
                    
                    <ol class="senses course_page">
                        <!-- TODO course_page to be removed and SASS changed to open course_flag styling outside course_page -->
                        <li class="sense">
                            <h4><a href="mld-entry.php">(-tia) possess a right</a></h4>
                            <p><em>Ko ngā tāngata e whai tikanga ana ki ngā whenua ka whai tikanga tūturu ki te whenua, i mua atu o ngā tāngata katoa, kia utua te utu tau.</em></p>
                            
                        </li> 
                        <li class="sense">
                            <h4><a href="mld-entry.php">(whai tikangatia) possess an interest</a></h4>
                            <p><em>Ki te Āpiha o te Takiwā ... ki te Tumuaki Kaititiro Mapi, ki te Kōmihana o ngā Whenua Rāhui Māori, ki ērā atu anō hoki e whai tikanga ana ki tēnei mea.</em></p>
                            
                        </li> 
                        <li class="sense">
                            <h4><a href="mld-entry.php">be valid</a></h4>
                            <p><em>Kua tino whakaritea e te ture te tikanga mō te tuhituhinga o tō ingoa ... ki te wira; nā, ... ki te kore koe e whakarite i te mahinga kia rite tonu ki tā te ture i kī ai, pēnei e kore rawa atu tō wira e whai tikanga.</em></p>
                            
                        </li>
                    </ol>                   
                                    
                </li>
				
            </ul>
			
			
            
        </div><!-- /content -->
    </section><!-- /main -->
    
    </div>
<?php
includeFile("footer.php");
