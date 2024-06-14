<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Área</title>
</head>

<body>
    <header>
        <h1>Calcular área</h1>
    </header>
    <div style="text-align: center;" class="container">
        <h2>Calcular área do triângulo </h2>
        <br>
        <form action="" method="POST">

            <label for="base">Base:</label>
            <input type="float" id="base" name="base" step="0,01" required><br><br>
            <label for="altura">Altura:</label>
            <input type="float" id="altura" name="altura" step="0,01" required>
            <br><br>

            <button class="button" role="button" type="submit"><span class="text">Calcular área</span></button>
            <button class="button" role="button" type="reset"><span class="text">Limpar</span></button><br>

        </form>
        <a href="calcularArea.php"><button class="button" role="button"><span class="text">Voltar</span></button></a><br>

        <div class="resposta">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['base']) && isset($_POST['altura'])) {
                    $base = $_POST['base'];
                    $altura = $_POST['altura'];

                    $erro =  empty($base) || empty($altura) ? "Preencha o campo Valor!" : ((!is_numeric($altura)) || (!is_numeric($base)) || $altura <= 0 || $base <= 0 ? "Insira valores válido" : "");
                    if ($erro) {
                        echo $erro;
                    } else {
                        $result = $base * $altura;
                        $result = number_format($result, 2);
                        echo "A área do triângulo $result";
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