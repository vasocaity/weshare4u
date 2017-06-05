<?php
include "../includes/connect.php";
?>

    <style type="text/css">
        div.scroll {
            width: 200px;
            height: 100px;
            overflow: auto;
        }

        .menu2{
            margin: 0 0 2px 100px;
            position: relative;
        }
        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
        }
        .posi{
            margin: 0 0 5px 55px;
            position: absolute;

        }
        .posi2{
            margin: 0 0 0 18px;
            position: absolute;
        }
        .color{
            color: #FF6633;
        }
        .img-overlay {
            position: absolute;
            float: right;
            width: 100%;
        }
        .fix{
            clear: both;
        }
        .img-overlay{
            position: relative;
            height: 200px;
            width: 100%;
            clear: both;

        }
        .text {
            position: absolute;
            width: 100%;
            float:left;
            top: 50px;
            font-size: 48px;
        }
        .size {
            font-size: 12px;

        }
        .login{
            top: 3.75%;
            left: auto;
            right: 10%;
            clear:right;
        }    
        a:hover + div.tab {
            display: block;
        }          
    </style>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow|Gloria+Hallelujah|Kanit" rel="stylesheet">
    <!--font -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="../layout/css/bootstrap.css" rel="stylesheet" media="screen"> 
    <link href="../layout/css/hover.css" rel="stylesheet">
    <script src='../layout/js/loginFunction.js'></script>
    <script src='cartFunction.js'></script>
    <script>
        $(document).ready(function() {
            $('.navbar a.dropdown-toggle').on('click', function(e) {
                var $el = $(this);
                var $parent = $(this).offsetParent(".dropdown-menu");
                $(this).parent("li").toggleClass('open');

                if(!$parent.parent().hasClass('nav')) {
                    $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
                }

                $('.nav li.open').not($(this).parents("li")).removeClass("open");

                return false;
            });
            function showcountItem (){
                $.ajax({
                    url: 'countCart.php',
                    type: 'GET',
                    //dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
                    //data: {param1: 'value1'}
                })
                    .done(function(msg) {
                        $("#countcart").html(msg);

                     //   console.log(msg)
                    })
                    .fail(function() {
                      //  console.log("error");
                    })
                    .always(function() {
                    //    console.log("complete");
                    });

            }
            showcountItem();
        });

    </script> 
    <div id="hgroup full_width clear img-wrapper">
        <span>
            <img src="../images/head.jpg" class="img-overlay">
        </span>
        <p class="text" align = "center">WeShare4U</p>
        <div style="display:block; float:right; width:auto; clear:right;">
            <ul class="nav navbar-right posi login">
                <li>
                    <?php
                    if (isset($_COOKIE["username"])) {
                        $uid = $_COOKIE["username"]; // ดึงค่าในคุกกี้ที่เคยเขียนไว้ออกมา
                        $_SESSION["status"] = $_COOKIE["status"];
                        if ($_SESSION["status"] == "member") {
                            $result = $pdo->query("SELECT * FROM user WHERE uid = '$uid'");
                            $row = $result->fetch();
                            $_SESSION["fname"] = $row["fname"]; // สร้าง Session ใหม่อัตโนมัติ
                            $_SESSION["lname"] = $row["lname"];
                            $_SESSION["username"] = $row["uid"];
                            //echo $row["uid"];
                        }
                    }
                    if (isset($_SESSION["username"])) {
                        //menu for user
                        if ($_SESSION["status"] == 'member') {
                            ?>                           

                        <?php } ?>
<div style="display:block; float:right; width:auto; clear:right; right: auto;" class="login col-md-3 menu2"><form class='navbar-form navbar-right' role='search' action='logout.php' method='post'>
<!-- ****************************************** Cart ********************************************************** -->
         <div class="nav navbar-nav tab" onclick="showcart()">
            <li class="dropdown" style="width: 100px;" id="ContentCart">
                <a href="#"><img src="../images/cart.png" style="width: 30px;">
 <p id="countcart" class="badge" style='background-color: white;color: black'>
 </p>
                <b class="caret"></b>
                </a>
                <ul id="ShowCart" class="dropdown-menu">
                    <div class='scroll'>
                        <li id="cart">
                        </li>
                    </div>
                    <li style='background-color: #33BEFF'><a href="viewCart.php" style='text-align: center; background-color: #33BEFF';>View cart</a></li>
                </ul>
            </li>
        </div>                      
<!-- ****************************************** End Cart **************************************************** -->
                                 สวัสดีคุณ
                                <a href='profile.php?uid=<?php echo $_SESSION["username"]; ?>' style='color:#FF9933;'>
                                    <?php echo $_SESSION["fname"]; ?> &nbsp; <?php echo $_SESSION["lname"]; ?>
                                </a>
                                <p class="posi2" style="font-size: 14px; position: relative; left: 30%; top: -10px;"><a href="../logout.php" class="color" id='SignOut'>ออกจากระบบ</a></p>

                            </form>
                        </div>
                    <?php } else { //if user don't login show menu Login and Sing up
                        ?>
                        <button type="button" class="btn btn-default color" data-toggle="modal" data-target="#myModal" data-whatever="@mdo" id="modal">Login</button>
                        <p class="size posi2"><a href="#" class="color">Sign up</a></p>
                    <?php } ?>                                  
                </li>
            </ul>
        </div>        
    </div>
    <div id="header-contact">
    </div>
</div>
<nav class="navbar navbar-default fix">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar" >
            <ul class="nav navbar-nav" >
                <li><a href="index.php">Home</a></li>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" id="avail" data-toggle="dropdown" href="#">Available item
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="DonateItem.php?view=date" id="all">View by date</a>
                                <a href="#" id="type" class="dropdown-toggle" data-toggle="dropdown">View by categories
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="DonateItem.php?view=กระเป๋า" id="1" name="viewbybag" id="viewbybag">กระเป๋า</a>
                                        <a href="DonateItem.php?view=อุปกรณ์การเขียนและลบคำผิด" id="2" name="viewbypen" id="viewbypen">อุปกรณ์การเขียนและลบคำผิด</a>
                                        <a href="DonateItem.php?view=สีและอุปกรณ์งานศิลป์" id="3" name="viewbycolor" id="viewbycolor">สีและอุปกรณ์งานศิลป์</a>
                                        <a href="DonateItem.php?view=ผลิตภัณฑ์กระดาษ" id="4" name="viewbypaper" id="viewbypaper">ผลิตภัณฑ์กระดาษ</a>
                                        <a href="DonateItem.php?view=อุปกรณ์สำนักงาน" id="5" name="viewbyoffice" id="viewbyoffice">อุปกรณ์สำนักงาน</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <li><a href="#">Statistic</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Contact Us</a></li>
                <!-- </li>
                 <li><a href="#">Contact</a></li> -->
            </ul>
            <!--<ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul> -->
        </div>
    </div>
</nav>