<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css" media="screen" />
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!--Google Font Family Uchen -->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!--Google Font Family Square Peg-->
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;1,400;1,500;1,800&family=Square+Peg&family=Uchen&display=swap" rel="stylesheet"> <!--Google Font Family EB Garamond-->
    <title>Calculadora de Receitas</title>
</head>
<body>
    <header>
        <h1>Calculadora de receitas</h1>
        <p> Aqui você poderá calcular o peso da sua receita favorita em <strong>gramas</strong>, 
            ou você pode escolher para <strong>dobrar</strong> ou <strong>triplicar</strong> as medidas da receita original...
        </p>
    </header>
    </br>
    <main>
        <h2>Ingredientes</h2>
        <h4>Selecione as medidas da sua receita:</h4>
            
        <form action="./php/receitas.php" Method = "GET">
            <?php
                include "./php/displayMedidas.php";
            ?>

            <div class="button">
                <button type="submit">Calcular Peso em gramas</button>
                <button type="submit">Drobro da receita</button>
                <button type="submit">Triplo da receita</button>
            </div>
        </form>  
    </main>
</body>
<footer>
    <tr>____________________________________________</tr></br></br>
    <div>
        <a href="/">Voltar a página original</a>
    </div>
    <div>
        <a href="/">Dúvidas e sugestões</a>
    </div>
    
</footer>
</html>