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

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $quantidade = $_POST['quantidade'];
                        if (!empty($quantidade) && is_numeric($quantidade)) {
                            $palavra = "SOL";
                            for ($i = 0; $i < $quantidade; $i++) {
                                echo $palavra . "<br>";
                            }
                        } else {
                            echo "Por favor, preencha a quantidade corretamente.";
                        }
                    }
                    ?>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    </form>


                </div>
        </div>

    </body>
</html>