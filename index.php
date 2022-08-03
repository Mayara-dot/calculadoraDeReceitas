<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
        
        //receitas de xicaras para gramas
        require_once "Ingredientes.php";
        $teste = new Ingredientes();
        print_r($teste);
        $teste->medir(3/4, "colher de sopa", "agua");

        $teste->medir(1/4, "xicara", "farinha de trigo");
        $teste->medir(1, "colher de cha", "fermento em po");
        $teste->medir(4, "xicara", "leite");

        //fazer a funcao de dobro
        

        ?>

    </pre>
   
    
</body>
</html>