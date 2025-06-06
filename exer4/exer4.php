<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Média</title>
    <style>
        body{font-family:'Segoe UI',Tahoma,sans-serif;background:linear-gradient(135deg,#f5f7fa 0%,#c3cfe2 100%);display:flex;justify-content:center;align-items:center;height:100vh;margin:0}
        .container{background:white;padding:30px;border-radius:15px;box-shadow:0 10px 30px rgba(0,0,0,0.1);text-align:center;width:400px}
        h1{color:#ff6b6b;margin-bottom:20px}
        form{display:flex;flex-direction:column;gap:15px}
        input{padding:12px;border:2px solid #ddd;border-radius:8px;font-size:16px;transition:border 0.3s}
        input:focus{border-color:#ff6b6b;outline:none}
        button{background:linear-gradient(45deg,#ff7676 0%,#f54ea2 100%);color:white;border:none;padding:12px;border-radius:8px;font-size:16px;font-weight:bold;cursor:pointer;transition:transform 0.3s}
        button:hover{transform:translateY(-3px)}
        .result{margin-top:20px;padding:15px;border-radius:8px;font-weight:bold;background:#84fab0;color:#005a2b}
        a{display:inline-block;margin-top:20px;color:#6c5ce7;text-decoration:none;font-weight:bold}
        a:hover{text-decoration:underline}
    </style>
</head>
<body>
    <div class="container">
        <h1>📊 Cálculo de Média</h1>
        
        <form method="post">
            <input type="number" name="nota1" placeholder="Nota 1" step="0.1" min="0" max="10" required>
            <input type="number" name="nota2" placeholder="Nota 2" step="0.1" min="0" max="10" required>
            <input type="number" name="nota3" placeholder="Nota 3" step="0.1" min="0" max="10" required>
            <button type="submit">Calcular Média</button>
        </form>

        <?php

if (isset($_POST['nota1'])) {
    
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $media = ($nota1 + $nota2 + $nota3) / 3;

    if ($media >= 6) {
        $situacao = "Aprovado";
    } else {
        $situacao = "Reprovado";
    }
    
    
    echo "<div class='result'>";
    echo "Média: ".round($media, 1)." - $situacao";
    echo "</div>";
}
?>
        <a href="../index.php">← Voltar</a>
    </div>
</body>
</html>
