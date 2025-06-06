<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador Par/Ímpar</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-align: center;
            width: 400px;
        }
        h1 {
            color: #ff6b6b;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        input, button {
            padding: 12px;
            border-radius: 8px;
            font-size: 16px;
        }
        input {
            border: 2px solid #ddd;
            transition: border 0.3s;
        }
        input:focus {
            border-color: #ff6b6b;
            outline: none;
        }
        button {
            background: linear-gradient(45deg, #ff7676 0%, #f54ea2 100%);
            color: white;
            border: none;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.3s;
        }
        button:hover {
            transform: translateY(-3px);
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            border-radius: 8px;
            font-weight: bold;
        }
        .par { background-color: #84fab0; color: #005a2b; }
        .impar { background-color: #ff9a9e; color: #7f0000; }
        a {
            display: inline-block;
            margin-top: 20px;
            color: #6c5ce7;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔢 Verificador Par/Ímpar</h1>
        
        <form method="post">
            <input type="number" name="numero" placeholder="Digite um número" required>
            <button type="submit">Verificar</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $resultado = [
                "class" => ($_POST["numero"] % 2 == 0) ? "par" : "impar",
                "texto" => ($_POST["numero"] % 2 == 0) ? "PAR" : "ÍMPAR"
            ];
            echo "<div class='result {$resultado['class']}'>";
            echo "O número <strong>{$_POST['numero']}</strong> é <strong>{$resultado['texto']}</strong>!";
            echo "</div>";
        }
        ?>

        <a href="../index.php">← Voltar</a>
    </div>
</body>
</html>