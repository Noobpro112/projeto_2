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
                    $texto = $_POST['texto'];
                        for ($i = 0; $i <= 10; $i++) {
                            echo '<br>';
                            echo str_repeat($texto.' ',$i);
                        }
                    }
                    ?>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    </form>


                </div>
        </div>

    </body>
</html>