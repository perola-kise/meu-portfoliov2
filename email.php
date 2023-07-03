<?php

if(isset($_POST['email'])&& !empty($_POST['email'])){

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$message = addslashes($_POST['menssagem']);

$to = "perolakise98@gmail.com";
$subject = "Contato - Portfólio";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email."\r\n".
        "Mensagem: ".$mensagem;

$hearder = "From: pepekise@gmail.com"."\r\n"
            ."Reply-To:".$email."\r\n"
            ."x=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso!");

}else{
    echo("O Email não pode ser enviado");
}

}
?>