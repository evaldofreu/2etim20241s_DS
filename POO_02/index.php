<html>
<body>
    <title>Extrato Bancário</title>
    <link href="style.css" rel='stylesheet'>

<?php
require 'conta.class.php';
$json = file_get_contents("data.json");
$data = json_decode($json);
$conta = new Conta($data);
$conta->imprimeExtrato();

?>
</body>
</html>