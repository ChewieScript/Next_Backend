<?
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

echo json_encode($arr);

$servername = "localhost"; 
	$username = "root"; 
	$password = ""; 
	$dbname = "nextdb";
	
	$connect = new mysqli($servername, $username, $password, $dbname);
	
	if ($connect->connect_error){
		die('Ошибка : ('. $connect->connect_errno .') '. $connect->connect_error);
	}


	// $add_hire = $connect->query("INSERT INTO users (U_login,U_password,U_status)
	// VALUES ('Nikit000s', '2384234', 'study framework docum')");
	$connect->close();
?>

