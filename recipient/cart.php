<?php
session_start();
include "../includes/connect.php";

if(isset($_GET["action"])) {	
	if($_GET["action"]=="add") { // เพิ่มสินค้าลงตะกร้า
		$lid = $_GET["lid"];
		$qty = $_GET["qty"];
		addCart($lid, $qty); // เพิ่มสินค้าตามรหัสสินค้า จำนวน 1 ชิ้น

	} else if($_GET["action"]=="delete") { // ลบสินค้าออกจากตะกร้า
		removeCart($_GET["lid"]);  // ลบตามรหัสสินค้า
	
	} else if($_GET["action"]=="update") { // ปรับปรุงจำนวนสินค้าแต่ละชิ้นในตะกร้า
		$lid = $_GET["lid"];
		$qty = $_GET["qty"];
		$max = $_GET["max"];
		updateCart($lid, $qty, $max); // ปรับปรุงจำนวนตามรหัสสินค้า

	}
}

// ฟังก์ชันเพิ่มสินค้าลงตะกร้า
function addCart($lid, $qty) {
	$id = $lid;
	$input = intval($qty);
	// ถ้ามีตะกร้าสินค้าใน session แล้ว
	if(isset($_SESSION["cart"])) {
		if(productExists($id,$qty)){
			update($lid,$qty);
			return;
		}   // ถ้าสินค้าที่เพิ่มซ้ำกับสินค้าที่มีแล้วในตะกร้า จะไม่เพิ่มใหม่ และออกจากฟังก์ชันนี้
		$max = count($_SESSION["cart"]);  // ดึงเอา index ของอาร์เรย์ช่องสุดท้ายออกมา
		$_SESSION["cart"][$max]["lid"] = $lid; // นำรหัสสินค้าไปเก็บ
		$_SESSION["cart"][$max]["qty"] = $qty; // นำจำนวนสินค้าไปเก็บ
		$_SESSION['totalCart'] += $input;
		
	// ถ้าไม่มีตะกร้าสินค้าใน session จะสร้างอาร์เร์ยตะกร้าสินค้าใหม่
	} else {
		$_SESSION["cart"] = array();
		$_SESSION["cart"][0]["lid"] = $lid; // นำรหัสสินค้าไปเก็บ
		$_SESSION["cart"][0]["qty"] = $qty; // นำจำนวนสินค้าไปเก็บ
		$_SESSION['totalCart'] = 0;
	}

} 

// ฟังก์ชันลบสินค้าจากตะกร้า
function removeCart($lid){
	$max = count($_SESSION["cart"]);  // ดึงจำนวนสินค้าในตะกร้าออกมา
	for($i=0; $i<$max; $i++){ // วนลูปค้นหาตามรหัสสินค้า
		if($lid==$_SESSION["cart"][$i]["lid"]) { // ถ้ารหัสสินค้าตรงกัน
			unset($_SESSION["cart"][$i]); // ลบสินค้านั้นออก
		//	$_SESSION['totalCart'] =$_SESSION['totalCart']-$_SESSION["cart"][$i]["qty"];
			break;
		}
	}
	$_SESSION["cart"] = array_values($_SESSION["cart"]); // สร้างเป็น array ใหม่
}

// ฟังก์ชันปรับปรุงจำนวนสินค้า
function updateCart($lid, $qty,$max) {
	$input = intval($qty);
	$InDB =  intval($max);
	$max = count($_SESSION["cart"]); // ดึงจำนวนสินค้าในตะกร้าออกมา

	if($input > $InDB){
		echo "fasle";
	}else{
	for($i=0; $i<$max; $i++){ // วนลูปอ่านสินค้าแต่ละชิ้นในตะกร้า
		if ($lid==$_SESSION["cart"][$i]["lid"]) {
			if($_SESSION["cart"][$i]["qty"] < $qty){
				$_SESSION['totalCart'] -=$qty;
			}else{
				$_SESSION['totalCart'] += $qty;
			}
			$_SESSION["cart"][$i]["qty"] = $qty; // ดึงจำนวนสินค้าจากฟอร์มมาเก็บลง session ทับค่าเดิม

		}
	}
//	 $_SESSION['totalCart'] = count($_SESSION['cart']);
	}
}
function update($lid, $qty) {
	$max = count($_SESSION["cart"]); // ดึงจำนวนสินค้าในตะกร้าออกมา
	for($i=0; $i<$max; $i++){ // วนลูปอ่านสินค้าแต่ละชิ้นในตะกร้า
		if ($lid==$_SESSION["cart"][$i]["lid"]) {
			if($_SESSION["cart"][$i]["qty"] < $qty){
				$_SESSION['totalCart'] -=$qty;
			}else{
				$_SESSION['totalCart'] += $qty;
			}			
			$_SESSION["cart"][$i]["qty"] = $qty; // ดึงจำนวนสินค้าจากฟอร์มมาเก็บลง session ทับค่าเดิม
		}
	
	// $_SESSION['totalCart'] = count($_SESSION['cart']);
	}
}
// ฟังก์ชันตรวจสอบว่ามีสินค้านั้นในตะกร้าแล้วหรือยัง ถ้ามีแล้วจะส่งค่าเป็น 1 ถ้ายังไม่มีส่งค่าเป็น 0
function productExists($lid,$qty){
	$max = count($_SESSION["cart"]);
	$flag = 0;
	for($i=0; $i<$max; $i++){
		if($lid==$_SESSION["cart"][$i]["lid"]){
			$flag = 1;
			updateCart($lid,$qty);
			break;
		}
	}
	return $flag;
}
?>
