<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando atribuições</title>
</head>
<body>
    <?php 
        $nome = "Maria Clara"; //string - pode ser alterado
        $sobrenome = "Piromali Guarizo"; //string - pode ser alterado
        $idade = 22; //int - pode ser alterado
        $peso = 83.10; //float - pode ser alterado
        $casado = true; //bool - pode ser alterado
        const CURSO = "TI"; //string - não pode ser alterado
        //
        //
        //
        //
        //
        echo "Olá $nome $sobrenome! Sua idade é $idade, seu peso é $peso e você ";
        if (!$casado) // aqui não é necessário utilizar o ==, apenas utilizando o ! que é sinal de negação, ele le como se fosse -> "se não casado, echo não é casado"
            echo "não é casado!";
        else
            echo "é casado!";
    ?>
</body>
</html>