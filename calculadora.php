<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
</head>

<body>
    <header>
        <h1>IMC</h1>
    </header>
    <div style="text-align: center;" class="container">
        <h2>Calculadora IMC </h2>
        <br>
        <form action="" method="POST">
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="peso">Peso(Kg): </label>
            <input type="number" id="peso" name="peso" step="0.1" required><br><br>

            <label for="altura">Altura(m): </label>
            <input type="number" id="altura" name="altura" step="0.01" required><br><br>

            <label for="dataNasc">Ano de nascimento: </label>
            <input type="number" id="dataNasc" name="dataNasc" required><br><br>

            <button class="button" role="button" type="confirm"><span class="text">Calcular</span></button>
            <button class="button" role="button" type="reset"><span class="text">Limpar</span></button><br>

        </form>
        <a href="index.php"><button class="button" role="button"><span class="text">Voltar</span></button></a>

        <div class="resposta">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['peso']) && isset($_POST['altura']) && isset($_POST['nome']) && isset($_POST['dataNasc'])) {
                    $peso = $_POST['peso'];
                    $altura = $_POST['altura'];
                    $nome = $_POST['nome'];
                    $dataNasc = $_POST['dataNasc'];

                    $erro =  empty($nome) || empty($peso) || empty($altura) || empty($dataNasc) ? "Preencha todos os campos!" : ((!is_numeric($altura) || $peso <= 0 || $peso > 500 || $altura <= 0 || $altura > 3 || $dataNasc <= 1924 || $dataNasc > 2024) ? "Insira valores válido" : "");
                    if ($erro) {
                        echo $erro;
                    } else {
                        $imc = $peso / ($altura * $altura);
                        $imc = number_format($imc, 2);
                        $anoAtual = date('Y');
                        $idade = $anoAtual - $dataNasc;

                        $classificacao = ($imc < 18.5) ? "Abaixo do peso" : (($imc < 24.9) ? "Peso Normal" : (($imc < 29.9) ? "Sobre peso" : "Obesidade"));
                        echo "<br>$nome com idade de $idade anos, seu imc é $imc e sua classificação é $classificacao";
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