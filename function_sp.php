<?php
function randomId($length=10){
		$characters="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#$%&?&";
		$characterLeng=strlen($characters);
		$randstring='';
		for($i=0;$i<$length;$i++)
		{
			$randstring.=$characters[rand(0,$characterLeng-1)];
		}
			return $randstring;
}
?>