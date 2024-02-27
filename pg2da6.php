<!DOCTYPE html>

<html>
    <head>

        <title></title>
        <style>
                .item{
                font-size: 80px;
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
                $n1 = $_POST ["n1"];

                if ($n1 == 1){
                    echo "Mês do seu aniversário é janeiro";
                }elseif($n1 == 2){
                    echo "Mês do seu aniversário é feveiro";
                }elseif($n1 == 3){
                    echo "Mês do seu aniversário é março";
                }elseif($n1 == 4){
                    echo "Mês do seu aniversário é abril";
                }elseif($n1 == 5){
                    echo "Mês do seu aniversário é maio";
                }elseif($n1 == 6){
                    echo "Mês do seu aniversário é junho";
                }elseif($n1 == 7){
                    echo "Mês do seu aniversário é julho";
                }elseif($n1 == 8){
                    echo "Mês do seu aniversário é agosto";
                }elseif($n1 == 9){
                    echo "Mês do seu aniversário é setembro";
                }elseif($n1 == 10){
                    echo "Mês do seu aniversário é outubro";
                }elseif($n1 == 11){
                    echo "Mês do seu aniversário é novembro";
                }elseif($n1 == 12){
                    echo "Mês do seu aniversário é dezembro";
                }else{
                    echo "não existe mês com este número";
                }
                ?>
                </div>
        </div>

    </body>
</html>