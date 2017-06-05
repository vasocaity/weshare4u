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
        <table class="table">
            <?php
            if (!isset($_SESSION["cart"])) {
                echo "ไม่มีของบริจาคใดๆในตะกร้า!";
                // ถ้ามีตะกร้าสินค้าใน session จะแสดงรายการสินค้าในตะกร้า
            } else {
                $sum = 0; // ใช้หาผลรวมราคาสินค้าในตะกร้า
                $max = count($_SESSION["cart"]);
                if (count($_SESSION['cart']) == 0) { ?>
                  <tr>
                    <td style="width: 100%">ไม่มีของบริจาคใดๆในตะกร้า!</td>
                  </tr>                  
              <?php  }
                for ($i = 0; $i < $max; $i++) {  // วนลูปดึงสินค้าแต่ชิ้นออกมาแสดง
                    $lid = $_SESSION["cart"][$i]["lid"];
                    $qty = $_SESSION["cart"][$i]["qty"];

                    $results = $pdo->prepare("SELECT * FROM list_item WHERE Lid = ?");
                    $results->bindParam(1, $lid);
                    $results->execute();
                    $row = $results->fetch();
                    $_SESSION['totalCart'] = count($_SESSION['cart']);
                ?>
                  <tr>
                    <td style="width: 100%"><?php echo $row["Lname"]; ?></td>
                    <td style="text-align: right;"><span id = "Qty<?= $i+1 ?>"><?php echo $qty; ?></span></td>
                  </tr>

                <?php }
            } ?>
          </table>
      </body>
</html>
