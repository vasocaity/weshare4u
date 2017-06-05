<?php
include "../includes/connect.php";
include "cart.php";

if (!isset($_SESSION["username"]))
    header("location: index.php");
?>
<html>
    <head>
        <title>Weshare4U | ตะกร้าของบริจาค</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../layout/styles/main.css" rel="stylesheet" type="text/css" media="all">
        <link href="../layout/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="../layout/css/hover-min.css" rel="stylesheet">
        <link href="../layout/css/style.css" rel="stylesheet">
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

        <div class="container">
            <div class="panel panel-default">             
                <div class="panel-heading"><h4>ตะกร้าของบริจาค</h4></div>
                <div class="panel-body">
                    <?php
                    // $max = count($_SESSION["cart"]);
                    // ถ้าไม่มีตะกร้าสินค้าใน session
                    if (!isset($_SESSION["cart"])) {
                        echo "ไม่มีของบริจาคใดๆในตะกร้า!<br>";
                        // ถ้ามีตะกร้าสินค้าใน session จะแสดงรายการสินค้าในตะกร้า
                    } else {
                        echo "<table class='table'><tr><th>รูป</th><th>ชื่อสินค้า</th><th>จำนวน</th></tr>";
                        $sum = 0; // ใช้หาผลรวมราคาสินค้าในตะกร้า
                        $max = count($_SESSION["cart"]);
                        $amount = 0;
                        for ($i = 0; $i < $max; $i++) {  // วนลูปดึงสินค้าแต่ชิ้นออกมาแสดง
                            $lid = $_SESSION["cart"][$i]["lid"];
                            $qty = $_SESSION["cart"][$i]["qty"];
                            $Delivery = $pdo->prepare(" SELECT * FROM appointment WHERE Lid = ?");
                            $Delivery->bindParam(1, $lid);
                            $Delivery->execute();
                            $answer = $Delivery->fetch();

                            $results = $pdo->prepare("SELECT * FROM list_item WHERE Lid = ?");
                            $results->bindParam(1, $lid);
                            $results->execute();
                            $row = $results->fetch();
                            $amount = $row["Amount"];
                            ?>
                            <tr>
                                <td><img src="../images/<?php echo $row['Pic_list'] ?>" style="width: auto; height: 200px;"></td>
                                <td><b><?php echo $row["Lname"] ?></b></td>
                                <td> 
                                    <button id="setIdEdit<?php echo $i; ?>" class="btn btn-default">
                                        <a href="DonateItemDetail.php?lid=<?php echo $lid ?>">แก้ไข</a>
                                    </button>&nbsp;&nbsp;
                                    <input type="number" name="qty" id="AmountItem<?php echo $i; ?>" class="AmountItem" value="<?php echo $_SESSION["cart"][$i]["qty"]; ?>" min="0" max=<?php echo $amount; ?> style="width: 100px; height: 35px;" onchange="checkAmount('<?= $row['Lid']; ?>', '<?= $amount; ?>','<?= $i; ?>')" >
                                           &nbsp;
                                           <button id="setIdDelete<?php echo $i; ?>" class="btn btn-default setIdDelete" onclick="deleteItem('<?= $row['Lid']; ?>')" >
                                        <a data-toggle="modal" href="#CartModal">
                                            <img src="../images/bin.png" style="width: 20px; height: auto;">
                                        </a>
                                    </button>
                                     <p id="AmountItemError<?php echo $i; ?>" style="color: red;"></p>

                                </td>                                    
                            </tr>
                        <?php } // จบลูป for  ?>
                        </table><br><br>
                    <?php } // จบ else  ?>                    
                </div>                                                                                       
            </div>
            <!-- Button Add -->
            <div class="form-group">
                <div>
                    <button type="button" class="btn btn-primary btn-lg" name="Continue" id="Continue">
                        <a href="DonateItem.php" style="color: white;">Continue looking</a></button>

                    <button type="button" class="btn btn-warning btn-lg" name="IamReady" id="IamReady">
                        <a href="Ready.php" style="color: white;">I'm ready to get them</a></button>
                </div>                    
            </div> 
        </div>            

    </div>
</div>
</div>            
<div class="clear"></div><br><br>
<script>
    function checkAmount(lid,amout,i) {
        console.log(amout);
        $('.AmountItem').on('blur', function (e) {
            var itemAmount = $(this).val();
        //    console.log(lid);
         //   console.log(itemAmount);
            if (itemAmount > amout) {
                console.log("ssssssss");
            //    $('#AmountItemError').text("จำนวนของบริจาคของท่านไม่ถูกต้องกรุณาลองใหม่อีกครั้ง");
            }         
            if (itemAmount == 0) {
                setvalueinModal(lid);
                deleteItem(lid);
            } if(itemAmount < 0){
                alert("จำนวนของบริจาคจะต้องมากกว่าหรือเท่ากับ 0");
                window.location.reload();                
            }
             else {
                editCart(lid, itemAmount,amout,i);
            }
        });

    }
    function showcountItem() {
        $.ajax({
            url: 'Countcart.php',
            type: 'GET',
            //dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
            //data: {param1: 'value1'}
        })
                .done(function (msg) {
                    $("#countcart").html(msg);

                    //    console.log(msg);
                })
                .fail(function () {
                    //  console.log("error");
                })
                .always(function () {
                    //    console.log("complete");
                });

    }
    function setvalueinModal(id) {
        $("#modalID").val(id);
    }
    function deleteItem(lid) {
        var r = confirm("คุณต้องการลบของบริจาคออกจากตะกร้าใช่หรือไม่!");
        if (r == true) {
            lid = lid;
            var action = "delete";
            $.ajax({
                url: 'cart.php',
                data: {
                    'lid': lid,
                    'action': action
                },
                type: "GET",
                success: function (response) {
                    // showcart();
                    showcountItem();
                    window.location.reload();
                    //$("#ShowCart").stop(true, true).delay(200).fadeIn(500);
                }
            });
        }
    }
    function editCart(itemid, itemAmount,amout,i) {
        var lid = itemid;
        var action = "update";
        var qty = itemAmount;
        var max = amout;
            $.ajax({
                url: 'cart.php',
                data: {
                    'lid': lid,
                    'action': action,
                    'qty': qty,
                    'max': max
                },
                type: "GET",
                success: function (response) {
                   if (response == "fasle") {
                    $('#AmountItemError'+i).text("จำนวนของบริจาคของท่านไม่ถูกต้องกรุณาลองใหม่อีกครั้ง");
                }else{
                  window.location.reload();
                  $('#AmountItemError'+i).text("");
                }
                   console.log(response);
                    //
                }
            });

    }
</script>
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
