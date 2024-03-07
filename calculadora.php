<?php

// Pegar variáveis vinda na URL
// $variaveis = $_GET;

// Por ser array, usamos o var_dump para
// Verificar seu conteúdo
// var_dump($variaveis);

$numero1 = $_POST["numero1"] ?? 0;
$numero2 = $_POST["numero2"] ?? 0;
$operador = $_POST["operador"] ?? "somar";

if ($operador == "somar") {
    $resultado = $numero1 + $numero2;
} elseif ($operador == "subtrair") {
    $resultado = $numero1 - $numero2;
} elseif ($operador == "multiplicar") {
    $resultado = $numero1 * $numero2;
} elseif ($operador == "dividir") {
    if ($numero2 == 0) {
        echo "
        <script>
        alert('Impossível divisão por ZERO');
        exit();
        </script>";
    } else {
        $resultado = $numero1 / $numero2;
    }
}
?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Calculadora PHP</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <form method="post">
                    <div class="mb-3">
                        <label for="numero1" class="form-label">
                            Número 1
                        </label>
                        <input value="<?php echo $numero1 ?>" type="number" name="numero1" id="numero1" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="operador" class="form-label">
                            Operador
                        </label>
                        <select class="form-control" name="operador" id="operador">
                            <option <?php echo $operador == "somar" ? "selected" : "" ?> value="somar">Somar</option>
                            <option <?php echo $operador == "subtrair" ? "selected" : "" ?> value="subtrair">Subtrair</option>
                            <option <?php echo $operador == "multiplicar" ? "selected" : "" ?> value="multiplicar">Multiplicar</option>
                            <option <?php echo $operador == "dividir" ? "selected" : "" ?> value="dividir">Dividir</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="numero2" class="form-label">
                            Número 2
                        </label>
                        <input value="<?php echo $numero2 ?>" type="number" name="numero2" id="numero2" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="resultado" class="form-label">
                            Resultado
                        </label>
                        <input value="<?php echo $resultado ?>" type="number" id="resultado" class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-danger" type="button" onclick="limparForm()">Limpar</button>
                        <button class="btn btn-primary" type="submit">Calular</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        // Função para limpar o formulário
        function limparForm() {
            document.getElementById("numero1").value = ""
            document.getElementById("numero1").focus()
            document.getElementById("numero2").value = ""
            document.getElementById("resultado").value = ""
        }
    </script>
</body>

</html>