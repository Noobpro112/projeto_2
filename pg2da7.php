<!DOCTYPE html>

<html>
    <head>

        <title></title>
        <style>
                .item{
                font-size: 70px;
                color:black;

            }
            .caixa{
                display: flex;
                justify-content: center;
                height: 920px;
                align-items: center;
            }
        </style>
    </head>
    <body>
    <a href="index.php">
        <button>Voltar!</button>
    </a>
        <div class="caixa">
        <div class="item">
            <?php
                $nome = $_POST ["nome"];
                $usuario = $_POST ["lp"];
                if ($usuario == "Aluno" or $usuario == "aluno"){
                    echo "Você tem que delvover o livro $nome em 3 dias";
                }else{
                    echo "Você tem que delvover o livro $nome em 10 dias";
                }
                ?>
                </div>
        </div>

    </body>
</html>