<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 2</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1, h2 {
            color: #333;
            text-align: center;
        }

        .container {
            background: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        input[type="number"] {
            padding: 10px;
            font-size: 16px;
            border: 2px solid #ddd;
            border-radius: 4px;
            transition: border-color 0.3s;
        }

        input[type="number"] {
            border-color: #007BFF;
            outline: none;
            background-color: wheat;
        }

        .botão {
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .botão:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ATIVIDADE 2</h1>
        <h2>Crie uma página PHP onde o usuário precisa informar um número qualquer. O código deve retornar se o número digitado é par ou ímpar.</h2>
        <form action="" method="post">
            <input type="number" id="numero" name="number" required>
            <input type="submit" value="Enviar" class="botão">
        </form>
    </div>

    <?php 
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
     $number = intval($_POST["number"]);

     if($number % 2 == 0){
        echo("Numero é par");
     }
     else{
        echo("Numero é impar");
     }
    }
    
    ?>
</body>
</html>