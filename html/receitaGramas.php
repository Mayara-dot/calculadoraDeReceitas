<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <!--Google Font Family Uchen -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <!--Google Font Family Square Peg-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <!--Google Font Family EB Garamond-->
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;1,400;1,500;1,800&family=Square+Peg&family=Uchen&display=swap" rel="stylesheet"> 
    <title>Calculadora de Receitas</title>
</head>
<header>
    <h1>Calculadora de receitas</h1>
</header>
    </br>
    <main>
        <h2>Ingredientes</h2>
        
        <div class="container">    
        <?php
        require "../php/dataForm.php";
        GetData();
        ?>
        </div>
    </main>
</body>
<footer>
    </br></br>
    <div>
        <a href="/">Voltar a página inicial</a>
    </div>
    <div>
        <a href="mailto:mayara_slima@hotmail.com">Dúvidas e sugestões</a>
    </div>
</footer>
</html>