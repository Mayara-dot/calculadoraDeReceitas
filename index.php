<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css" media="screen" />
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <!--Google Font Family Uchen -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <!--Google Font Family Square Peg-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <!--Google Font Family EB Garamond-->
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;1,400;1,500;1,800&family=Square+Peg&family=Uchen&display=swap" rel="stylesheet"> 
     <!-- Font Icons-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        
        <div>    
            <form action="/html/receitaGramas.php" method="POST">
            <?php
                include "./php/displayMedidas.php";
            ?>
            <div class="button">
                <button type="submit" name="button" value="gramas">Calcular Peso em gramas
                    <span class="icon">
                    <i class="fa fa-calculator"></i>
                    </span>
                </button>
                <button type="submit" name="button" value="dobro">Dobro da receita
                    <span class="icon">
                    <i class="fa fa-angle-double-up"></i>
                    </span>
                </button>
                <button type="submit" name="button" value="triplo">Triplo da receita
                    <span class="icon">
                    <i class="fa fa-dice-three"></i>
                    </span>
                </button>
                <button type="submit" name="button" value="metade">Metade da receita
                    <span class="icon">
                    <i class="fa fa-circle-half-stroke"></i>
                    </span>
                </button>
            </div>
            </form>
        </div>

    </main>
</body>
<footer>
    </br></br>
    <div>
        <a href="mailto:mayara_slima@hotmail.com">Dúvidas e sugestões</a>
    </div>
    
</footer>
<script src="./js/script.js"></script>
</html>