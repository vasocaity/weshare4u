<!DOCTYPE html>
<?php
include "../includes/connect.php";
session_start();
  if(!isset($_SESSION["username"]))
          header("location: index.php");
  $username = $_SESSION["username"];
$Lid = $_GET["lid"];
$resultShow = $pdo->prepare(" SELECT * FROM list_item WHERE Lid = :Lid");
$resultShow->bindParam(':Lid', $Lid);
$resultShow->execute();
$resultRefer = $pdo->prepare(" SELECT * FROM list_item WHERE Lid = :Lid");
$resultRefer->bindParam(':Lid', $Lid);
$resultRefer->execute();
$delivery = $pdo->prepare(" SELECT * FROM list_item WHERE Lid = :Lid");
$delivery->bindParam(':Lid', $Lid);
$delivery->execute();
$answer = $delivery->fetch();
$DeliveryType = $pdo->prepare(" SELECT * FROM appointment WHERE Lid = :Lid");
$DeliveryType->bindParam(':Lid', $answer['Lid']);
$DeliveryType->execute();

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
        <title>WeShare4U </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../layout/styles/main.css" rel="stylesheet" type="text/css" media="all">
        <link href="../layout/styles/mediaqueries.css" rel="stylesheet" type="text/css" media="all">
        <link href="../layout/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../layout/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="../layout/css/hover-min.css" rel="stylesheet">
        <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
        <script type="text/javascript" src="../layout/js/jquery-3.2.1.min.js"></script>
        <style>
            .wid{
                width: 500px;
                height: 500px;
            }
            .wi{
                width: 400px;
                height: 200px;
            }
            .size{
                font-size: 14px;
            }
        </style>

    </head>
    <body class="">
        <?php
        include 'menu.php';
        ?>
        <div class="row3">
            <div id="container">
                <h3>รายละเอียดของบริจาค</h3>
                <!-- ###########################Show Detail of Donate Item#################################### -->
                <div class="medium-6 columns">
                    <?php while ($rows = $resultRefer->fetch()): ?>
                        <img class="thumbnail wid" src="../images/<?php echo $rows['Pic_list'] ?>">
                    <?php endwhile; ?>
                </div>

                <!-- #######################  Content of Items   ############################## -->
                <div class="boxholder medium-6 large-5 columns">
                    <?php
                    while ($row = $resultShow->fetch()):
                        $Lid = $row['Lid'];
                        ?>
                        <h3><?php echo $row['Lname'];
                    $name = $row['Lname']; ?></h3>
                        <hr>
                        <p><b>รายละเอียด:</b> <?php echo $row['Descript'] ?></p>
                        <p><b>สภาพของบริจาค:</b> <?php echo $row['Condi'] ?></p>
                        <p><b>ประเภทของบริจาค:</b> <?php echo $row['ItemType'] ?></p>
                        <p><b>ความกว้าง:</b> <?php echo $row['Width'] ?> เซนติเมตร</p>
                        <p><b>ความสูง:</b> <?php echo $row['Height'] ?>  เซนติเมตร</p>
                        <?php if ($row['Depth'] != null) { ?>
                            <p><b>ความหนา หรือความลึก:</b> <?php echo $row['Depth'] ?>  เซนติเมตร</p>
    <?php } ?>
                        <p><b>ผู้บริจาค:</b> นายนาย</p>
                        <p><b>วันที่บริจาค:</b>
                            <?php
                            $strDateNews = $row['Ddate'];
                            echo DateThai($strDateNews);
                            ?>
                        </p>
                        <p><b>จำนวน:</b> <?php echo $row['Amount']; ?> ชิ้น</p>
                        <p><b>ประเภทการจัดส่งของบริจาค:</b> <?php echo $row['DeliveryType']; ?> </p>
                        <!-- **********************Show meeting point ******************************** -->
                        <?php
                        $checkType = strcmp($row['DeliveryType'], "รับที่จุดนัดพบ");
                        if ($checkType == 0) {
                            $address = $DeliveryType->fetch();
                            ?>
                            <p><b>สถานที่นัดรับของบริจาค :</b> <?php echo $address['address']; ?> </p><br>
    <?php } endwhile; ?>
                </div>
                <div class="clear" align="center">
                    <br><br>
                     <!-- #######################  BUTTON   ############################## -->
                    <button>
                        <a href="EditItem.php?lid=<?php echo $Lid ?>" name="edit" class="button large expanded" style="width: 200px; height: 10%; background-color: orange;">แก้ไข</a>
                    </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button>
                        <a href="AddItem.php" name="add" class="button large expanded" style="width: 200px; height: 10%;">บริจาคเพิ่ม</a>
                        </button>
                </div>

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../layout/js/bootstrap.min.js"></script>
    </body>
</html>