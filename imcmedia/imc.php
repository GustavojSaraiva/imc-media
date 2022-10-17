<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>
    </head>

    <body>
       
        <?php
        if (isset($_POST['nome'])) {
            $nome = $_POST['nome'];
            $a = $_POST['alt'];
            $p = $_POST['peso'];
            $sit = "";
            $pr = str_replace(',', '.', $p);
            $ar = str_replace(',', '.', $a);
            if ($pr == '' && $ar == '') {
                echo ('Não foi possivel fazer os calculos com valores nulos');;
            } else if ($pr == 0 && $ar == 0) {
                echo ('Não foi possivel fazer os calculos com valores zerados');;
            } else {
                $cal = $pr / ($ar * $ar);
                if ($cal < 18.5) {
                    $sit = 'ABAIXO DO PESO';
                } elseif ($cal >= 18.5 && $cal <= 24.9) {
                    $sit = 'NORMAL';
                } elseif ($cal >= 25 && $cal <= 29.9) {
                    $sit = 'SOBREPESO, GRAU I';
                } elseif ($cal >= 30 && $cal <= 39.9) {
                    $sit = 'OBESIDADE, GRAU II';
                } elseif ($cal >= 40) {
                    $sit = 'OBESIDADE GRAVE, GRAU III';
                }
            }
        }
        ?>
        <div id="interface">
            <header id="cabecalho">
                <hgroup>
                    <h1 style="text-align: center;">IMC</h1>
                </hgroup>
            </header>
            <h3>Sistema de consulta de imc</h3>
            

            <h3>Nome: <span id="nom"><?php if (isset($nome)) echo $nome; ?></span></h3>
            <h3>Situação: <span id="sit"><?php if (isset($sit)) echo $sit; ?></span></h3>

            <form action="" method="POST">
                <div class="form-nome">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome"><br>
                </div>
                <div class="form-n1">
                    <label for="peso">Peso:</label>
                    <input type="number" name="peso" id="peso" step="0.01"><br>
                </div>
                <div class="form-n2">
                    <label for="alt">Altura:</label>
                    <input type="number" name="alt" id="alt" step="0.01"><br>
                </div>
                <div class="btn">
                    <button>Enviar</button>
                </div>
            </form>
            <div class="link">
                <a href="../index.html">Voltar</a>
            </div>
        </div>
    </body>

    </html>