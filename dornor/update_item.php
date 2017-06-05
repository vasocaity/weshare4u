<?php
include "../includes/connect.php";
date_default_timezone_set("Asia/Bangkok");
//Get type image
$allowed =  array('gif','png' ,'jpg','jpeg');
$filename = $_FILES['Pic_list']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

$Lid = $_POST["Lid"];
$result = $pdo->prepare(" SELECT * FROM list_item WHERE Lid = :Lid");
$result->bindParam(':Lid', $Lid);
$result->execute();
$query = $result->fetch();

$Lid = $query["Lid"];
$Pic_list = $query["Pic_list"];
$Devitype = $query["DeliveryType"];

$Delivery = $pdo->prepare(" SELECT * FROM appointment WHERE Lid = :Lid");
$Delivery->bindParam(':Lid', $Lid);
$Delivery->execute();
$appointmentQuery = $Delivery->fetch();

function insertApponiment($Lid,$address)
{
	$dbh = new PDO('mysql:host=localhost;dbname=donate', "root", "");
	$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$dbh->exec ( "SET NAMES \"utf8\"" );	
	$resultRefer = $dbh->prepare(" SELECT * FROM list_item WHERE Lid = :Lid");
	$resultRefer->bindParam(':Lid', $Lid);
	$resultRefer->execute();
	$row = $resultRefer->fetch();
	$id = "AID".date("Ymd-His");

	$appointment = $dbh->prepare("INSERT INTO appointment (Aid,address,Lid) VALUES (?,?,?)");
	$appointment->bindParam(1, $id);			
	$appointment->bindParam(2, $address);
	$appointment->bindParam(3, $row["Lid"]);
	$appointment->execute();
}

function updateApponiment($Aid,$address)
{
	$dbh = new PDO('mysql:host=localhost;dbname=donate', "root", "");
	$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$dbh->exec ( "SET NAMES \"utf8\"" );	
	$appointment = $dbh->prepare("UPDATE appointment SET address = ? WHERE Aid = ?");
	$appointment->bindParam(1, $address);			
	$appointment->bindParam(2, $Aid);
	$appointment->execute();	
}

function deleteApponiment($Aid)
{
	$dbh = new PDO('mysql:host=localhost;dbname=donate', "root", "");
	$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$dbh->exec ( "SET NAMES \"utf8\"" );	
	$appointment = $dbh->prepare("DELETE FROM appointment WHERE Aid = ?");			
	$appointment->bindParam(1, $Aid);
	$appointment->execute();	
}

	$Lname = $_POST["Lname"];
	$Descript = $_POST["Descript"];
	$Did = 2;
	$Rid = 0;
	$Amount = $_POST["Amount"];
	$Descript = $_POST["Descript"];
	$condi = $_POST["condi"];
	$type = $_POST["type"];
	$DeliveryType = $_POST["DeliveryType"];
	//check DeliveryType if $DeliveryType != $type delete appointment
	if($DeliveryType != $Devitype){
	deleteApponiment($appointmentQuery["Aid"]);
	}
	$Ddate = $_POST["Ddate"];
	$Width = $_POST["Width"];
	$Height = $_POST["Height"];

	if ($_POST["Depth"] == null) {
	$Depth = 0;
	}else{
	$Depth = $_POST["Depth"];
	}	
if($_FILES['Pic_list']['name'] != null) {
	echo "have file";
			
		$newfilename = $_FILES["Pic_list"]["name"];
		$oldfilename= $Pic_list;
		//rename image
		$new= "ITEM".date("Ymd-His").".".$ext;		
		rename("images/".$oldfilename, "images/".$new);

		move_uploaded_file($_FILES["Pic_list"]["tmp_name"], "../images/".$new);
		$result = $pdo->prepare("UPDATE list_item SET Lname = ? ,Pic_list = ?, Amount = ?, Descript = ? , condi = ?, Width = ?, Height = ?, Depth = ?, ItemType = ?, DeliveryType = ? WHERE Lid = ?");
		$result->bindParam(1, $Lname);
		$result->bindParam(2, $new);
		$result->bindParam(3, $Amount);
		$result->bindParam(4, $Descript);
		$result->bindParam(5, $condi);
		$result->bindParam(6, $Width, PDO::PARAM_INT);
		$result->bindParam(7, $Height, PDO::PARAM_INT);
		$result->bindParam(8, $Depth, PDO::PARAM_INT);			
		$result->bindParam(9, $type);
		$result->bindParam(10, $DeliveryType, PDO::PARAM_INT);
		$result->bindParam(11, $Lid);
		$result->execute();
		// If make an appointment
		$x = strcmp($DeliveryType,"รับที่จุดนัดพบ");
		if($x == 0){
			$address = $_POST["address"];	
			if($appointmentQuery["Lid"] == null){
				insertApponiment($Lid);				
			}else{
				updateApponiment($appointmentQuery["Aid"],$address );
			}
		}
	 header("Location: ShowDonateDetail.php?lid=".$Lid); exit();
	}// if not update image
	else{

		$result = $pdo->prepare("UPDATE list_item SET Lname = ?, Amount = ?, Descript = ?, condi = ?, Width = ?, Height = ?, Depth = ?, ItemType = ?, DeliveryType = ? WHERE Lid = ?");
		$result->bindParam(1, $Lname);
		$result->bindParam(2, $Amount);
		$result->bindParam(3, $Descript);
		$result->bindParam(4, $condi);
		$result->bindParam(5, $Width, PDO::PARAM_INT);
		$result->bindParam(6, $Height, PDO::PARAM_INT);
		$result->bindParam(7, $Depth, PDO::PARAM_INT);			
		$result->bindParam(8, $type);
		$result->bindParam(9, $DeliveryType, PDO::PARAM_INT);
		$result->bindParam(10, $Lid);
		$result->execute();

		// If make an appointment
		$x = strcmp($DeliveryType,"รับที่จุดนัดพบ");
		if($x == 0){
			$address = $_POST["address"];
			if($appointmentQuery["Lid"] == null){			
				insertApponiment($Lid,$address);				
			}else{
				updateApponiment($appointmentQuery["Aid"],$address );
			}			
		}
	   header("Location: ShowDonateDetail.php?lid=".$Lid); exit();		
	}
?>