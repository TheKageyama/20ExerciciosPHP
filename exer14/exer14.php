<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extrator de Acrônimo</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }
        h1 {
            color: #e17055;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        textarea {
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border 0.3s;
            height: 100px;
            resize: vertical;
        }
        textarea:focus {
            border-color: #e17055;
            outline: none;
        }
        button {
            background: linear-gradient(45deg, #e17055 0%, #fab1a0 100%);
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 16px;
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
            background-color: #fab1a0;
            color: #7f0000;
            text-align: left;
        }
        .btn-voltar {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background: #6c5ce7;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background 0.3s;
        }
        .btn-voltar:hover {
            background: #5649c0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔤 Extrator de Acrônimo</h1>
        
        <form method="post">
            <textarea name="frase" placeholder="Digite a frase para extrair o acrônimo" required></textarea>
            <button type="submit">Extrair</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $frase = $_POST["frase"];
            $palavras = explode(' ', $frase);
            $acronimo = '';
            
            foreach ($palavras as $palavra) {
                if (!empty($palavra)) {
                    $acronimo .= strtoupper(substr($palavra, 0, 1));
                }
            }
            
            echo "<div class='result'>";
            echo "Frase original: <strong>" . htmlspecialchars($frase) . "</strong><br><br>";
            echo "Acrônimo: <strong>$acronimo</strong>";
            echo "</div>";
        }
        ?>

        <a href="../index.php" class="btn-voltar">← Voltar</a>
    </div>
</body>
</html>