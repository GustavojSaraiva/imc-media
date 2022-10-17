<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Média</title>
</head>

<body>
    
    <?php
    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $sit = "";
        $media = ($n1 + $n2) / 2;
        if ($media >= 6) {
            $sit = "Aprovado";
        } elseif ($media >= 4) {
            $sit = "Exame final";
        } else {
            $sit = 'Reprovado';
        }
    }
    ?>
    <div id="interface">
        <header id="cabecalho">
            <hgroup>
                <h1 style="text-align: center;">Cálculo de Média</h1>
            </hgroup>
        </header>

        <!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Cálculo de Média</title>
</head>

<body>
    
    <?php
    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $sit = "";
        $media = ($n1 + $n2) / 2;
        if ($media >= 6) {
            $sit = "Aprovado";
        } elseif ($media >= 4) {
            $sit = "Exame final";
        } else {
            $sit = 'Reprovado';
        }
    }
    ?>
    <div id="interface">
        <header id="cabecalho">
            <hgroup>
                <h1 style="text-align: center;">Média</h1>
            </hgroup>
        </header>

       

        <h3>Nome: <span id="nom"><?php if(isset($nome))echo $nome; ?></span></h3>
        <h3>Média: <span id="med"><?php if(isset($media))echo $media; ?></span></h3>
        <h3>Situação: <span id="sit"><?php if(isset($sit)) echo$sit; ?></span></h3>

        <form action="" method="post">
            <div class="form-nome">
                <label for="nome">Nome</label><br>
                <input type="text" name="nome" id="nome"><br>
            </div>
            <div class="form-n1">
                <label for="n1">Nota 1</label><br>
                <input type="number" name="n1" id="n1"><br>
            </div>
            <div class="form-n2">
                <label for="n2">Nota 2</label><br>
                <input type="number" name="n2" id="n2"><br>
            </div>
            <div class="btn">
                <button>Calcular</button>
            </div>
        </form>
        <div class="link">
            <a href="../index.html">Voltar</a>
        </div>
    </div>
</body>

</html>

       