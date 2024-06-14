<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moeda</title>
</head>

<body>
    <header>
        <h1>Conversor de moeda</h1>
    </header>
    <div style="text-align: center;" class="container">
        <h2>Converter moeda </h2>
        <br>
        <form action="" method="POST">
            <label for="valor">Valor: </label>
            <input type="float" id="valor" name="valor" step="0,01" required>
            <br><br>

            <label for="convDeLbl">Converter de: </label>
            <select name="convDe" id="convDe">
                <option value=""></option>
                <option value="BRLD">BRL</option>
                <option value="USDD">USD</option>
                <option value="EURD">EUR</option>
            </select>
            <br><br>

            <label for="convParaLbl">Converter para: </label>
            <select name="convPara" id="convPara">
                <option value=""></option>
                <option value="BRLP">BRL</option>
                <option value="USDP">USD</option>
                <option value="EURP">EUR</option>
            </select>
            <br><br>

            <button class="button" role="button" type="submit"><span class="text">Converter</span></button>
            <button class="button" role="button" type="reset"><span class="text">Limpar</span></button><br>

        </form>
        <a href="index.php"><button class="button" role="button"><span class="text">Voltar</span></button></a><br>
        <div class="resposta">
            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['valor']) && isset($_POST['convDe']) && isset($_POST['convPara'])) {
                    $valor = $_POST['valor'];
                    $convDe = $_POST['convDe'];
                    $convPara = $_POST['convPara'];

                    $erro =  empty($valor) ? "Preencha o campo Valor!" : ((/*!is_numeric($valor) ||*/$valor <= 0) ? "Insira valores válido" : "");
                    if ($erro) {
                        echo $erro;
                    } else {
                        if ($convDe == 'BRLD' && $convPara == 'BRLP') {
                            $valorS = number_format($valorS, 2);
                            echo "R$ $valorS BRL";
                        }
                        if ($convDe == 'BRLD' && $convPara == 'USDP') {
                            $valorS  = $valor * 0.19;
                            $valorS = number_format($valorS, 2);
                            echo "$ $valorS USD";
                        }
                        if ($convDe == 'BRLD' && $convPara == 'EURP') {
                            $valorS = $valor * 0.17;
                            $valorS = number_format($valorS, 2);
                            echo "$ $valorS EUR";
                        }


                        if ($convDe == 'USDD' && $convPara == 'BRLP') {
                            $valorS = $valor * 5.37;
                            $valorS = number_format($valorS, 2);
                            echo "R$ $valorS BRL";
                        }
                        if ($convDe == 'USDD' && $convPara == 'USDP') {
                            $valorS = number_format($valorS, 2);
                            echo "$ $valor USD";
                        }
                        if ($convDe == 'USDD' && $convPara == 'EURP') {
                            $valorS = $valor * 0.93;
                            $valorS = number_format($valorS, 2);
                            echo "$ $valorS EUR";
                        }

                        if ($convDe == 'EURD' && $convPara == 'EURP') {
                            $valorS = number_format($valorS, 2);
                            echo "$ $valorS EUR";
                        }
                        if ($convDe == 'EURD' && $convPara == 'USDP') {
                            $valorS = $valor * 1.07;
                            $valorS = number_format($valorS, 2);
                            echo "$ $valorS USD";
                        }
                        if ($convDe == 'EURD' && $convPara == 'BRLP') {
                            $valorS = $valor * 5.76;
                            $valorS = number_format($valorS, 2);
                            echo "R$ $valorS BRL";
                        }
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