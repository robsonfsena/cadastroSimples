function focaNome() {
    document.getElementById("nomeUsuario").focus();
}

function coincideEmail(){
    var emailCadastro = document.getElementById("emailCadastro").value;
    var emailConfirmacao = document.getElementById("emailConfirmacao").value;

    if (emailCadastro != emailConfirmacao){
        alert("Emails informados não coincidem");
        document.getElementById("emailCadastro").focus();
    }           
}

function checaUsuario(){

    var nomeUsuario = document.getElementById("nomeUsuario").value;
    
    if (nomeUsuario == "") {
            document.getElementById("mensagem").innerHTML = "<b>*Campo Usuario é Obrigatório.</b>";
            document.getElementById("nomeUsuario").focus();
        } else
            document.getElementById("mensagem").innerHTML = "";
}

function checaData(){

    var dataNascimento = document.getElementById("dataNascimento").value;
    var tamanho = dataNascimento.length;

    if (tamanho < 10) {
            document.getElementById("mensagem").innerHTML = "<b>*Data incorreta. Preencha com novamente (dd/mm/aaaa).</b>";
            document.getElementById("dataNascimento").focus();
        } else
            document.getElementById("mensagem").innerHTML = "";
}

function checaEmail(){

    var emailCadastro = document.getElementById("emailCadastro").value;
    
    if (emailCadastro == "") {
            document.getElementById("mensagem").innerHTML = "<b>*Campo Email é Obrigatório.</b>";
            document.getElementById("emailCadastro").focus();
        } else
            document.getElementById("mensagem").innerHTML = "";
}