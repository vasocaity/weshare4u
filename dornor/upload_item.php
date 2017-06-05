<?php
include "../includes/connect.php";
session_start();
$username = $_SESSION["username"];
echo $username;
$allowed =  array('gif','png' ,'jpg','jpeg');
$filename = $_FILES['Pic_list']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if($_FILES) {
		date_default_timezone_set("Asia/Bangkok");
		if ($_POST["Depth"] == null) {
			 $Depth = 0;
		}else{
		  $Depth = $_POST["Depth"];
		}				
		$name = $_FILES["Pic_list"]["name"];
		//rename image
		$newfilename= "ITEM".date("Ymd-His").".".$ext;
		$key = "ITEM-ID".date("Ymd-His");
		$Lname = $_POST["Lname"];
		$Descript = $_POST["Descript"];
		$Did = 2;
		//$Did = $_SESSION["username"];
		$Rid = 0;
		$Amount = $_POST["Amount"];
		$Descript = $_POST["Descript"];
		$condi = $_POST["condi"];
		$type = $_POST["type"];
		$DeliveryType = $_POST["DeliveryType"];
		$Ddate = $_POST["Ddate"];
		$Width = $_POST["Width"];
		$Height = $_POST["Height"];
		move_uploaded_file($_FILES["Pic_list"]["tmp_name"], "../images/".$newfilename);
		$result = $pdo->prepare("INSERT INTO list_item (Lid, Lname, Pic_list, Did, Rid, Ddate, Rdate, Amount, Descript, condi, Width, Height, Depth, ItemType , DeliveryType) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$Rdate = date("0-0-0 0:0:0");
		$result->bindParam(1, $key);
		$result->bindParam(2, $Lname);
		$result->bindParam(3, $newfilename);
		$result->bindParam(4, $username);
		$result->bindParam(5, $Rid);
		$result->bindParam(6, $Ddate);
		$result->bindParam(7, $Rdate);
		$result->bindParam(8, $Amount);
		$result->bindParam(9, $Descript);
		$result->bindParam(10, $condi);
		$result->bindParam(11, $Width, PDO::PARAM_INT);
		$result->bindParam(12, $Height, PDO::PARAM_INT);
		$result->bindParam(13, $Depth, PDO::PARAM_INT);			
		$result->bindParam(14, $type);
		$result->bindParam(15, $DeliveryType, PDO::PARAM_INT);
		$result->execute();
		// If make an appointment
		$x = strcmp($DeliveryType,"รับที่จุดนัดพบ");
		if($x == 0){
			//select Lid from item insert latest
			  $resultRefer = $pdo->prepare(" SELECT * FROM list_item WHERE Lid = :Lid");
			  $resultRefer->bindParam(':Lid', $key);
			  $resultRefer->execute();
			  $row = $resultRefer->fetch();
			$address = $_POST["address"];
			$id = "AID".date("Ymd-His");
			$appointment = $pdo->prepare("INSERT INTO appointment (Aid,address,Lid) VALUES (?,?,?)");
			$appointment->bindParam(1, $id);			
			$appointment->bindParam(2, $address);
			$appointment->bindParam(3, $row["Lid"]);
			$appointment->execute();
		}
	// header("Location: ShowDonateDetail.php?lid=".$key); exit();
	}
?>