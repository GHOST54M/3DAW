<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Calculadora</title>
    <style>
        *{
            margin:0;
            padding:0;
        }

        h1{
            font-size: 36px;
            margin: 10px;
        }
        #calculadora, #formcalculadora{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;

        }
        #formcalculadora{
            border: 2px solid black;
            border-radius: 15px;
            padding: 20px;
        }
        #formcalculadora > input{
            margin: 20px;
            padding: 5px;
            width: 90px;
            height: 50px;
            font-size: 20px;
        }
        #formcalculadora > select{
            width: 120px;
            height: 50px;
            font-size: 20px;           
        }
        p{
            padding-top: 10px;
            font-size: 30px;
            font-weight: 700;
        }
    </style>
    </head>
    <body>
        <header></header>

        <main>

            <section id="calculadora">
                <h1>Calculadora</h1>
            <form id="formcalculadora" action="index.php" method="GET">

                <input type="number" name="op1">
                <input type="number" name="op2">
                <select name="operacao" form="formcalculadora">
                    <option value="1">Soma</option>
                    <option value="2">Subtração</option>
                    <option value="3">Divisão</option>
                    <option value="4">Multiplicação</option>
                </select>

                <input type="submit" value="Calcular">

            </form>
                <?php
                    $op1 = $_GET["op1"];
                    $op2 = $_GET["op2"];
                    $operacao = $_GET["operacao"];

                    switch ($operacao) {

                        case 1:
                           $resultado = $op1 + $op2;
                            break;

                        case 2:
                            $resultado = $op1 - $op2;
                            break;

                        case 3:
                            $resultado = $op1 / $op2;
                            break;

                        case 4:
                            $resultado = $op1 * $op2;
                             break;
                    }

                    echo "<p>Resultado:$resultado </p>";
                ?>
            </section>

        </main>

<footer></footer>
    </body>
</html>