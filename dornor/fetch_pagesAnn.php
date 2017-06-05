<html>
<style type="text/css">
  .wid{
    width: 300px;
  }
</style>
<?php
function DateThai($strDate)
{
      $strYear = date("Y",strtotime($strDate))+543;
      $strMonth= date("n",strtotime($strDate));
      $strDay= date("j",strtotime($strDate));
      $strHour= date("H",strtotime($strDate));
      $strMinute= date("i",strtotime($strDate));
      $strSeconds= date("s",strtotime($strDate));
      $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
      $strMonthThai=$strMonthCut[$strMonth];
      return "$strDay $strMonthThai $strYear";
}
function subString ($string){

              if (strlen($string) > 500) {

               $stringCut = substr($string, 0, 500);
                    return $stringCut;

                  }
                  return $string;
}

include "../includes/connect.php"; //include config file
//sanitize post value
$page_number2 = filter_var($_POST["pageAnn"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);

//throw HTTP error if page number is not valid
if(!is_numeric($page_number2)){
	header('HTTP/1.1 500 Invalid page number!');
	exit();
}
$item_per_page =5;
//get current starting point of records
$position = (($page_number2-1) * $item_per_page);

//fetch records using page position and item per page.
$resultsAnn = $pdo->prepare("SELECT * FROM announce ORDER BY Date DESC LIMIT :position,  :item_per_page");
$resultsAnn->bindParam(':position', $position, PDO::PARAM_INT );
$resultsAnn->bindParam(':item_per_page', $item_per_page, PDO::PARAM_INT);
$resultsAnn->execute();
$count = $resultsAnn->rowCount();

//output results from database
while ( $row = $resultsAnn->fetch () ) :  ?>
<?php
    if($position  <=4){ //chek what is the new of list
?>
<article class="push30 clear">
	<div class="imgl boxholder"><img src="../images/<?php echo $row['APic'] ?>.png" class="wid"></div>
	<h2 class="nospace font-medium"><b><?php echo $row['Aname'];?></b></h2>
	<p><?php
								if (strlen($row['Adetail']) > 500) {

								 $stringCut = iconv_substr($row['Adetail'],0,300,'UTF-8');

										}
										echo  $stringCut;
	 ?>...<img src="../images/icon_new2.gif" style="width: 45px;"></p>
	<p><a href="DetailAnnounce.php?aid=<?php echo $row['Aid']?>" name="ReadMeAnnoucement">read more.. &raquo;</a></p>
	</article>
<?php }else { ?>
<article class="push30 clear">
  <div class="imgl boxholder"><img src="../images/<?php echo $row['APic'] ?>.png" class="wid"></div>
  <h2 class="nospace font-medium"><b><?php echo $row['Aname'];?></b></h2>
  <p><?php
                if (strlen($row['Adetail']) > 500) {

                 $stringCut = iconv_substr($row['Adetail'],0,300,'UTF-8');

                    }
                    echo  $stringCut;
   ?>...</p>
  <p><a href="DetailAnnounce.php?aid=<?php echo $row['Aid']?>" name="ReadMeAnnoucement">read more.. &raquo;</a></p>
  </article>
<?php } ?>

  <?php endwhile; ?>


</html>
