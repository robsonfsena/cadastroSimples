<!DOCTYPE html>
<html lang="pt-br">

<html>
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
            <title>Beer Sunset - Cadastro</title>
            <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    
    <body onload="focaNome()">

        <div class="logoPrincipal">
            <img id="logoImgPrincipal" src="images/logo.png" alt="logoBeerHouse">
            <p id="nomeLogo">Beer Sunset</p>
        </div>

        <div class="formPrincipal">
            <form action="valida.php" method="POST">
                <div class="form-group">
                    <label for="entradaNome">Nome do Usuário:</label>
                    <input type="text" class="form-control" id="nomeUsuario" name="nomeUsuario" onblur="checaUsuario()" placeholder= "Digite seu nome">
                </div>
                <div class="form-group">
                    <label for="dataNascimento">Nascimento:</label>
                    <input type="text" class="form-control" id="dataNascimento" name="dataNascimento" onblur="checaData()" placeholder= "dd/mm/aaaa">
                    <small class="form-text text-muted">Exemplo: 01/01/1900</small>
                </div>
                <div class="form-group">
                    <label for="entradaEmail">Email:</label>
                    <input type="email" class="form-control" id="emailCadastro" name="emailCadastro" onblur="checaEmail()" placeholder="exemplo@email.com">
                </div>
                <div class="form-group">
                    <label for="confirmacaoEmail">Confirmação Email:</label>
                    <input type="email" class="form-control" id="emailConfirmacao" name="emailConfirmacao" onblur="coincideEmail()" placeholder="Digite novamente seu email">
                </div>
                 
                <input type="submit" class="btn btn-primary" value="Enviar">  
                <button type="reset" class="btn btn-primary">Limpar</button>
            </form>
        <br>
        <p id="mensagem"></p>    
        </div>
        

                
        
    </body>
    <script src="index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>

