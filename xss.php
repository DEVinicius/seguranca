<form method = "post">
    <input type="text" name="busca">
    <input type="submit" value="Enviar">
</form>

<?php 
    if($_SERVER["REQUEST_METHOD"] === "POST")
    {
        if(isset($_POST["busca"]))
        {
             echo  strip_tags($_POST["busca"]);
        }
    }
?>