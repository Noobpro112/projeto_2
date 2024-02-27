    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio 2</title>
    </head>

    <body>
        <a href="index.php">
            <button>Voltar!</button>
        </a>
        <br>
        <form action="#">
            Seu numero: <br>
            <input type='text' name="num" id="num"> <br>
            <input type="submit" value="Enviar"> <br> <br>
        </form>
        <?php
        if (isset($_GET['num'])) {
            $num = $_GET['num'];

            if ($num != 0) {
                if ($num % 10 == 0) {
                    echo 'Seu numero é divisivel por 10.';
                    echo '<br>';
                    echo 'Seu numero é divisivel por 5.';
                    echo '<br>';
                    echo 'Seu numero é divisivel por 2.';
                    echo '<br>';
                } elseif ($num % 5 == 0 && $num % 2 == 1) {
                    echo 'Seu numero é divisivel por 5.';
                    echo '<br>';
                } elseif ($num % 2 == 0) {
                    echo 'Seu numero é divisivel por 2.';
                    echo '<br>';
                } else {
                    echo 'Seu numero não é divisivel por nenhum desses.';
                }
            } else {
                echo 'Tem nada ae parça, vlw flw.';
            }
        }
        ?>
    </body>

    </html>