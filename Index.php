<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios PHP</title>
    <style>
        :root {
            --primary: #6c5ce7;
            --secondary: #a29bfe;
            --background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            --card-bg: white;
            --text: #2d3436;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: var(--background);
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: var(--text);
        }
        
        header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        h1 {
            color: var(--primary);
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        
        .subtitle {
            color: #636e72;
            font-size: 1.1rem;
        }
        
        .exercises-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            width: 100%;
            max-width: 1200px;
        }
        
        .exercise-card {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 25px;
            box-shadow: var(--shadow);
            transition: transform 0.3s, box-shadow 0.3s;
            text-decoration: none;
            color: inherit;
            border: 2px solid transparent;
        }
        
        .exercise-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            border-color: var(--secondary);
        }
        
        .exercise-card h2 {
            color: var(--primary);
            margin-top: 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .exercise-card p {
            color: #636e72;
            line-height: 1.5;
        }
        
        .exercise-number {
            display: inline-block;
            background: var(--primary);
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            font-weight: bold;
        }
        
        footer {
            margin-top: 40px;
            text-align: center;
            color: #636e72;
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .exercises-grid {
                grid-template-columns: 1fr;
            }
            
            h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Exercícios PHP</h1>
        <p class="subtitle">Pratique seus conhecimentos com estes exercícios</p>
    </header>
    
    <main class="exercises-grid">
        <a href="exer1/exer1.php" class="exercise-card">
            <h2><span class="exercise-number">1</span> Calculadora do Dobro</h2>
            <p>Calcule o dobro de um número digitado pelo usuário.</p>
        </a>
        
        <a href="exer2/exer2.php" class="exercise-card">
            <h2><span class="exercise-number">2</span> Par ou Ímpar</h2>
            <p>Verifique se um número é par ou ímpar.</p>
        </a>
        
        <a href="exer3/exer3.php" class="exercise-card">
            <h2><span class="exercise-number">3</span> Somar Números</h2>
            <p>Some dois números digitados e exiba o resultado.</p>
        </a>
        
        <a href="exer4/exer4.php" class="exercise-card">
            <h2><span class="exercise-number">4</span> Cálculo de Média</h2>
            <p>Calcule a média de 3 notas e verifique aprovação.</p>
        </a>
        
        <a href="exer5/exer5.php" class="exercise-card">
            <h2><span class="exercise-number">5</span> Conversor de Temperatura</h2>
            <p>Converta entre Celsius e Fahrenheit.</p>
        </a>
        
        <a href="exer6/exer6.php" class="exercise-card">
            <h2><span class="exercise-number">6</span> Calculadora IMC</h2>
            <p>Calcule o Índice de Massa Corporal.</p>
        </a>
        
        <a href="exer7/exer7.php" class="exercise-card">
            <h2><span class="exercise-number">7</span> Cálculo Fatorial</h2>
            <p>Calcule o fatorial de um número digitado.</p>
        </a>
        
        <a href="exer8/exer8.php" class="exercise-card">
            <h2><span class="exercise-number">8</span> Múltiplos de Número</h2>
            <p>Exiba os 10 primeiros múltiplos de um número.</p>
        </a>
        
        <a href="exer9/exer9.php" class="exercise-card">
            <h2><span class="exercise-number">9</span> Tabuada</h2>
            <p>Mostre a tabuada completa de um número.</p>
        </a>
        
        <a href="exer10/exer10.php" class="exercise-card">
            <h2><span class="exercise-number">10</span> Calculadora de Idade</h2>
            <p>Calcule a idade com base no ano de nascimento.</p>
        </a>
        
        <a href="exer11/exer11.php" class="exercise-card">
            <h2><span class="exercise-number">11</span> Simulador de Empréstimo</h2>
            <p>Calcule parcelas com juros simples.</p>
        </a>
        
        <a href="exer12/exer12.php" class="exercise-card">
            <h2><span class="exercise-number">12</span> Validador de Senha</h2>
            <p>Verifique se a senha tem pelo menos 8 caracteres.</p>
        </a>

           <a href="exer13/exer13.php" class="exercise-card">
            <h2><span class="exercise-number">12</span> Calculadora IMC</h2>
            <p>Indice de massa corporal 2.</p>
        </a>
<a href="exer14/exer14.php" class="exercise-card">
            <h2><span class="exercise-number">12</span> Extrator de Acrônimo<</h2>
            <p>Extrai o acronimo da palavra.</p>
        </a>
           <a href="exer15/exer15.php" class="exercise-card">
            <h2><span class="exercise-number">12</span> Sorteio dos Descontos</h2>
            <p>Promoção!</p>
        </a>

           <a href="exer16/exer16.php" class="exercise-card">
            <h2><span class="exercise-number">12</span> Calculador Hipotenusa</h2>
            <p>A soma dos quadrados dos catetos dos quadrados do nao sei oq.</p>
        </a>

           <a href="exer17/exer17.php" class="exercise-card">
            <h2><span class="exercise-number">12</span>Arredondador de nota</h2>
            <p>Não vai tirar 7,8 xiru.</p>
        </a>

           <a href="exer18/exer18.php" class="exercise-card">
            <h2><span class="exercise-number">12</span> Gerador nome Usuario</h2>
            <p>Gera seu nome.</p>
        </a>

           <a href="exer19/exer19.php" class="exercise-card">
            <h2><span class="exercise-number">12</span> Censurador de palavras</h2>
            <p>P*T@QP@R**.</p>
        </a>

           <a href="exer20/exer20.php" class="exercise-card">
            <h2><span class="exercise-number">12</span>Formatador de Titulo</h2>
            <p>Formata o Titulo.</p>
        </a>
    </main>
    
    <footer>
        <p>Davi Schinoff; <?= date('Y') ?></p>
    </footer>
</body>
</html>