<?php
$conf=array(
	"hostname"=>"localhost",
	"user"=>"root",
	"password"=>"",
	"dbname"=>"nckh_2016"
	);

$conn= mysqli_connect($conf["hostname"],$conf["user"],$conf["password"],$conf["dbname"]);

if (!$conn) {
	# code...
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
	mysqli_set_charset($conn,"utf8");
?>