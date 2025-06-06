<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somar Números</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            width: 350px;
            text-align: center;
        }
        h1 {
            color: #4682b4;
            margin-bottom: 20px;
        }
        input {
            padding: 10px;
            width: 80%;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            background-color: #4682b4;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
        button:hover {
            background-color: #5f9ea0;
        }
        .resultado {
            margin-top: 20px;
            padding: 15px;
            background-color: #e6f7ff;
            border-radius: 5px;
            font-weight: bold;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            color: #4682b4;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Somar Dois Números</h1>
        
        <form method="post">
            <input type="number" name="numero1" placeholder="Digite o primeiro número" required><br>
            <input type="number" name="numero2" placeholder="Digite o segundo número" required><br>
            <button type="submit">Somar</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            
            
            $total = $numero1 + $numero2;
            
            
            echo '<div class="resultado">';
            echo "Resultado: $numero1 + $numero2 = <strong>$total</strong>";
            echo '</div>';
        }
        ?>

        <a href="../index.php">Voltar para a lista</a>
    </div>
</body>
</html>
