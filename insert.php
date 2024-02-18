<?php
header("Access-Control-Allow-Origin: http://localhost:3000");
header("Access-Control-Allow-Headers: Content-Type"); 
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Content-Type: application/json; charset=UTF-8");
//header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization X-Requested-With");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$data = json_decode(file_get_contents("php://input"));
$first_name = $data->first_name;
$last_name = $data->last_name;
$email = $data->email;
$password = $data->password;

$con = mysqli_connect("localhost:3306","root");
mysqli_select_db($con,"react-login");

$sql = "insert into register(
	first_name,
	last_name,
	email,
	password
	)
values(
	'$first_name',
	'$last_name',
	'$email',
	'$password'
);";
$result = mysqli_query($con,$sql);

if($result){

	$response['data']=array(
		'status'=>'valid'
	);
	echo json_encode($response);
}
else {
	$response['data']=array(
		'status'=>'invalid'
	);
	echo json_encode($response);
}
}
?>

