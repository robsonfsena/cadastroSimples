<!DOCTYPE html>
<html lang="pt-br">

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Beer Sunset - Cadastro Realizado</title>
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    
    <body>

         <?php

            date_default_timezone_set('America/Sao_Paulo');

            $nomeUsuario = $_POST['nomeUsuario'];
            $dataNascimento = $_POST['dataNascimento']; 
            $emailCadastro = $_POST['emailCadastro'];
            $emailConfirmacao = $_POST['emailConfirmacao'];

            $dataFinal = date('Y');
            $dataTeste = explode("/", $dataNascimento);
            $dataAtual = $dataTeste[2];
            $idade =  $dataFinal - $dataAtual;              

            /*
            echo $nomeUsuario;
            echo "<br>";
            echo $dataNascimento;
            echo "<br>";
            echo $emailCadastro;
            echo "<br>";
            echo $emailConfirmacao;
            echo "<br>";
            echo $idade;*/
        ?>

        <div class="logoPrincipal">
            <img id="logoImgPrincipal" src="images/logo.png" alt="logoBeerHouse">
            <p id="nomeLogo">Beer Sunset</p>
        </div>

        <div class="inicio">
            <h1 id="cadastroRealizado">Cadastro realizado</h1>

            <div>
                <label for="exibeUsuario">Nome do Usuario:</label>
                <span class="saidaCadastro"><?php echo $nomeUsuario?></span>
            </div>
            <div>
                <label for="exibeIdade">Idade:</label>
                <span class="saidaCadastro"><?php echo $idade?></span>
            </div>
            <div>
                <label for="exibeEmail">Email:</label>
                <span class="saidaCadastro"><?php echo $emailCadastro?></span>
            </div>
        <div>



             
        
        
        
    </body>
    
    <script src="index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>


