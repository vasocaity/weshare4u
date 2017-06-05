<?php
include "../includes/connect.php";
include "cart.php";

if (!isset($_SESSION["username"]))
    header("location: index.php");

?>
<html>
    <head>
        <title>Weshare4U </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../layout/styles/main.css" rel="stylesheet" type="text/css" media="all">
        <link href="../layout/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../layout/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="../layout/css/hover-min.css" rel="stylesheet">
        <link href="../layout/css/style.css" rel="stylesheet">
        <script type="text/javascript" src="layout/js/jquery-1.9.0.min.js"></script>     
    </head>
    <body>
        <?php
        include 'menuForINeedHelp.php';
        ?>
        <br>
        <style type="text/css">
            .error {
                background-color: #ffbc7c;
            }    
        </style>
        <div>
            <div class="container">
                <div class="panel panel-default">             
                    <div class="panel-body">
                        I'm Ready Too Get Them.
                    </div>                                                                                       
                </div>
            </div>            

        </div>
    </div>
</div>
<div class="clear"></div><br><br>
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
<script src="layout/scripts/custom.js"></script>
<script src="../https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="../layout/js/bootstrap.min.js"></script>
</body>
</html>