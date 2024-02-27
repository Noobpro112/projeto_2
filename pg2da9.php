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
        <div class="caixa">
        <div class="item">
            <?php
                        $numeros = $_POST['numeros'];
                        $numeros_array = explode(",", $numeros);
                        $soma_positivos = 0;
                        $total_negativos = 0;
                        foreach ($numeros_array as $numero) {
                            $numero = intval($numero);
                            if ($numero > 0) {
                                $soma_positivos += $numero;
                            } elseif ($numero < 0) {
                                $total_negativos++;
                            }
                        }
                        echo "A soma dos números positivos é: " . $soma_positivos . "<br>";
                        echo "O total de números negativos é: " . $total_negativos;
                ?>
                </div>
        </div>

    </body>
</html>