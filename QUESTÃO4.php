<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        
            body {
            font-family: 'Roboto', sans-serif;
            background-color: #121212;
            color: #e0e0e0;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding: 20px;
        }

        .container {
            background: #1e1e1e;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h1 {
            color: #ffffff;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        label {
            font-size: 16px;
            color: #e0e0e0;
            text-align: left;
        }

        input[type="number"], select {
            padding: 10px;
            font-size: 16px;
            border: 2px solid #333;
            background-color: #2c2c2c;
            color: #e0e0e0;
            border-radius: 4px;
            transition: border-color 0.3s, background-color 0.3s;
        }

        input[type="number"]:focus, select:focus {
            border-color: #6200ea;
            background-color: #333;
            outline: none;
        }

        input[type="submit"] {
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #6200ea;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #3700b3;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            color: #bb86fc;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora Simples</h1>
        <form action="" method="post">
            <label for="num1">Número 1:</label>
            <input type="number" name="num1" id="num1" required>

            <label for="num2">Número 2:</label>
            <input type="number" name="num2" id="num2">

            <label for="operation">Operação:</label>
            <select name="operation" id="operation" required>
                <option value="adição">Soma</option>
                <option value="subtração">Subtração</option>
                <option value="multi">Multiplicação</option>
                <option value="divição">Divisão</option>
                <option value="raiz">Raiz Quadrada</option>
            </select>

            <input type="submit" value="Calcular">
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];
            $result = "";

            switch ($operation) {
                case "adição":
                    $result = $num1 + $num2;
                    echo "<div class='result'>Resultado: $num1 + $num2 = $result</div>";
                    break;
                case "subtração":
                    $result = $num1 - $num2;
                    echo "<div class='result'>Resultado: $num1 - $num2 = $result</div>";
                    break;
                case "multi":
                    $result = $num1 * $num2;
                    echo "<div class='result'>Resultado: $num1 * $num2 = $result</div>";
                    break;
                case "divição":
                    if ($num2 == 0) {
                        echo "<div class='result'>Erro: Divisão por zero não é permitida.</div>";
                    } else {
                        $result = $num1 / $num2;
                        echo "<div class='result'>Resultado: $num1 / $num2 = $result</div>";
                    }
                    break;
                case "raiz":
                    $result = sqrt($num1);
                    echo "<div class='result'>Resultado: √$num1 = $result</div>";
                    break;
                default:
                    echo "<div class='result'>Operação inválida.</div>";
                    break;
            }
        }
        ?>
    </div>
</body>
</html>
