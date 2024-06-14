<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular área</title>
</head>

<body>
    <header>
        <h1>Calcular área</h1>
    </header>
    <div style="text-align: center;" class="container">
        <h2>Calcular área do Retângulo </h2>
        <br>
        <form action="" method="POST">

            <label for="raio">Raio</label>
            <input type="float" id="raio" name="raio" step="0,01" required><br><br>

            <button class="button" role="button" type="submit"><span class="text">Calcular área</span></button>
            <button class="button" r
            -ole="button" type="reset"><span class="text">Limpar</span></button><br>

        </form>
        <a href="calcularArea.php"><button class="button" role="button"><span class="text">Voltar</span></button></a><br>

        <div class="resposta">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['raio'])) {
                    $raio = $_POST['raio'];

                    $erro =  empty($raio) ? "Preencha o campo Valor!" : ((!is_numeric($raio)) || $raio <= 0 ? "Insira valores válido" : "");
                    if ($erro) {
                        echo $erro;
                    } else {
                        $result = M_PI * ($raio * $raio);
                        $result = number_format($result, 2);
                        echo "A área é $result";
                    }
                } else {
                    echo "Formulário não enviado corretamente";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>