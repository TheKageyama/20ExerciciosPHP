<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Hipotenusa</title>
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
            color: #0984e3;
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
            border-color: #0984e3;
            outline: none;
        }
        button {
            background: linear-gradient(45deg, #0984e3 0%, #74b9ff 100%);
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
            background-color: #74b9ff;
            color: #003366;
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
        <h1>📐 Calculadora de Hipotenusa</h1>
        
        <form method="post">
            <input type="number" name="catetoA" placeholder="Cateto A" step="0.01" min="0.01" required>
            <input type="number" name="catetoB" placeholder="Cateto B" step="0.01" min="0.01" required>
            <button type="submit">Calcular</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $catetoA = $_POST["catetoA"];
            $catetoB = $_POST["catetoB"];
            $hipotenusa = sqrt(pow($catetoA, 2) + pow($catetoB, 2));
            
            echo "<div class='result'>";
            echo "Cateto A: <strong>$catetoA</strong><br>";
            echo "Cateto B: <strong>$catetoB</strong><br>";
            echo "Hipotenusa: <strong>" . number_format($hipotenusa, 2) . "</strong>";
            echo "</div>";
        }
        ?>

        <a href="../index.php" class="btn-voltar">← Voltar</a>
    </div>
</body>
</html>