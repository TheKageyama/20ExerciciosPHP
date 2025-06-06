<!DOCTYPE html>
<html>
<head>
    <title>Simulador de Empréstimo</title>
    <style>body { font-family: Arial; max-width: 400px; margin: 0 auto; padding: 20px; }</style>
</head>
<body>
    <h2>Simulador de Empréstimo</h2>
    <form method="post">
        Valor: <input type="number" name="valor" required><br>
        Parcelas: <input type="number" name="parcelas" required><br>
        Juros (% a.m.): <input type="number" name="juros" step="0.1" required><br>
        <button>Simular</button>
    </form>
    <?php
    if (isset($_POST['valor'])) {
        $valor = $_POST['valor'];
        $parcelas = $_POST['parcelas'];
        $juros = $_POST['juros'] / 100;
        
        $total = $valor * (1 + ($juros * $parcelas));
        $mensal = $total / $parcelas;
        
        echo "Total a pagar: R$ " . number_format($total, 2, ',', '.') . "<br>";
        echo "Parcela mensal: R$ " . number_format($mensal, 2, ',', '.');
    }
    ?>
</body>
</html>
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
        color: #ff6b6b;
        margin-bottom: 20px;
    }
    form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    input[type="number"] {
        padding: 12px;
        border: 2px solid #ddd;
        border-radius: 8px;
        font-size: 16px;
        transition: border 0.3s;
    }
    input[type="number"]:focus {
        border-color: #ff6b6b;
        outline: none;
    }
    button {
        background: linear-gradient(45deg, #ff7676 0%, #f54ea2 100%);
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
    .par {
        background-color: #84fab0;
        color: #005a2b;
    }
    .impar {
        background-color: #ff9a9e;
        color: #7f0000;
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