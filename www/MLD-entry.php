<?php

require_once "inc/bootstrap.php";

$GLOBALS['_body_class'] = 'search_page has_big_search no_section_menu no_sidebar';
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
          <input class="field_placeholder live_search" id="big_search_query" autocomplete="off" type="text" name="q" placeholder="Search Victoria" value="Search Victoria">
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
        <ul class='breadcrumb'>
            <li class='accessibility'>Breadcrumbs</li>
            <li><a href=''>Research</a></li>
        </ul><!-- /breadcrumb -->
        <div class='entry '>

            <style type="text/css">
            .nested_gloss {font-weight: normal; font-family: "Segoe WP", "Nimbus Sans L", Arial, "Helvetica Neue", "Helvetica", sans-serif; font-size: 14px; margin-left:0.5em;}
            .nested_variant:before
                {
                    /*content: '\021B3';*/
                }
            .entry .sense, .entry .nested_variant {
                margin-bottom: 2em;
            }
            .icon.document {
                width: 20px;
                height: 22px;
                float:left;
                background: url("/assets/images/icon-document.png") no-repeat 0 0;
                background-size: 100%;
                margin-right: 0.5em;
            }
            .corpus_link {position:absolute;right:0;top:5em;color:#333!important;}
            .tm_block {position: relative;}
            .tm_link { font-style: italic;position:absolute; bottom:0.5em; right:1em;font-size:80%;}
            </style>

            <h1>tikanga</h1>

            <a href="#" class="button large transparent corpus_link">
                <span class="icon document"></span>
                Find in corpus
            </a>
			
            <div class="highlight highlight_secondary tm_block">The traditional usage of tikanga refers to the customary system of values and law, deeply embedded in social context.
            <a href="#" class="tm_link">Source: Te Matapunenga</a>
            </div>

            <ol class="course_page">
                <!-- TODO course_page to be removed and SASS changed to open course_flag styling outside course_page -->
                <li class="sense">
                    <h2>provision</h2>
                    <p><em>Ā, ki taku whakaaro e hē ana te tuku ohorere mai o tēnei Pire ki te Whare i te mea kāhore anō ngā tāngata e pāngia ana e tēnei Ture [kia] mātau noa ki ōna tikanga.</em><a href="#">[S241886]</a></p>
                    <p>This usage refers to both a specific provision and the substantive content of an Act, Bill, contract or other similar document.</p>
                    <p>See also <a href="#">kupu</a>, <a href="#">ritenga</a>, <a href="#">whakaritenga</a></p>
                </li>
                <li class="sense">
                    <h2>rules</h2>
                    <p><em>Kei te hanga tikanga aua Kaunihera Marae ināianei [kia] whakamutu i te mahi inu waipiro a ngā Māori.</em><a href="#">[S241902]</a></p>
                    <ul>
                        <li class="nested_variant">
                            <h3>tikanga here <b class="nested_gloss">legal restriction</b></h3>
                            <p><em>Nō te mea e āhua raruraru ana te mana tuku here ki runga ki ngā whenua ehara i te mea hei painga mō te koroni, ā, nō reira he mea tika kia whakakorea taua tikanga here.</em><a href="#">[S241902]</a></p>
                            <p>This usage is especially common in the historical period in regards to restrictions upon the use of land.</p>
                            <p>See also <a href="#">here</a>.</p>
                        </li>
                        <li class="nested_variant">
                            <h3>tikanga tawhito <b class="nested_gloss">traditional laws</b></h3>
                            <p><em>Ia take ki ia whenua papatupu me whakatau i runga i ngā tikanga tawhito o mua iho a te iwi Māori, arā, i ngā wāhi o aua tikanga e taea ana te kitea.</em><a href="#">[ATL-10B]</a></p>
                        </li>

                    </ul>
                    
                </li>
                <li class="sense">
                    <h2>management, governance</h2>
                    <p><em>Wāhia ā mātou whenua katoa, wehewehea ngā poraka, kia riro motuhake ai i ia tangata o mātou, tōna pīhi, tōna pīhi, me te waiho māna te tikanga mō tōna pīhi, mō tōna pīhi.</em><a href="#">[BIM1450]</a></p>
                    <p>See also <a href="#">mana whakahaere</a></p>
                </li>
                <li class="sense">
                    <h2>practice, process <a class="course_flag flag_pending" href="#">HIST</a> <a class="course_flag flag_pending" href="#">MID</a></h2>
                    <p><em>Ko tētahi take anō i mate ai ngā Māori i aua ture, he whakaae nō aua ture kia uru ngā rōia ki roto ki ngā Kōti Whenua Māori, he tikanga hē rawa tēnei, ā, kāore e tika ana kia whakaaetia.</em><a href="#">[S241896]</a></p>
                    
                    <ul>
                        <li class="nested_variant">
                            <h3>tikanga whakatau whakaaetanga <b class="nested_gloss">consent process</b> <a class="course_flag flag_pending" href="#">CONT</a> <a class="course_flag flag_limited" href="#">LD</a></h3>
                            <p><em>Ko te whakarite tikanga me te tira whakahaere i ngā whakaaetanga kia taea ai e ngā hapū me ngā iwi Māori whaipānga te uru ki roto i ngā tikanga whakatau whakaaetanga.</em><a href="#">[HOR2009]</a></p>
                            
                        </li>
                    </ul>

                </li>
                <li class="sense">
                    <h2>right</h2>
                    <p><em>Kei te tautoko te iwi Māori i tēnei Pire, nō te mea e kite ana rātou mā tēnei Pire ka oti he tikanga e taea ai e rātou te rīhi i ō rātou whenua.</em><a href="#">[S241901]</a></p>
                    <p>This sense refers to a right or interest, often in land, particularly in historical texts.</p>
                    <p>See also <a href="#">take</a>, <a href="#">tika</a></p>

                    <ul>
                        <li class="nested_variant">
                            <h3> tikanga whakaora <b class="nested_gloss">remedy, relief</b> <a class="course_flag flag_limited" href="#">LD</a></h3>
                            <p><em>Ko te mahi hē ki te tangata ake, mā te tangata i mate i taua hē e kawe kia whakawākia, e tono ki tētahi tikanga whakaora mōna i runga i te whakawākanga.</em><a href="#">[BIM0476]</a></p>
                            <p>This usage refers to specific provisions in cases or in statute providing legal remedies to claimants.</p>
                            <p>See also <a href="#">rapu</a>, <a href="#">rongoā</a>, <a href="#">whakaora</a></p>
                        </li>
                    </ul>
                </li>
                <li class="sense">
                    <h2>terms, conditions</h2>
                    <p><em>Ko aua tū mahinga ika i rāhuitia ki ngā Māori i raro i [ngā] tikanga o te tīti hoko o [te iwi].</em><a href="#">[S241901]</a></p>
                    <p>See also <a href="#">ritenga</a></p>
                </li>
                <li class="sense">
                    <h2>protocol</h2>
                    <p><em>I te mea kua pau taku tāima, kāti me torutoru nei āku kupu, e taea hoki te pēhea i ngā tikanga o te Whare nei.</em><a href="#">[S241901]</a></p>
                    <p>This sense is often used in the context of House procedure.</p>
                    <p>See also <a href="#">kawa</a></p>
                </li>
                <li class="sense">
                    <h2>discretion <a class="course_flag flag_pending" href="#">HIST</a> <a class="course_flag flag_limited" href="#">LD</a></h2>
                    <p><em>Kāhore kau he mea i roto i tēnei ture e tukua kia pokanoa ki ngā tikanga o te Huperetini o te Porowini.</em><a href="#">[BIM0793]</a></p>
                </li>
            </ol>
			
            
        </div><!-- /content -->
    </section><!-- /main -->
    </div>
<?php
includeFile("footer.php");
