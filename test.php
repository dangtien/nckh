<?php
require ("DB/db_connect.php");
require("function_sp.php");
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
?>