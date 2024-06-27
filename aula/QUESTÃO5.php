<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #121212;
            color: #e0e0e0;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            background-color: #1e1e1e;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 600px;
            text-align: center;
        }

        h1 {
            color: #ffffff;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-size: 18px;
            color: #ffffff;
            text-align: left;
        }

        input, textarea, select {
            width: 90%;
            padding: 12px;
            border-radius: 4px;
            border: 1px solid #444;
            background-color: #333;
            color: #e0e0e0;
        }

        input:focus, textarea:focus, select:focus {
            outline: none;
            border-color: #6200ea;
        }

        button {
            padding: 12px;
            font-size: 16px;
            color: #ffffff;
            background-color: #6200ea;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #3700b3;
        }

        a {
            margin-top: 20px;
            color: #6200ea;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #333;
            border-radius: 4px;
            text-align: left;
        }

        .result h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contato</h1>
        <form id="contactForm" method="post" action="">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="4" required></textarea>

            <label for="motivo">Motivo do Contato:</label>
            <select id="motivo" name="motivo" required>
                <option value="" disabled selected>Selecione um motivo</option>
                <option value="duvida">Dúvida</option>
                <option value="feedback">Feedback</option>
                <option value="problema">Problema</option>
                <option value="outro">Outro</option>
            </select>

            <button type="submit">Enviar</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $mensagem = $_POST["mensagem"];
            $motivo = $_POST["motivo"];

            echo "<div class='result'>";
            echo "<h2>Dados Recebidos:</h2>";
            echo "<p><strong>Nome:</strong> $nome</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Mensagem:</strong> $mensagem</p>";
            echo "<p><strong>Motivo:</strong> $motivo</p>";
            echo "</div>";
        }
        ?>
        
    
    </div>
</body>
</html>
