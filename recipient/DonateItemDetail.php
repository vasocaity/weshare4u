<!DOCTYPE html>
<?php
include "../includes/connect.php";
include "cart.php";

if (!isset($_SESSION["username"]))
    header("location: index.php");
$username = $_SESSION["username"];
$Lid = $_GET["lid"];
if ($Lid == "") {
    header('Location: weshare4u.php');
    exit();
} else {
    $resultDonate = $pdo->prepare(" SELECT * FROM list_item WHERE lid = :lid");
    $resultDonate->bindParam(':lid', $Lid);
    $resultDonate->execute();
    $resultRefer = $pdo->prepare(" SELECT * FROM list_item WHERE lid = :lid");
    $resultRefer->bindParam(':lid', $Lid);
    $resultRefer->execute();
    $DeliveryType = $pdo->prepare(" SELECT * FROM appointment WHERE Lid = :Lid");
    $DeliveryType->bindParam(':Lid', $Lid);
    $DeliveryType->execute();
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
        <title>WeShare4U | รายละเอียดสินค้าบริจาค</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../layout/styles/main.css" rel="stylesheet" type="text/css" media="all">
        <link href="../layout/styles/mediaqueries.css" rel="stylesheet" type="text/css" media="all">
        <link href="../layout/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../layout/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="../layout/css/hover-min.css" rel="stylesheet">
        <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
        <script type="text/javascript" src="../layout/js/jquery-1.9.0.min.js"></script>
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
        include 'menuForINeedHelp.php';
        ?>
        <div class="row3">
            <div id="container">
                <!-- ###########################Show Detail of Donate Item#################################### -->
                <div class="medium-6 columns">
                    <?php while ($rows = $resultRefer->fetch()): ?>
                        <img class="thumbnail wid" src="../images/<?php echo $rows['Pic_list'] ?>">
                    <?php endwhile; ?>
                </div>

                <!-- #######################  Content of Items   ############################## -->
                <div class="boxholder medium-6 large-5 columns">
                    <?php
                    while ($row = $resultDonate->fetch()):
                        $name = $row['ItemType'];
                        $id = $row['Lid'];
                        ?>
                        <h3><?php echo $row['Lname']; ?></h3>
                        <hr>
                        <p><b>รายละเอียด:</b> <?php echo $row['Descript'] ?></p>
                        <p><b>สภาพ:</b> <?php echo $row['Condi'] ?></p>
                        <p><b>ประเภทของบริจาค:</b> <?php echo $row['ItemType']; ?></p>                        
                        <p><b>ความกว้าง:</b> <?php echo $row['Width'] ?>  เซนติเมตร</p>
                        <p><b>ความสูง:</b> <?php echo $row['Height'] ?>  เซนติเมตร</p>
                        <p  id="Depth"><b>ความหนา หรือความลึก:</b> <?php echo $row['Depth'] ?>  เซนติเมตร</p>
                        <p><b>ผู้บริจาค:</b> นายนาย</p>
                        <p><b>ประเภทการจัดส่งของบริจาค:</b> <?php echo $row['DeliveryType']; ?> </p>
                        <?php
                        $checkType = strcmp($row['DeliveryType'], "รับที่จุดนัดพบ");
                        if ($checkType == 0) {
                            $address = $DeliveryType->fetch();
                            ?>
                            <p><b>สถานที่นัดรับของบริจาค :</b> <?php echo $address['address'];
                        } ?> </p>         
                        <p><b>วันที่บริจาค:</b>
                            <?php
                            $strDateNews = $row['Ddate'];
                            echo DateThai($strDateNews);
                            ?>
                        </p>
                        <label><b style="font-size: 16px;">จำนวน:</b>
                            <select style="width:100%;" id="AmountDonate">
                                <?php for ($i = 1; $i <= $row['Amount']; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                            </select>
                        </label><br>
                        <br>
                        <button class="button large expanded" style="width: 30%; height: 10%;" id="IneedIt">I need it</button>                                                   
                        <?php endwhile; ?>

                </div>
                <hr>

                <div class="column text-center">
                     <!--<img src="images/leaf.png" style="width: 29%;"> -->
                    <h4>ของบริจาคที่เกี่ยวข้อง</h4>
                    <hr>
                </div>
                <!-- #######################  Donate Item List   ############################## -->
                <div class="small-up-2 medium-up-3 medium-up-4">
                    <?php
                    $resultList = $pdo->query(" SELECT * FROM list_item  WHERE ItemType LIKE '%$name%' Limit 0,4");
                    while ($rows = $resultList->fetch()):
                        ?>
                        <div class="column">
                            <a href="DonateItemDetail.php?lid=<?php echo $rows['Lid'] ?>" target="_blank"><img class="thumbnail wi" src="../images/<?php echo $rows['Pic_list'] ?>"></a>
                            <h5>  <b> <?php echo $rows['Lname'] ?></b></h5>
                            <i><a href="DonateItemDetail.php?lid=<?php echo $rows['Lid'] ?>" target="_blank"> more detail</a></i><br><br>
                        </div>
<?php endwhile; ?>
                </div>
                <div class="clear"></div>
            </div>
        </div>


        <script>
            $(document).ready(function () {
            function showcountItem (){
                $.ajax({
                    url: 'countCart.php',
                    type: 'GET',
                    //dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
                    //data: {param1: 'value1'}
                })
                    .done(function(msg) {
                        $("#countcart").html(msg);

                        console.log(msg);
                    })
                    .fail(function() {
                      //  console.log("error");
                    })
                    .always(function() {
                    //    console.log("complete");
                    });

            }        
                   
                $("#IneedIt").click(function () {
                showcountItem();
                    var lid = "<?php echo $id; ?>";
                    var qty = $('#AmountDonate option:selected').val();
                    var action = "add";
                    console.log(qty);
                    $.ajax({
                        url: 'cart.php',
                        data: {
                            'lid': lid,
                            'qty': qty,
                            'action': action
                        },
                        type: "GET",
                        success: function (response) {                          
                            showcart();
                            showcountItem();
                        //    window.location.reload();
                            $("#ShowCart").stop(true, true).delay(200).fadeIn(500);
                        }
                    });
                    
                });          
            });
        </script>

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
        <script src="../layout/scripts/jquery-mobilemenu.min.js"></script>
        <script src="../layout/scripts/custom.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../layout/js/bootstrap.min.js"></script>
    </body>
</html>
