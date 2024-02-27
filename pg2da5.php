<!DOCTYPE html>

<html>
    <head>

        <title></title>
        <style>
                .item{
                font-size: 150px;
                color:black;

            }
            .caixa{
                display: flex;
                justify-content: center;
                height: 920px;
                align-items: center;
            }        </style>
    </head>
    <body>
        
        <a href="index.php">
            <button>Voltar!</button>
        </a>
        <div class="caixa">
            <div class="item">
            <?php
                $n1 = $_POST ["n1"];
                $n2 = $_POST ["n2"];
                $n3 = $_POST  ["n3"];
                if ($n1==$n2 && $n1==$n3 && $n2==$n3){
                    echo "Triângulo equilátero";
                }elseif($n1 == $n2 or $n1 == $n3){
                    echo "Triângulo isósceles";
                }elseif($n2 == $n1 or $n2 == $n3){
                    echo "Triângulo isósceles";
                }elseif($n3 == $n1 or $n3 == $n2){
                    echo "Triângulo isósceles";
                }else{
                    echo "Triângulo escaleno";
                }
                ?>
                </div>
        </div>

    </body>
</html>