
<?php
include "../includes/connect.php";
session_start();
  if(!isset($_SESSION["username"]))
          header("location: index.php");
  $username = $_SESSION["username"];
$Lid = $_GET['lid'];
$resultEdit = $pdo->prepare("SELECT * FROM list_item WHERE Lid = ?");
$resultEdit->bindParam(1, $Lid);
$resultEdit->execute();
$DeliveryType = $pdo->prepare(" SELECT * FROM appointment WHERE Lid = :Lid");
$DeliveryType->bindParam(':Lid', $Lid);
$DeliveryType->execute();
?>
<html>
    <head>
        <title>WeShare4U | แก้ไขของบริจาค</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../layout/styles/main.css" rel="stylesheet" type="text/css" media="all">
        <link href="../layout/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../layout/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="../layout/css/hover-min.css" rel="stylesheet">
        <link href="../layout/css/style.css" rel="stylesheet">
        <script type="text/javascript" src="../layout/js/jquery-1.9.0.min.js"></script>
        <script type="text/javascript" src="../layout/js/editFunction.js"></script>
    </head>
    <body>
        <?php
        include 'menu.php';
        ?>
        <br>
        <style type="text/css">
            .width{
                width: 550px;
            }
            .error {
                background-color: #ffbc7c;
            }
        </style>
        <div>
            <div class="container">
                <fieldset>
                    <legend><h3>แก้ไขรายละเอียดของบริจาค: </h3></legend>
                    <div>
                        <form action="update_item.php" method="post" enctype="multipart/form-data" class="form-horizontal" autocomplete="off" accept-charset="UTF-8">
                            <?php while ($row = $resultEdit->fetch()) : ?>
                                <input type="hidden" name="Lid" value="<?php echo $row["Lid"]; ?>">
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">ชื่อของบริจาค: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="Lname" name="Lname" value="<?php echo $row['Lname']; ?>" >
                                        <p id="LnameError" style="color: red;"></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">ประเภทบริจาค: </label>
                                    <div class="col-sm-10">
                                        <select name="type" id="select">
                                        <option value="<?php echo $row['ItemType']; ?>" id="type2"><?php echo $row['ItemType']; ?></option>
                                        <option value="กระเป๋า" id="mapType">กระเป๋า</option>
                                        <option value="อุปกรณ์การเขียนและลบคำผิด" id="mapType">อุปกรณ์การเขียนและลบคำผิด</option>
                                        <option value="สีและอุปกรณ์งานศิลป์" id="mapType">สีและอุปกรณ์งานศิลป์</option>
                                        <option value="ผลิตภัณฑ์กระดาษ" id="mapType">ผลิตภัณฑ์กระดาษ</option>
                                        <option value="อุปกรณ์สำนักงาน" id="mapType">อุปกรณ์สำนักงาน</option>
