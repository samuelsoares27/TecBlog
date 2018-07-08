<?php

$conn = new mysqli("localhost", "root","","clientes");

if($conn->connect_error){

	echo "Erro:". $conn->connect_error;
}


$result = $conn->query("SELECT email FROM cliente WHERE email='samuel_soares27@hotmail.com'");

$data = array();  //por em json
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
	//var_dump($row);
	array_push($data,$row);

}
$json = json_encode($data);
var_dump($json);

?>