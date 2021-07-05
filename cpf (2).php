<?php



error_reporting(0);


$cpf = $_GET['cpf'];
extract($_GET);


if ($_SERVER['REQUEST_METHOD'] == "GET") {

    $key = $_GET['key'];

    if ($key !== "JainshISmlwwlLwowmeH") {
        
        die("CHAVE DE ACCESSO ERRADA, AUTORIZAÇÃO NEGADA!");

    }

}


$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "http://searchlock.me/consultas/api/cadmaster.php",
	CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_SSL_VERIFYHOST => false,
    CURLOPT_SSL_VERIFYPEER => false,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "dados=$cpf&tipo=cpf&token=fcacf0a8b62dc041eee2e865241b3077@maikinbr""
));

$result = curl_exec($curl);

echo $result;

?>