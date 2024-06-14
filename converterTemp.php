<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter temperatura</title>
</head>

<body>
    <header>
        <h1>Conversor de temperatura</h1>
    </header>
    <div style="text-align: center;" class="container">
        <h2>Converter Temperatura </h2>
        <br>
        <form action="" method="POST">
            <label for="temp">Temperatura: </label>
            <input type="float" id="temp" name="temp" step="0,1" required>
            <br><br>

            <label for="convDeLbl">Converter de: </label>
            <select name="convDe" id="convDe">
                <option value=""></option>
                <option value="celsiusD">Celsius</option>
                <option value="fahreinheitD">Fahreinheit</option>
            </select>
            <br><br>

            <label for="convParaLbl">Converter para: </label>
            <select name="convPara" id="convPara">
                <option value=""></option>
                <option value="celsiusP">Celsius</option>
                <option value="fahreinheitP">Fahreinheit</option>
            </select>
            <br><br>

            <button class="button" type="submit" role="button"><span class="text">Calcular Temperatura</span></button>
            <button class="button" type="submit" role="button"><span class="text">Calcular Temperatura</span></button><br>

        </form><a href="index.php"><button class="button" type="submit" role="button"><span class="text">voltar</span></button></a><br>

        <div class="resposta">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['temp']) && isset($_POST['convDe']) && isset($_POST['convPara'])) {
                    $temp = $_POST['temp'];
                    $convDe = $_POST['convDe'];
                    $convPara = $_POST['convPara'];

                    $erro =  empty($temp) || empty($convDe) || empty($convPara) ? "Preencha o campo Valor!" : ((!is_numeric($temp)) ? "Insira valores válido" : "");
                    if ($erro) {
                        echo $erro;
                    } else {
                        if ($convDe == 'celsiusD' && $convPara == 'celsiusP') {
                            echo "$temp °C";
                        }
                        if ($convDe == 'celsiusD' && $convPara == 'fahreinheitP') {
                            $temp = $temp * 1.8 + 32;
                            $temp = number_format($temp, 2);
                            echo "$temp °F";
                        }

                        if ($convDe == 'fahreinheitD' && $convPara == 'fahreinheitP') {
                            echo " $temp °F";
                        }
                        if ($convDe == 'fahreinheitD' && $convPara == 'celsiusP') {
                            $temp = ($temp - 32) / 1.8;
                            $temp = number_format($temp, 2);
                            echo "$temp °C";
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