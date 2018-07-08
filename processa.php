<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];


$result = $conn->query("SELECT email FROM cliente WHERE email='$email'");

$data = array();  //por em json
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
  //var_dump($row);
  array_push($data,$row);

}
/*$json = json_encode($data);
var_dump($json);*/

if(count($data) > 0){ 
    echo "<script language=javascript>alert( 'EMAIL JÁ EXISTE!' );</script>";
    require_once("cadastro.php");
}else{
    
  $stmt = $conn->prepare("INSERT INTO cliente (nome, email, profissao) VALUES (?,?,?)");
  $stmt->bind_param("sss",$nome,$email,$profissao);
  $stmt->execute();
  echo "<script language=javascript>alert( 'CADASTRO REALIZADO COM SUCESSO!' );</script>";
  require_once("index.php");
}



?>

