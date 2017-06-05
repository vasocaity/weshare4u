
<!DOCTYPE html>
<?php
include "includes/connect.php";
session_start();
$result = $pdo->query("SELECT * FROM news ORDER BY Date DESC");
$resultNews = $pdo->query("SELECT * FROM list_item ORDER BY Ddate DESC");
$result2 = $pdo->query("SELECT * FROM announce ORDER BY Date DESC");
$countRowNews = $result->rowCount();
$total_pageNews = ceil($countRowNews / 5);
$countRowAnnounces = $result2->rowCount();
$total_pageAnnounces = ceil($countRowAnnounces / 5);
?>
<html>
    <head>
        <title>WeShare4U</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="layout/styles/main.css" rel="stylesheet" type="text/css" media="all">
        <link href="layout/styles/mediaqueries.css" rel="stylesheet" type="text/css" media="all">
        <link href="layout/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="layout/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="layout/css/hover-min.css" rel="stylesheet">
        <link href="layout/css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>      
    </head>
    <body class="">
        <?php
        include 'menu.php';
        ?>
        <!-- content -->
        <div class="wrapper row3">
            <div id="container">
                <!-- ################################################################################################ -->
                <div id="homepage" class="clear">
                    <div class="two_third first">
                        <!-- #### -->
                        <div class="divider2"></div>
                        <!-- News -->
                        <div style="right:0px;">
                        </div>
                        <div class="two_third first" style="width:100%;">
                            <!--  <h2>News | ข่าว</h2> -->
                            <img src="images/news.png">
                            <article class="push30 clear">
                                <p id="results">
                                    <!-- results appear here -->

                                <div align="right">
                                    <button id="load_more_button">more</button> <!-- load button -->
                                    <div id='text'></div>
                                    </p>
                                </div>
                            </article>
                            <script type="text/javascript">
                                var track_page = 1; //track user click as page number, righ now page number 1
                                load_contents(track_page); //load content

                                $("#load_more_button").click(function (e) { //user clicks on button
                                    track_page++; //page number increment everytime user clicks load button
                                    load_contents(track_page); //load content
                                });

                                //Ajax load function
                                function load_contents(track_page) {
                                    $.post('fetch_pagesNew.php', {'page': track_page}, function (data) {

                                        if (track_page == <?php echo $total_pageNews; ?>) {
                                            //display text and disable load button if nothing to load
                                            $("#load_more_button").hide();
                                        }

                                        $("#results").append(data); //append data into #results element

                                        //scroll page to button element
                                        //$("html, body").animate({scrollTop: $("#load_more_button").offset().top}, 800);

                                        //hide loading image
                                        $('.animation_image').hide(); //hide loading image once data is received
                                    });
                                }

                            </script>

                        </div>
                        <div class="divider2"></div>

                        <!-- Annoucement -->
                        <div class="two_third first"  style="width:100%;" >
                            <!--  <h2>Annoucement | ประกาศ</h2> -->
                            <img src="images/Annoucement.png">
                            <article class="push30 clear">
                                <p id="resultsAnn">
                                    <!-- results appear here -->

                                <div align="right">
                                    <button id="load_more">more</button> <!-- load button -->
                                    </p>
                                </div>
                            </article>
                            <script type="text/javascript">
                                var track = 1; //track user click as page number, righ now page number 1
                                load2_contents(track); //load content

                                $("#load_more").click(function (a) { //user clicks on button
                                    track++; //page number increment everytime user clicks load button
                                    load2_contents(track); //load content
                                });
                                //Ajax load function
                                function load2_contents(track) {
                                    $('.animation_image').show(); //show loading image

                                    $.post('fetch_pagesAnn.php', {'pageAnn': track}, function (data2) {

                                        if (track == <?php echo $total_pageAnnounces; ?>) {
                                            //display text and disable load button if nothing to load
                                            $("#load_more").hide();
                                        }

                                        $("#resultsAnn").append(data2); //append data into #results element

                                        //scroll page to button element
                                        //$("html, body").animate({scrollTop: $("#container").offset().top},250);

                                        //hide loading image
                                        $('.animation_image').hide(); //hide loading image once data is received
                                    });
                                }
                            </script>
                            <!-- #### -->
                            <div class="clear"></div>
                        </div>
                        <!-- #### -->
                        <div class="clear"></div>
                    </div>
                </div>
                <!-- ################################################################################################ -->
                <div class="clear"></div>
            </div>

        </div>
        <?php
        include 'footer.php'
        ?>
        <!-- Scripts -->
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
        <script>window.jQuery || document.write('<script src="layout/scripts/jquery-latest.min.js"><\/script>\
<script src="layout/scripts/jquery-ui.min.js"><\/script>')</script>
        <script>jQuery(document).ready(function ($) {
        $('img').removeAttr('width height'); });</script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="layout/js/bootstrap.min.js"></script>
    </body>
</html>
