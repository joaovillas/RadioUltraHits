
var nome = document.getElementById("name");alert(nome);
var telefone = document.getElementById("phone");
var email = document.getElementById("email");
var mensagem = document.getElementById("message");

function validar(nome , telefone , email , mensagem ){
    
        document.form.action = "vendor/phpmailler/sendmail.php" ;
     
}
