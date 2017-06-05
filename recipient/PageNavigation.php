<?php


$rowss = 15;
//page of donate item
if (isset($_GET['page'])) {
    $page = $_GET["page"];
} else {
    $page = "";
}
if (isset($_GET['view'])) {
    $view = $_GET["view"];
} else {
    $view = "";
}
if (isset($_GET['name']) && isset($_GET['SearchOption'])) {
    $search = $_GET["name"];
    $SearchOption = $_GET["SearchOption"];
} else {
    $search = "";
    $SearchOption = "";
    //header("location: DonateItem.php");
}
/* * ********************************************Card 9th************************************************************************ */
if ($view == 'date') {
    $NoResult = 0;
    $resultPage = $pdo->prepare("SELECT * FROM list_item");
    $resultPage->execute();
    $total_data = $resultPage->rowCount();
    $total_page = ceil($total_data / $rowss);
        if($total_data == 0){
           $NoResult++;
        }    
    if ($page == "" || $page == 1) {
        $start = 0;
        $ItemNews = 0;
    } else {
        $start = ($page * $rowss) - $rowss;
        $ItemNews = 4;
    }
    if ($start <= 0)
        $start = 0;
    $resultDonate = $pdo->prepare("SELECT * FROM list_item ORDER BY Ddate DESC Limit ?,?");
    $resultDonate->bindParam(1, $start, PDO::PARAM_INT);
    $resultDonate->bindParam(2, $rowss, PDO::PARAM_INT);
    $resultDonate->execute();
    $resultItems = $pdo->prepare("SELECT * FROM list_item ORDER BY Ddate DESC");
    $resultItems->execute();
    //echo $NoResult;
}elseif ($view == 'กระเป๋า') {
    $NoResult = 0;
    $resultPage = $pdo->prepare("SELECT * FROM list_item  WHERE ItemType = 'กระเป๋า'");
    $resultPage->execute();
    $total_data = $resultPage->rowCount();
    $total_page = ceil($total_data / $rowss);
        if($total_data == 0){
           $NoResult++;
        }    
    if ($page == "" || $page == 1) {
        $start = 0;
        $ItemNews = 4;
    } else {
        $start = ($page * $rowss) - $rowss;
        $ItemNews = 4;
    }
    if ($start <= 0)
        $start = 0;
    $resultDonate = $pdo->prepare("SELECT * FROM list_item  WHERE ItemType = 'กระเป๋า' ORDER BY Ddate DESC Limit ?,?");
    $resultDonate->bindParam(1, $start, PDO::PARAM_INT);
    $resultDonate->bindParam(2, $rowss, PDO::PARAM_INT);
    $resultDonate->execute();
    $resultItems = $pdo->prepare("SELECT * FROM list_item ORDER BY Ddate DESC");
    $resultItems->execute();
    // echo $NoResult;
}elseif ($view == 'อุปกรณ์การเขียนและลบคำผิด') {
    $NoResult = 0;
    $resultPage = $pdo->prepare("SELECT * FROM list_item  WHERE ItemType = 'อุปกรณ์การเขียนและลบคำผิด'");
    $resultPage->execute();
    $total_data = $resultPage->rowCount();
    $total_page = ceil($total_data / $rowss);
        if($total_data == 0){
           $NoResult++;
        }    
    if ($page == "" || $page == 1) {
        $start = 0;
        $ItemNews = 4;
    } else {
        $start = ($page * $rowss) - $rowss;
        $ItemNews = 4;
    }
    if ($start <= 0)
        $start = 0;
    $resultDonate = $pdo->prepare("SELECT * FROM list_item WHERE ItemType = 'อุปกรณ์การเขียนและลบคำผิด' ORDER BY Ddate DESC Limit ?,?");
    $resultDonate->bindParam(1, $start, PDO::PARAM_INT);
    $resultDonate->bindParam(2, $rowss, PDO::PARAM_INT);
    $resultDonate->execute();
    $resultItems = $pdo->prepare("SELECT * FROM list_item ORDER BY Ddate DESC");
    $resultItems->execute();
    // echo $NoResult;
}elseif ($view == 'สีและอุปกรณ์งานศิลป์') {
    $NoResult = 0;
    $resultPage = $pdo->prepare("SELECT * FROM list_item  WHERE ItemType = 'สีและอุปกรณ์งานศิลป์'");
    $resultPage->execute();
    $total_data = $resultPage->rowCount();
    $total_page = ceil($total_data / $rowss);
        if($total_data == 0){
           $NoResult++;
        }    
    if ($page == "" || $page == 1) {
        $start = 0;
        $ItemNews = 4;
    } else {
        $start = ($page * $rowss) - $rowss;
        $ItemNews = 4;
    }
    if ($start <= 0)
        $start = 0;
    $resultDonate = $pdo->prepare("SELECT * FROM list_item WHERE ItemType = 'สีและอุปกรณ์งานศิลป์' ORDER BY Ddate DESC Limit ?,?");
    $resultDonate->bindParam(1, $start, PDO::PARAM_INT);
    $resultDonate->bindParam(2, $rowss, PDO::PARAM_INT);
    $resultDonate->execute();
    $resultItems = $pdo->prepare("SELECT * FROM list_item ORDER BY Ddate DESC");
    $resultItems->execute();
    //echo $NoResult;
}elseif ($view == 'ผลิตภัณฑ์กระดาษ') {
    $NoResult = 0;
    $resultPage = $pdo->prepare("SELECT * FROM list_item  WHERE ItemType = 'ผลิตภัณฑ์กระดาษ'");
    $resultPage->execute();
    $total_data = $resultPage->rowCount();
    $total_page = ceil($total_data / $rowss);
        if($total_data == 0){
           $NoResult++;
        }    
    if ($page == "" || $page == 1) {
        $start = 0;
        $ItemNews = 4;
    } else {
        $start = ($page * $rowss) - $rowss;
        $ItemNews = 4;
    }
    if ($start <= 0)
        $start = 0;
    $resultDonate = $pdo->prepare("SELECT * FROM list_item WHERE ItemType = 'ผลิตภัณฑ์กระดาษ' ORDER BY Ddate DESC Limit ?,?");
    $resultDonate->bindParam(1, $start, PDO::PARAM_INT);
    $resultDonate->bindParam(2, $rowss, PDO::PARAM_INT);
    $resultDonate->execute();
    $resultItems = $pdo->prepare("SELECT * FROM list_item ORDER BY Ddate DESC");
    $resultItems->execute();
    //echo $NoResult;
}elseif ($view == 'อุปกรณ์สำนักงาน') {
    $NoResult = 0;
    $resultPage = $pdo->prepare("SELECT * FROM list_item  WHERE ItemType = 'อุปกรณ์สำนักงาน'");
    $resultPage->execute();
    $total_data = $resultPage->rowCount();
    $total_page = ceil($total_data / $rowss);
        if($total_data == 0){
           $NoResult++;
        }    
    if ($page == "" || $page == 1) {
        $start = 0;
        $ItemNews = 4;
    } else {
        $start = ($page * $rowss) - $rowss;
        $ItemNews = 4;
    }
    if ($start <= 0)
        $start = 0;
    $resultDonate = $pdo->prepare("SELECT * FROM list_item WHERE ItemType = 'อุปกรณ์สำนักงาน' ORDER BY Ddate DESC Limit ?,?");
    $resultDonate->bindParam(1, $start, PDO::PARAM_INT);
    $resultDonate->bindParam(2, $rowss, PDO::PARAM_INT);
    $resultDonate->execute();
    $resultItems = $pdo->prepare("SELECT * FROM list_item ORDER BY Ddate DESC");
    $resultItems->execute();
    // echo $NoResult;
    /*     * ********************************************Card 7th************************************************************************ */
}elseif ($search != "" && $SearchOption != "") {
    if ($SearchOption == "Name") {
        $NoResult = 0;
        $resultPage = $pdo->prepare("SELECT * FROM list_item  WHERE Lname LIKE '%$search%'");
        $resultPage->execute();
        $total_data = $resultPage->rowCount();
        $total_page = ceil($total_data / $rowss);
        if($total_data == 0){
           $NoResult++;
        }
        if ($page == "" || $page == 1) {
            $start = 0;
            $ItemNews=4;
        } else {
            $start = ($page * $rowss) - $rowss;
            $ItemNews=4;
        }
        if ($start <= 0)
            $start = 0;
        $resultDonate = $pdo->prepare("SELECT * FROM list_item WHERE Lname LIKE '%$search%' ORDER BY Ddate DESC Limit ?,?");
        $resultDonate->bindParam(1, $start, PDO::PARAM_INT);
        $resultDonate->bindParam(2, $rowss, PDO::PARAM_INT);
        $resultDonate->execute();
        $resultItems = $pdo->prepare("SELECT * FROM list_item ORDER BY Ddate DESC");
        $resultItems->execute();
        //echo $NoResult;
    }elseif ($SearchOption == "Catagory") {
        $NoResult = 0;
        $resultPage = $pdo->prepare("SELECT * FROM list_item  WHERE ItemType LIKE '%$search%'");
        $resultPage->execute();
        $total_data = $resultPage->rowCount();
        $total_page = ceil($total_data / $rowss);
        if($total_data == 0){
           $NoResult++;
        }
        if ($page == "" || $page == 1) {
            $start = 0;
            $ItemNews=4;
        } else {
            $start = ($page * $rowss) - $rowss;
            $ItemNews=4;
        }
        if ($start <= 0)
            $start = 0;
        $resultDonate = $pdo->prepare("SELECT * FROM list_item WHERE ItemType LIKE '%$search%' ORDER BY Ddate DESC Limit ?,?");
        $resultDonate->bindParam(1, $start, PDO::PARAM_INT);
        $resultDonate->bindParam(2, $rowss, PDO::PARAM_INT);
        $resultDonate->execute();
        $resultItems = $pdo->prepare("SELECT * FROM list_item ORDER BY Ddate DESC");
        $resultItems->execute();
        //echo $NoResult;
    }elseif ($SearchOption == "Keyword") {
        $NoResult = 0;
        $resultPage = $pdo->prepare("SELECT * FROM list_item  WHERE Lname LIKE '%$search%' OR Condi LIKE '%$search%'");
        $resultPage->execute();
        $total_data = $resultPage->rowCount();
        $total_page = ceil($total_data / $rowss);
        if($total_data == 0){
           $NoResult++;
        }
        if ($page == "" || $page == 1) {
            $start = 0;
            $ItemNews=4;
        } else {
            $start = ($page * $rowss) - $rowss;
        }
        if ($start <= 0)
            $start = 0;
            $ItemNews=4;
        $resultDonate = $pdo->prepare("SELECT * FROM list_item WHERE Lname LIKE '%$search%' OR Condi LIKE '%$search%' ORDER BY Ddate DESC Limit ?,?");
        $resultDonate->bindParam(1, $start, PDO::PARAM_INT);
        $resultDonate->bindParam(2, $rowss, PDO::PARAM_INT);
        $resultDonate->execute();
        $resultItems = $pdo->prepare("SELECT * FROM list_item ORDER BY Ddate DESC");
        $resultItems->execute();

        //echo $NoResult;
    }
}if ($view == "" && $search == "" && $SearchOption == "") {
    $resultPage = $pdo->prepare("SELECT * FROM list_item");
    $resultPage->execute();
    $total_data = $resultPage->rowCount();
    $total_page = ceil($total_data / $rowss);
    if ($page == "" || $page == 1) {
        $start = 0;
        $ItemNews = 0;
    } else {
        $start = ($page * $rowss) - $rowss;
        $ItemNews = 4;
    }
    if ($start <= 0)
        $start = 0;
    $resultDonate = $pdo->prepare("SELECT * FROM list_item ORDER BY Ddate DESC Limit ?,?");
    $resultDonate->bindParam(1, $start, PDO::PARAM_INT);
    $resultDonate->bindParam(2, $rowss, PDO::PARAM_INT);
    $resultDonate->execute();
    $resultItems = $pdo->prepare("SELECT * FROM list_item ORDER BY Ddate DESC");
    $resultItems->execute();
}else {
    //echo $NoResult;

    if ($NoResult != 0) {
        ?>
        <script type="text/javascript">
            var nullResult = false;
        </script>
    <?php } else {
        ?>
        <script type="text/javascript">
            var nullResult = true;
        </script>
        <?php

    }
}
?>
