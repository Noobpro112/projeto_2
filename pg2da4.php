<!DOCTYPE html>

<html>
    <head>

        <title>
        </title>
        <style>
                .item{
                font-size: 130px;
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
        <a href="index.php">
            <button>Voltar!</button>
        </a>
        <div class="caixa">
        <div class="item">
            <?php
                $n1 = $_POST ["n1"];
                $n2 = $_POST ["n2"];
                $n3 = $_POST  ["n3"];
                if ($n1>$n2 && $n1>$n3 && $n2>$n3){
                    echo ("$n1,$n2,$n3");
                }elseif($n1>$n2 && $n1>$n3 && $n3>$n2){
                    echo ("$n1,$n3,$n2");
                }elseif($n2>$n1 && $n2>$n3 && $n1>$n3){
                    echo ("$n2,$n1,$n3");
                }elseif($n2>$n1 && $n2>$n3 && $n3>$n1){
                    echo ("$n2,$n3,$n1");
                }elseif($n3>$n1 && $n3>$n2 && $n1>$n2){
                    echo ("$n3,$n1,$n2");
                }else {
                    echo ("$n3,$n2,$n1");
                }
                ?>
            </div>
        </div>

    </body>
</html>