<?php
include "../includes/connect.php";
?>
<body>
    <style>
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
    </style>
<style type="text/css">
    .menu2{
        margin: 0 0 2px 100px;
        position: relative;
    }
</style>
    <link href="../layout/css/hover.css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src='../layout/js/loginFunction.js'></script>

    <div id="hgroup full_width clear img-wrapper">
        <span>
            <img src="../images\head.jpg" class="img-overlay">
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
      <!-- **************************************Show First name and last name of user ******************************************** -->
    <div style="display:block; float:right; width:auto; clear:right; right: auto;" class="login col-md-3 menu2">
    <form class='navbar-form navbar-right' role='search' action='logout.php' method='post'>   
        สวัสดีคุณ
        <a href='profile.php?uid=<?php echo $_SESSION["username"]; ?>' style='color:#FF9933;'>
            <?php echo $_SESSION["fname"]; ?> &nbsp; <?php echo $_SESSION["lname"]; ?>
        </a>
        <p class="posi2" style="font-size: 14px; position: relative; left: 30%; top: -5px;"><a href="../logout.php" class="color" id='SignOut'>ออกจากระบบ</a></p>        
    </form> 
    </div>
    <?php } ?>

<?php } else { //if user don't login show menu Login and Sing up
    ?>
                    <button type="button" class="btn btn-default color" data-toggle="modal" data-target="#myModal" data-whatever="@mdo" id="modal" name="loginbtn">Login</button>
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
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand hvr-sink" href="weshare4u.php"  title="WeShare" name="Home">Home</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav posi" style="background-color: #FF9933;" >             
                <li><a href="#"  class="hvr-sink" title="Statistic" name="Statistic">Statistic</a></li>
                <li><a href="#"  class="hvr-sink" title="FAQ" name="FAQ">FAQ</a></li>
                <li><a href="#"  class="hvr-sink" title="Contact Us" name="ContactUs">About Us</a></li>                
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- ****************************************** Modal For login ********************************************************** -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" id="close1">&times;</button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
                    <form id="login" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label" >E-mail:</label>
                            <input type="email" class="form-control" id="email" name="email">
                            <p id="emailError" style="color: red;"></p>                            
                            <p id="emailpattenError" style="color: red;"></p>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Password:</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <p id="passwordError" style="color: red;"></p>
                        </div>
                        <div class="checkbox">
                            <label><a href="#" id="Forgotpwd"><u>Forgot your password?</u></a> </label>
                        </div>
                        <div id="checkLogin" style="color: red;"></div>
                        <div class="form-group">
                        <div class="g-recaptcha form-group" id="g-recaptcha-response" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"> </div>
                        </div>
                        <div class="modal-footer">
                            <div class="form-group" align="right">
                                <button type="submit" class="btn btn-default" value="submit" name="submit" id="submit" style="width: 120px;">Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>     
 
</body>
