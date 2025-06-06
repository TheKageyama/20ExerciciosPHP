<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
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
            color: #ff7675;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        input {
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border 0.3s;
        }
        input:focus {
            border-color: #ff7675;
            outline: none;
        }
        button {
            background: linear-gradient(45deg, #ff7675 0%, #fdcb6e 100%);
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
        }
        .abaixo { background-color: #74b9ff; color: #003366; }
        .normal { background-color: #55efc4; color: #005a2b; }
        .sobrepeso { background-color: #ffeaa7; color: #7f5e00; }
        .obesidade { background-color: #ff7675; color: #7f0000; }
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
        <h1>🧮 Calculadora IMC</h1>
        
        <form method="post">
            <input type="number" name="peso" placeholder="Peso (kg)" step="0.1" min="30" max="300" required>
            <input type="number" name="altura" placeholder="Altura (m)" step="0.01" min="1.20" max="2.50" required>
            <button type="submit">Calcular</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $peso = $_POST["peso"];
            $altura = $_POST["altura"];
            $imc = $peso / pow($altura, 2);
            $imcFormatado = number_format($imc, 2);
            
            if ($imc < 18.5) {
                $classificacao = "abaixo";
                $texto = "Abaixo do peso";
            } elseif ($imc < 25) {
                $classificacao = "normal";
                $texto = "Peso normal";
            } elseif ($imc < 30) {
                $classificacao = "sobrepeso";
                $texto = "Sobrepeso";
            } else {
                $classificacao = "obesidade";
                $texto = "Obesidade";
            }
            
            echo "<div class='result $classificacao'>";
            echo "IMC: <strong>$imcFormatado</strong><br>";
            echo "Classificação: <strong>$texto</strong>";
            echo "</div>";
        }
        ?>

        <a href="../index.php" class="btn-voltar">← Voltar</a>
    </div>
</body>
</html>