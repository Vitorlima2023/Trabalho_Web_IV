<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUESTÃO 3</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        h1, h2 {
            color: #ffffff;
            text-align: center;
            margin: 5px 0;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #121212;
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

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        label {
            font-size: 18px;
            color: #e0e0e0;
        }

        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            border: 2px solid #333;
            background-color: #2c2c2c;
            color: #e0e0e0;
            border-radius: 4px;
            transition: border-color 0.3s, background-color 0.3s;
        }

        input[type="text"]:focus {
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

    <h1>ATIVIDADE 3</h1>
    
        <br>
    <div class="container">
        <form action="" method="post">
            <label for="text">Digite apenas uma palavra</label>
            <input type="text" name="text" id="text" required>
            <input type="submit" value="Enviar">
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $texto = $_POST["text"];
            $Ccount = strlen($texto);
            echo "<div class='result'>A palavra <strong>$texto</strong> tem <strong>$Ccount</strong> caracteres.</div>";
        }
        ?>
    </div>
</body>
</html>
