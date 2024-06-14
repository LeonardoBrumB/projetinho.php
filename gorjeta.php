<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gorjeta</title>
</head>

<body>
    <header>
        <h1>Calcular Gorjeta</h1>
    </header>
    <div style="text-align: center;" class="container">
        <h2>Calcular gorjeta </h2>
        <br>
        <form action="" method="POST">
            <label for="valor">Valor da conta: </label>
            <input type="float" id="valor" name="valor" step="0,01" required><br><br>

            <label for="porc">Porcentagem da gorjeta: </label>
            <input type="float" id="porc" name="porc" step="0,01" required>
            <br><br>

            <button class="button" type="submit" role="button"><span class="text">Calcular Gorjeta</span></button>
            <button class="button" type="reset" role="button"><span class="text">Limpar</span></button><br>

        </form>

        <a href="index.php"><button class="button" type="submit" role="button"><span class="text">voltar</span></button></a><br>

        <div class="resposta">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['valor']) && isset($_POST['porc'])) {
                    $valor = $_POST['valor'];
                    $porc = $_POST['porc'];

                    $erro =  empty($valor) || empty($porc) ? "Preencha o campo Valor!" : ($valor <=0 || $porc < 0 ? "Insira valores válido" : "");
                    if ($erro) {
                        echo $erro;
                    } else {
                        $result = $valor * ($porc/100);
                        $result = number_format($result, 2);
                        echo "A gorjeta é de $result";
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