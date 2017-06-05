<?php
include "../includes/connect.php";
session_start();
  if(!isset($_SESSION["username"]))
          header("location: index.php");
  $username = $_SESSION["username"];
?>
<html>
    <head>
        <title>WeShare4U | เพิ่มของบริจาค</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../layout/styles/main.css" rel="stylesheet" type="text/css" media="all">
        <link href="../layout/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../layout/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="../layout/css/hover-min.css" rel="stylesheet">
        <link href="../layout/css/style.css" rel="stylesheet">
        <script type="text/javascript" src="../layout/js/jquery-1.9.0.min.js"></script>
        <script type="text/javascript" src="../layout/js/addFunction.js"></script>

    </head>
    <body>
        <?php
        include 'menu.php';
        ?>
        <br>
<style type="text/css">
.error {
   background-color: #ffbc7c;
}    
</style>
        <div>
            <div class="container">
                <fieldset>
                    <legend><h3>กรอกรายละเอียดของบริจาค: </h3></legend>
                    <div>
                        <form action="upload_item.php" method="post" enctype="multipart/form-data" class="form-horizontal" autocomplete="off" name="addItem">
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">ชื่อของบริจาค: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Lname" name="Lname" placeholder="ชื่อของบริจาค" autofocus="ture">
                                    <p id="LnameError" style="color: red;"></p>
                                </div>
                            </div>
                             <!-- **************************** Type of donate item  ******************************* -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">ประเภทบริจาค: </label>
                                <div class="col-sm-10">                                       
                                    <select name="type">
                                        <option value="กระเป๋า">กระเป๋า</option>                
                                        <option value="อุปกรณ์การเขียนและลบคำผิด" >อุปกรณ์การเขียนและลบคำผิด</option>
                                        <option value="สีและอุปกรณ์งานศิลป์">สีและอุปกรณ์งานศิลป์</option>
                                        <option value="ผลิตภัณฑ์กระดาษ">ผลิตภัณฑ์กระดาษ</option>
                                        <option value="อุปกรณ์สำนักงาน">อุปกรณ์สำนักงาน</option>        
                                    </select>
                                </div>
                            </div>
                             <!-- **************************** Description  ******************************* -->            
                            <div class="form-group">
                                <label class="col-sm-2 control-label">คำอธิบายของบริจาค: </label>
                                <div class="col-sm-10">           
                                    <textarea class="form-control col-sm-8" rows="3" name="Descript" id="Descript" placeholder="คำอธิบายของบริจาค"></textarea>
                                    <p id="DescriptError" style="color: red;"></p>                                    
                                </div>
                            </div>
                             <!-- **************************** Condition of donate item  ******************************* -->
                           <div class="form-group">
                                <label class="col-sm-2 control-label">สภาพของบริจาค: </label>
                                <div class="col-sm-10">           
                                    <textarea class="form-control col-sm-8" rows="3" name="condi" id="condi" placeholder="สภาพของบริจาค"></textarea>
                                    <p id="condiError" style="color: red;"></p> 
                                </div>
                            </div>                                       
                            <!-- **************************** Upload image  ******************************* -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">รูปของบริจาค: </label>
                                <div class="col-sm-10">                                       
                                    <input type="file" name="Pic_list"  accept="image/*" id="myFile">
                                    <p style="color: red;"><i>**ขนาดไม่เกิน 2 เมกะไบต์**</i></p>
                                </div>
                            </div>
                            <!-- **************************** Amount  ******************************* -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">จำนวนของบริจาค: </label>
                                <div class="col-sm-10">                                       
                                    <input type="number" name="Amount" min="1" step="0" placeholder="จำนวนของบริจาค" id="Amount">
                                    <p id="AmountError" style="color: red;"></p> 
                                </div>
                            </div>
                            <!-- **************************** Width  ******************************* -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">ความกว้าง: </label>
                                <div class="col-sm-10">                                       
                                    <input type="number" name="Width" min="0"  step="0.01" id="Width" placeholder="ความกว้าง หน่วยเป็นเซนติเมตร">
                                    <p id="WidthError" style="color: red;"></p>
                                </div>
                            </div>
                             <!-- **************************** Height  ******************************* -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">ความยาว: </label>
                                <div class="col-sm-10">                                       
                                    <input type="number" name="Height" min="0" step="0.01" id="Height" placeholder="ความยาว หน่วยเป็นเซนติเมตร">
                                    <p id="HeightError" style="color: red;"></p>
                                </div>
                            </div>
                             <!-- **************************** Depth  ******************************* -->
                            <div class="form-group bag" id="bag">
                                <label class="col-sm-2 control-label">ความลึก: </label>
                                <div class="col-sm-10">                                       
                                    <input type="number" name="Depth" min="0" step="0.01" id="Depth" placeholder="ความลึก หน่วยเป็นเซนติเมตร">
                                    <p id="DepthError" style="color: red;"></p>
                                </div>
                            </div>                                               
                            <!-- **************************** Type of dalivery **************************** -->     
                            <div class="form-group">
                                <label class="col-sm-2 control-label">วิธีการจัดส่งของบริจาค: </label>
                                <div class="col-sm-10">                               
                                    <label class="radio-inline">
                                        <input type="radio" name="DeliveryType" id="PostOffice" value="ไปรษณีย์"><p style="left: 40px; position: relative;"> ไปรษณีย์ </p>
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="DeliveryType" id="Organization" value="รับที่องค์กร"><p style="left: 40px; position: relative;"> รับที่องค์กร </p>
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="DeliveryType" id="Appointment" value="รับที่จุดนัดพบ"><p style="left: 45px; position: relative;"> รับที่จุดนัดพบ</p>
                                    </label><br>
                                        <p id="DeliveryTypeError" style="color: red;"></p>
                                    <br>
                                    <div id="addss" class="desc" style="display: none;" style="left: 45px; position: relative;">
                                        <textarea  id="address" class="form-control" name="address" placeholder="สถานที่นัดรับของบริจาค"></textarea>
                                        <p id="addressError" style="color: red;"></p>
                                    </div>
                                    <?php date_default_timezone_set("Asia/Bangkok"); ?> 
                                    <input type="hidden" name="Ddate" value="<?php echo date("Y-m-d H:i:s"); ?>">     
                                </div>
                            </div>
                            <!-- Button Add -->
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" name="submitAdd" id="submitAdd">Add</button>
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
    <!-- Scripts -->
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