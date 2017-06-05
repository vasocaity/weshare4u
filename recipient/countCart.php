<?php
include_once("../includes/connect.php");
session_start();
?>
<html>
  <head>
  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
    <body>
            <?php
              if(isset(($_SESSION["cart"]))){
                $sum = 0; // ใช้หาผลรวมราคาสินค้าในตะกร้า
                $max = count($_SESSION["cart"]);
                for ($i = 0; $i < $max; $i++) {  // วนลูปดึงสินค้าแต่ชิ้นออกมาแสดง
                    $lid = $_SESSION["cart"][$i]["lid"];
                    $qty = $_SESSION["cart"][$i]["qty"];
                    $input = intval($qty);
                    $results = $pdo->prepare("SELECT * FROM list_item WHERE Lid = ?");
                    $results->bindParam(1, $lid);
                    $results->execute();
                    $row = $results->fetch();
                   // $_SESSION['totalCart'] = count($_SESSION['cart']);
                      $sum += $input;
                      //echo $input;
                      $_SESSION['totalCart'] = $sum;

                }?>
                <p><?php echo $_SESSION['totalCart']; ?> </p>
              <?php  }else{?>
                 <p>0</p>
           <?php   } ?>
                
      </body>