<!DOCTYPE html>
<?php
include "includes/connect.php";
session_start();
$Nid = $_GET["nid"];
if ($Nid == "") {
    header('Location: weshare4u.php');
    exit();
} else {
    $resultDetailNews = $pdo->prepare(" SELECT * FROM news WHERE Nid = ?");
    $resultDetailNews->bindParam(1, $Nid, PDO::PARAM_INT);
    $resultDetailNews->execute();

}

function DateThai($strDate) {
    $strYear = date("Y", strtotime($strDate)) + 543;
    $strMonth = date("n", strtotime($strDate));
    $strDay = date("j", strtotime($strDate));
    $strHour = date("H", strtotime($strDate));
    $strMinute = date("i", strtotime($strDate));
    $strSeconds = date("s", strtotime($strDate));
    $strMonthCut = Array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
    $strMonthThai = $strMonthCut[$strMonth];
    return "$strDay $strMonthThai $strYear";
}
?>
<html>
    <head>
        <title>WeShare4U | รายละเอียดข่าว</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="layout/styles/main.css" rel="stylesheet" type="text/css" media="all">
        <link href="layout/styles/mediaqueries.css" rel="stylesheet" type="text/css" media="all">
        <link href="layout/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="layout/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="layout/css/hover-min.css" rel="stylesheet">
        <style>
            .posi{
                position: relative;
            }
            #over{
                margin-left: auto;
                margin-right: auto;
                display: block;
                width: 550px;
            }            
        </style>
    </head>
    <body class="">
        <?php
        include 'menu.php';
        ?>
        <!-- content -->
 <div id="homepage" class="clear">
 <br><br><br>
<div class="row">
    <?php while ($row = $resultDetailNews->fetch()): ?>
  <div class="col-md-10">
        <h2><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['nameNews'] ?></b></h2><br><br>
        <img src="images/<?php echo $row['Pic'] ?>.png" id="over">
        <br><br>
        <div class="col-md-10" style="left: auto;">
        <article class="push30">
         <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $row['Detail'] ?></p>
        </article>
        </div>
  </div>
  <div class="col-md-2">วันที่: <?php   $strDate = $row['Date'];echo DateThai($strDate);
   ?><br>ผู้เขียน:  นายใจดี สุดยอด</div>
   <?php endwhile; ?>
</div>
</div>
        <!-- #######################  FOOTER   ############################## -->
        <br>
        <?php
        include 'footer.php'
        ?>
        <!-- Scripts -->
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
        <script>window.jQuery || document.write('<script src="layout/scripts/jquery-latest.min.js"><\/script>\
<script src="layout/scripts/jquery-ui.min.js"><\/script>')</script>
        <script>jQuery(document).ready(function ($) {
        $('img').removeAttr('width height');
    });</script>
        <script src="layout/scripts/jquery-mobilemenu.min.js"></script>
        <script src="layout/scripts/custom.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="layout/js/bootstrap.min.js"></script>
    </body>
</html>
