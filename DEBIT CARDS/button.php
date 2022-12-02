<?php
echo <<<EOT
<form method="post">
     <input type="submit" name ="European" value="EUROPE"/>
     <input type="submit" name="American" value="INTERNATIONAL"/>
</form>
EOT;

if (isset($_POST['European'])) {
   $card = "EUROPE";
}
if (isset($_POST['American'])) {
   $card = "INTERNATIONAL";
}

$url = "http://192.168.1.67:4000/enablecard4/user1/" .$card;
//Iniciamos un recurso CURL en $curl
$curl = curl_init($url);

//Indicamos que nos devuelva la información capturada
//como la información de retorno
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//Realizamos la llamada
$response = curl_exec($curl);

//Cerramos el recurso (Liberamos memoria)
curl_close($curl);

?>