<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 1</title>
</head>
<style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
           
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
            max-width: 600px;
            width: 100%;
            text-align: center;
        }

        .result {
            color: #555;
            text-align: left;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ATIVIDADE 1</h1>
       
        <div class="result">
            <?php
            for($i = 1; $i <= 100; $i++){
                if($i % 3 == 0 && $i % 5 == 0){
                    echo("Número $i é múltiplo de 3 e 5 <br>");
                }
                elseif($i % 3 == 0){
                    echo("Número $i é múltiplo de 3 <br>");
                }
                elseif($i % 5 == 0){
                    echo("Número $i é múltiplo de 5 <br>");
                }
            }
            ?>
        </div>
    </div>
</body>
</html>