<?php
$premio = "Cachorro cururu";
$valor = 10.00;
$quantNum = 6;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP</title>
</head>

<body>
    <header>
        <h1>RIFA DUS GURI </h1>
    </header>
    <div class="container" style="width: 50%; border-radius: 0;">
        <?php
        $cont = 1;
        while ($cont != $quantNum + 1) {
            echo "<table> <td style='border: 1px solid black; border-right: 2px dashed black ; padding-left: 10px; padding-right: 150px;'>
                            <h4 style='height: 100px'>n°: $cont <br></h4>
                            <h4 style='height: 30px;'>nome: <br></h4>
                            <h4 style='height: 30px'>Telefone: <br></h4>
                            <h4 style='height: 30px'>E-mail: <br></h4>
                        </td>
                        <td style='border: 1px solid black; border-left: 2px dashed black; padding-right: 65px;'>
                            <h4 style='height: 30px; padding-left: 20px;'> n°: $cont <br></h4>
                            <h4 style='height: 30px;text-align: center;  padding-left: 100px;'>$premio <br></h4>
                            <h4 style='height: 30px; text-align: center;  padding-left: 100px;'>valor: R$$valor,00 <br></h4> 
                           <img src='cachorro.jpg' style='width: 300px; padding-bottom: 20px;  padding-left: 100px;' >
                        </td> </table> <br>";
            $cont++;
        }
        ?>
        <a href="index.php"><button class="botao">voltar</button></a>
    </div>

</body>

</html>