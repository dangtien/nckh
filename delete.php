<?php
require("config.php");
require ("DB/db_connect.php");
$jsondata=$_POST['json'];
$result=false;
if(isset($_POST['pid']))
{ 
	// phần tiếp nhận dữ liệu cần xóa.
	// dữ liệu nhận dưới dạng JSON
	$post = json_decode($jsondata);
	$listObject = (array)$post->myarray;
	$list_delet=array();
	for($i=0 ; $i< count($listObject);$i++){
		$list_delet[]=$post->myarray[$i]->value;
	}
	// đây là comment cái if này chúng m biết nó để làm gì không????
	// if cạnh dưới này để xóa tài khoản. ahahhaha
	// else if kế tiếp để xóa bệnh viện
	if ($_POST['pid']=="delac") {
		foreach($list_delet as $value){
			$a= strlen($value)-10;
			$value = substr($value, 5,$a);
			$q_count= "SELECT * FROM T_taikhoan WHERE Taikhoan_id=$value";
			$checkslq =mysqli_query($conn,$q_count);
			@$count = mysqli_num_rows($checkslq);
			// biến $count này không vô dụng. nhìn nó thì nó vô dụng đấy. haha
			// $count để kiểm tra có dữ liệu để xóa không. cũng để biết xóa thành công.
			// đấy nó đếch vô dụng đâu.
			if ($count) {
				$q_delete ="DELETE FROM T_taikhoan WHERE Taikhoan_id = $value";
		 		$result = mysqli_query($conn,$q_delete);
			}else {$result =false; exit("that bai");}
		}
	}

	// IF dưới đây để xóa một bệnh viện
	//hahhaha
	if ($_POST['pid']=="delbvs") {
		foreach($list_delet as $value){
				$a= strlen($value)-10;
				$value = substr($value,5,$a);
				$q_count= "SELECT * FROM T_benhvien WHERE Benhvien_id=$value";
				$checkslq =mysqli_query($conn,$q_count);
				@$count = mysqli_num_rows($checkslq);
				if ($count) {
				 		$q_delete ="DELETE FROM T_benhvien WHERE Benhvien_id = $value";
					 	$result = mysqli_query($conn,$q_delete);
				}else {$result =false; exit("that bai");}
		}
	}


}

mysqli_close($conn);
 if($result){
	 echo "1";
 }else
 {
	 echo "Sai thông tin";
 }
?>