<!-- Check type of item if this type equal hide option and check if #select != 'กระเป๋า' hide input depth     -->
                                        <script>
                                        var typei = "<?php echo $row['ItemType']; ?>";
                                        var delivery = "<?php echo $row['DeliveryType']; ?>";
                                        $(document).ready(function () {
                                        function getTypeItem(typei){
                                            if ($('#select').val() == typei && $('#select').val() == 'กระเป๋า') {
                                                $("div.bag").hide();
                                                $("#bag").show();
                                            } else {
                                                $("div.bag").hide();
                                                $("#bag").hide();
                                            }
                                            if ($('#type2').val() == typei && $('#select :selected').val()) {
                                                $('#type2').hide();
                                            }
                                        }
                                        getTypeItem(typei); //Call function getTypeItem
                                        });
                                        </script>
                                        </select>
                                    </div>
                                </div>
                                <!-- **************************** Descript of donate item  ******************************* -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">คำอธิบายของบริจาค: </label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control col-sm-8" rows="3" id="Descript" name="Descript" ><?php echo $row['Descript'];?></textarea>
                                        <p id="DescriptError" style="color: red;"></p>
                                    </div>
                                </div>
                                <!-- **************************** condi of donate item  ******************************* -->
                               <div class="form-group">
                                    <label class="col-sm-2 control-label">สภาพของบริจาค: </label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control col-sm-8" rows="3" id="condi" name="condi"><?php echo $row['Condi'];?></textarea>
                                        <p id="condiError" style="color: red;"></p>
                                    </div>
                                </div>
                                <!-- ******************** Upload image of donate item  ************************* -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">รูปของบริจาค: </label>
                                    <div class="col-sm-10">
                                        <img src="../images/<?php echo $row['Pic_list']; ?>" class="width"><br><br>
                                        <input type="file" name="Pic_list"  accept="image/*" id="myFile">
                                        <p style="color: red;"><i>**ขนาดไม่เกิด 2 เมกะไบต์**</i></p>
                                    </div>
                                </div>
                                 <!-- **************************** Amount of donate item  ******************************* -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">จำนวนของบริจาค: </label>
                                    <div class="col-sm-10">
                                        <input type="number" name="Amount" min="1" id="Amount" value="<?php echo $row['Amount']; ?>">
                                        <p id="AmountError" style="color: red;"></p>
                                    </div>
                                </div>
                                <!-- **************************** Width of donate item  ******************************* -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">ความกว้าง: </label>
                                    <div class="col-sm-10">
                                        <input type="number" name="Width" min="0" step="0.01" id="Width" value="<?php echo $row['Width']; ?>">
                                        <p id="WidthError" style="color: red;"></p>
                                    </div>
                                </div>
                                 <!-- **************************** Height of donate item  ******************************* -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">ความยาว: </label>
                                    <div class="col-sm-10">
                                        <input type="number" name="Height" min="0" step="0.01" id="Height" value="<?php echo $row['Height']; ?>">
                                        <p id="HeightError" style="color: red;"></p>
                                    </div>
                                </div>
                                <!-- **************************** Depth of donate item  ******************************* -->
                                <div class="form-group bag" id="bag">
                                    <label class="col-sm-2 control-label">ความลึก: </label>
                                    <div class="col-sm-10">
                                        <input type="number" name="Depth" min="0" step="0.01" id="Depth" value="<?php echo $row['Depth']; ?>">
                                        <p id="DepthError" style="color: red;"></p>
                                    </div>
                                </div>
                                <!-- ****************************** Type of dalivery ********************************* -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">วิธีการจัดส่งของบริจาค: </label>
                                    <div class="col-sm-10">
                                        <label class="radio-inline">
                                            <input type="radio" class="radio1" name="DeliveryType" id="PostOffice" value="ไปรษณีย์" ><p style="left: 40px; position: relative;"> ไปรษณีย์ </p>
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" class="radio1" name="DeliveryType" id="Organization" value="รับที่องค์กร"><p style="left: 40px; position: relative;"> รับที่องค์กร </p>
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" class="radio1" name="DeliveryType" id="Appointment" value="รับที่จุดนัดพบ"><p style="left: 45px; position: relative;"> รับที่จุดนัดพบ</p>
                                        </label><br>
                                        <p id="DeliveryTypeError" style="color: red;"></p>
                                        <br>
                                        <div id="addss" class="desc" style="display: none;" style="left: 45px; position: relative;">
                                        <?php $address = $DeliveryType->fetch(); ?>
                                            <textarea  id="address" class="form-control" name="address" required="ture" placeholder="สถานที่นัดรับของบริจาค"></textarea>
                                            <p id="addressError" style="color: red;"></p>
                                        </div>
                                        <?php date_default_timezone_set("Asia/Bangkok"); ?>
                                        <input type="hidden" name="Ddate" value="<?php echo date("Y-m-d H:i:s"); ?>">
                                    </div>

                                </div>
                            <?php endwhile; ?>
    <!-- ************************* Show textarea address and getTypeDelivery************************************-->
                                     <script>
                                    var add = "<?php echo $address['address']; ?>"
                                    s = add; // defined as null
                                    jQuery.isEmptyObject(s); // will return true;
                                                $("#Organization").click(function () {
                                                    $("#address").text(" ");
                                                  //  console.log("2");
                                                });
                                                $("#PostOffice").click(function () {
                                                    $("#address").text(" ");
                                                });
                                    $(document).ready(function () {
                                            if(!s){
                                                $("#address").text(" ");
                                                $("#address").click(function () {
                                                    $("#address").text("");
                                                });
                                                $("#Appointment").click(function () {
                                                    $("#address").text("");
                                                });
                                            }else{
                                                $("#address").text("<?php echo $address['address']; ?>");
                                            }
                                    });
                                    function getTypeDelivery(delivery){

                                         if($('input[value='+delivery+']').val() == delivery){
                                         $('input[value='+delivery+']').prop('checked', true);
                                             //console.log("delivery");
                                         }
                                         if (delivery == 'รับที่จุดนัดพบ') {
                                         $("div.desc").hide();
                                         $("#addss").show();
                                        }
                                    }
                                    getTypeDelivery(delivery); //Call function getTypeDelivery
                                    </script>
                            <!-- Button Add -->
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" name="submit" id="submitEdit">Edit
                                    </button>
                                </div>
                            </div>
                        </form>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="clear"></div><br><br>
    <?php
    include 'footer.php'
    ?>

    <!-- ************************************Scripts ***********************************************-->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
    <script>window.jQuery || document.write('<script src="../layout/scripts/jquery-latest.min.js"><\/script>\
<script src="../layout/scripts/jquery-ui.min.js"><\/script>')</script>
    <script>jQuery(document).ready(function ($) {
        $('img').removeAttr('width height'); });</script>
    <script src="../layout/scripts/jquery-mobilemenu.min.js"></script>
    <script src="../layout/scripts/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../layout/js/bootstrap.min.js"></script>
</body>
</html>
