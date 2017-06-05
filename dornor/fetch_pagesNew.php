<html>

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

include "../includes/connect.php"; //include config file
//sanitize post value
$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);

//throw HTTP error if page number is not valid
if(!is_numeric($page_number)){
	header('HTTP/1.1 500 Invalid page number!');
	exit();
}
$item_per_page =5;
//get current starting point of records
$position = (($page_number-1) * $item_per_page);

//fetch records using page position and item per page.
$results = $pdo->prepare( "SELECT * FROM news ORDER BY Date DESC LIMIT :position,  :item_per_page" );
$results->bindParam(':position', $position, PDO::PARAM_INT );
$results->bindParam(':item_per_page', $item_per_page, PDO::PARAM_INT);
$results->execute();
//output results from database

while ( $row = $results->fetch () ) :  ?>
<?php
    if($position  <=4){ //chek what is the new of list
?>
<style type="text/css">
  .wid{
    width: 350px;
  }
</style>
<article class="push30 clear">
	<div class="imgl boxholder"><img src="../images/<?php echo $row['Pic'] ?>.png" class="wid"></div>
	<h2 class="nospace font-medium"><b><?php echo $row['nameNews'];?></b></h2>
	<p><?php
								if (strlen($row['Detail']) > 200) {

								 $stringCut = iconv_substr($row['Detail'],0,250,'UTF-8');

										}
										echo  $stringCut;
	 ?>...  <img src="../images/icon_new2.gif" style="width: 45px;"></p>
	<p><a href="DetailNew.php?nid=<?php echo $row['Nid']?>" name="ReadMeNew">read more.. &raquo;</a></p>
	</article>
<?php }else{ ?>
  <article class="push30 clear">
  	<div class="imgl boxholder"><img src="../images/<?php echo $row['Pic'] ?>.png" class="wid"></div>
  	<h2 class="nospace font-medium"><b><?php echo $row['nameNews'];?></b></h2>
  	<p><?php
  								if (strlen($row['Detail']) > 500) {

  								 $stringCut = iconv_substr($row['Detail'],0,300,'UTF-8');

  										}
  										echo  $stringCut;
  	 ?>... </p>
  	<p><a href="DetailNew.php?nid=<?php echo $row['Nid']?>" name="ReadMeNew">read more.. &raquo;</a></p>
  	</article>
<?php } ?>
  <?php endwhile; ?>


</html>
