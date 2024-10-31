<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $operacao = $_POST['operacao'];

    $result = null;

    switch($operacao){
        case'+':
            $result = $num1 + $num2;
            break;
        case'-':
            $result = $num1 - $num2;
            break;    
        case'*':
            $result = $num1 * $num2;
            break;
        case'/':
            $result = $num1 / $num2;
            break;
        default:
            $result = "Operação inválida!";
    }
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
        *{
            margin: 0;
            padding 0;
        }
        .fundo{
            background-image: linear-gradient(45deg, black, crimson);
            height: 100vh;
            color: #fff;
            font-family: Arial, Helvetica, sans-serif;
        }
        .calculadora{
            position: absolute;
            background-color: black;
            left: 50%;
            transform: translate(-50%,50%);
            border-radius: 15px;
            padding: 15px;
        }
        .buton{
            width: 50px;
            height: 50px;
            font-size: 25px;
            cursor: pointer;
            background-color: rgb(31,31,31  );
            border: none;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="fundo">
        <h1>Minha Calculadora</h1>
        <div class="calculadora">
            <h1>Calculadora</h1>
            <form method="POST" action="">
                <input type="number" name="number1" placeholder="Número um:" required>
                <input type="number" name="number2" placeholder="Número dois:" required>
                <select name="operacao">
                    <option value="+">Adicionar</option>
                    <option value="-">Subtrair</option>
                    <option value="*">Multiplicação</option>
                    <option value="/">Divisão</option>
                </select>
                <button type="submit">Calcular</button>

                <p><?php echo "<h2>Resultado: $result </h2>"?> </p>
                <p id="result"></p>
                <table>
                    <tr>
                        <td><Button class="buton">C</Button></td>
                        <td><Button class="buton"><</Button></td>
                        <td><Button class="buton">/</Button></td>
                        <td><Button class="buton">X</Button></td>
                    </tr>
                    <tr>
                        <td><button class="buton">7</button></td>
                        <td><button class="buton">8</button></td>
                        <td><button class="buton">9</button></td>
                        <td><button class="buton">-</button></td>
                    </tr>
                    <tr>
                        <td><button class="buton">4</button></td>
                        <td><button class="buton">5</button></td>
                        <td><button class="buton">6</button></td>
                        <td><button class="buton">+</button></td>
                    </tr> 
                    <tr>
                        <td><button class="buton">1</button></td>
                        <td><button class="buton">2</button></td>
                        <td><button class="buton">3</button></td>
                        <td rowspan="2"><button class="buton">=</button></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button class="buton">0</button></td>
                        <td><button class="buton">.</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>