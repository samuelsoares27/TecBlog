<?php

$conn = new mysqli("localhost", "root","","clientes");

if($conn->connect_error){

	echo "Erro:". $conn->connect_error;
}
?>