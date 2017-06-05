<!DOCTYPE html>
<?php
include "../includes/connect.php";
session_start();
if (!isset($_SESSION["username"]))
    header("location: index.php");
$username = $_SESSION["username"];

include "PageNavigation.php";
?>

<html>
    <head>
        <title>WeShare4U | รายการของบริจาค</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../layout/styles/main.css" rel="stylesheet" type="text/css" media="all">
        <link href="../layout/styles/mediaqueries.css" rel="stylesheet" type="text/css" media="all">
        <link href="../layout/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../layout/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="../layout/css/hover-min.css" rel="stylesheet">
        <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script type="text/javascript" src="../layout/js/seachFunction.js"></script>
        <style>
            .wid{
                width: 400px;
                height: 200px;
            }
            .im{
                position: absolute;
            }
            .imgB1 {
                width: 85px;
                z-index: 3;
            }
        </style>
    </head>

    <body class="">
        <?php
        include 'menuForINeedHelp.php';
        ?>
        <!-- content -->
        <!-- Search tool -->

        <div class="col-md-3" style="position: relative; float: right; left: -150px; clear: both;">
            <form action="DonateItem.php" class="form-horizontal">
                Search Item : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="input-group">
                    <input type="text" name="name" id="name"  placeholder="Search.." style="height: 40px;">
                    <span class="input-group-btn" style="width:0;">
                        <button style="position: relative; top:  -10px; left: 5px;" class="btn btn-warning" type="submit" id="search">Search</button>
                    </span>
                </div>
                <div style="position: relative; top: -10px;">
                <label class="radio-inline">
                    <input type="radio" name="SearchOption" id="SearchOption"  value="Name">
                    <p style="left: 20px; position: relative;  font-size: 15px;"> Name </p>
                </label>
                <label class="radio-inline">
                    <input type="radio" name="SearchOption" id="SearchOption" value="Catagory">
                    <p style="left: 40px; position: relative; font-size: 15px;"> Category </p>
                </label>
                <label class="radio-inline">
                    <input type="radio" name="SearchOption" id="SearchOption" value="Keyword">
                    <p style="left: 40px; position: relative; font-size: 15px;"> Keyword </p>
                </label>
                </div>
            </form>
            <p id="radioError" style="color: red;"></p>
            <p id="inputSearchError" style="color: red;"></p>            
        </div> 
        <!-- ***********************************Show Content***************************************************** -->
        <div class="row3">
            <div id="container">
            <h3><p id="showError" class="text-center"></p></h3>
                <div id="noResult">
                <div class="column text-center">                
                    <h2>รายการของบริจาค</h2>
                    <hr><br>
                </div>
                
                <div class=" small-up-2 medium-up-3 large-up-5">
                    <?php while ($rows = $resultDonate->fetch()): ?>
                        <?php
                        if ($ItemNews <= 3) {
                            ?>
                            <div class="column">
                                <a href="DonateItemDetail.php?lid=<?php echo $rows['Lid'] ?>" target="_blank">
                                    <img src="../images/icon_new.png" class="im imgB1">
                                    <img class="thumbnail wid" src="../images/<?php echo $rows['Pic_list'] ?>"></a>
                                <h5>  <b> <?php echo $rows['Lname'] ?></b></h5>
                                <i><a href="DonateItemDetail.php?lid=<?php echo $rows['Lid'] ?>" target="_blank"> more detail</a></i><br><br>
                            </div>
                            <?php
                            $ItemNews++;
                        } else {
                            ?>
                            <div class="column">
                                <a href="DonateItemDetail.php?lid=<?php echo $rows['Lid'] ?>" target="_blank">
                                    <img class="thumbnail wid" src="../images/<?php echo $rows['Pic_list'] ?>"></a>
                                <h5>  <b> <?php echo $rows['Lname'] ?></b></h5>
                                <i><a href="DonateItemDetail.php?lid=<?php echo $rows['Lid'] ?>" target="_blank"> more detail</a></i><br><br>
                            </div>
                        <?php
                        }

                    endwhile;
                    ?>
                </div>
                <!-- #########################    Page navigation    #################################### -->
                <div class="clear"></div>
                 <div style="position: absolute; float: left; left: 700px; height: 40px;">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <!-- Previous -->
                        <li>
                        </li>
                        <li <?php if ($page == 1 || $page == "") echo 'style="display:none; position: absolute; left: 0px; height: 40px;"'; ?>>
                            <a href="DonateItem.php?view=<?php echo $view ?>&page=<?php
                            if ($page == 0) {
                                echo $page = 1;
                            } else {
                                echo $page - 1;
                            }
                            ?>" aria-label="Previous">
                                <span aria-hidden="true"><img src="../images/arrow3.png" style="width: 25px;"></span>
                            </a>
                        </li>
                        <?php for ($i = 1; $i <= $total_page; $i++): ?>
                           
                            <li <?php if ($page == $i) echo 'class="active"'; 
                            echo 'style="font-size: 18px;"';
                            ?> ><a href="DonateItem.php?view=<?php echo $view ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a>
                            </li>
                            
                        <?php endfor; ?>
                        <!-- Next -->
                        <li <?php if ($page == $total_page) echo 'style="display:none; position: relative; float: left; font-size: 18px;"'; ?> >
                            <a href="DonateItem.php?view=<?php echo $view ?>&page=<?php echo $page + 1; ?>" aria-label="Next">
                                <span aria-hidden="true"><img src="../images/arrow2.png" style="width: 25px;"></span>
                            </a>
                        </li>
                    </ul>
                </nav>
                </div>
                <hr></div>
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
        <script>window.jQuery || document.write('<script src="../layout/scripts/jquery-latest.min.js"><\/script>\
<script src="../layout/scripts/jquery-ui.min.js"><\/script>')</script>
        <script>jQuery(document).ready(function ($) {
                $('img').removeAttr('width height');
            });</script>
        <script src="../layout/scripts/jquery-mobilemenu.min.js"></script>
        <script src="../layout/scripts/custom.js"></script>
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
        <script>
            $(document).foundation();
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../layout/js/bootstrap.min.js"></script>
    </body>
</html>
