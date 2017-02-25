<?php
require ("DB/db_connect.php");
require("function_sp.php");
if (isset($_GET['act'])) {

	if($_GET['act']=="delac") {
		$sql ="SELECT * FROM T_taikhoan";
		$result = mysqli_query($conn,$sql);
		$i=0;
		while ($row =mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$data[$i]=$row ;
			$data[$i]['taikhoan_id']=randomId(5).$row['taikhoan_id'].randomId(5);
			$i++;
		}
		if (isset($data)) {
			$myJSON= json_encode($data);
			echo $myJSON;
		}else{
			return false;
		}
	}

	if($_GET['act']=="delbvs"){
		$sql ="SELECT * FROM T_benhvien";
		$result = mysqli_query($conn,$sql);
		
		$i=0;
		while ($row =mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$data[$i]=$row ;
			$data[$i]['benhvien_id']=randomId(5).$row['benhvien_id'].randomId(5);
			$i++;
		}
		if (isset($data)) {
			$myJSON= json_encode($data);
			echo $myJSON;
		}else{
			return false;
		}
	}

}
?>