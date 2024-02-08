<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
</head>
<body>
    <a href="index.php">
        <button>Voltar!</button>
    </a>
    <br>
    <form action="#" >
        Nome: <br>
        <input type='text' name="nome" id="nome">  <br>
        Genero:  <br> 
        <input type='text' name="gene" id="gene">  <br>
        idade:  <br>
        <input type="text" name="idade"id="idade">  <br>  <br>  
        <input type="submit" value="Enviar">  <br>  <br>  <br>
    </form>
    <?php
        if(isset($_GET['gene']) and isset($_GET['idade'])){
            $nome = $_GET['nome'];
            $gene = $_GET['gene'];
            $idade= $_GET['idade'];
            
            if($idade <= 25 && $gene == 'F') {
                echo $nome . ' Aceito!';
            }else{
                echo $nome . ' Negado!';
            }
        }
?>
</body>
</html>