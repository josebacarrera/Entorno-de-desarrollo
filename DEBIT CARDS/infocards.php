<?php 

$url="http://192.168.1.67:4000/infocards4/user1/";

//Iniciamos un recurso CURL en $curl
$curl = curl_init($url);

//Indicamos que nos devuelva la información capturada
//como la información de retorno
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//Realizamos la llamada
$response = curl_exec($curl);

//Cerramos el recurso (Liberamos memoria)
curl_close($curl);

$key = 'KeyMustBe16ByteOR24ByteOR32ByT4!';
 $encrypt_method = "aes-256-ecb";
$output = openssl_decrypt($response,  $encrypt_method, $key);
$output = json_decode($output);
var_dump($output);

/*
$card_int = $output["card_international"];
$card_eur = $output["card_europe"];
$lastactive_int = $output["lastactive_int"];
$lastactive_eur = $output["lastactive_eur"];
$current_card = $output["current_card"];
*/
?>