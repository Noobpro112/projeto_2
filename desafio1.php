<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
</head>
<body>
    <a href="index.php">
        <button>Voltar!</button>
    </a>
    <br>
    <form action="#" >
        Primeiro Numero:  <br> 
        <input type='text' name="num1" id="num1">  <br>
        Segundo Numero:  <br>
        <input type="text" name="num2"id="num2">  <br>  <br>  
        <input type="submit" value="Enviar">  <br>  <br>  <br>
    </form>
    <?php
        $num = $_GET['num1'];
        $num2= $_GET['num2'];
        $num3= $num + $num2;
        if($num3 > 20) {
            echo 'Seu valor:'.$num3+8;
        }else{
            echo 'Seu valor: '.$num3-5;
        };

?>
</body>
</html>