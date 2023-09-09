<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomb = $_POST["nomb"];

    $client = new SoapClient('https://servicios.documentosige.com.co/service.php?wsdl');
    
    try {
        $resultado = $client->hello($nomb);
        echo "Resultado: $resultado";
    } catch (SoapFault $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>