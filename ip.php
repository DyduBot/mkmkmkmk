<?php
    set_time_limit(0);
    error_reporting(0);

    $nome = $_GET['nome'];
    $url = "http://www.meuip.com.br/".$nome;

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => 1,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 1
    ));
    $exe = curl_exec($curl);
    curl_close($curl);

    echo $exe;
?>