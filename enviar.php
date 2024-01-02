<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $celular = addslashes($_POST['celular']);
    $menssagem = addslashes($_POST['menssagem']);

    $para = "matheusmaia40@gmail.com";
    $assunto = "Coleta de dados - Inteliogia";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Celular: ".$celular."\n"."Menssagem: ".$menssagem;

    $cabeca = "From lyncoliz40@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabeca)){
        echo ("E-mail enviado com sucesso!");
    }else{
        echo ("Houve um erro ao enviar o email");
    }

?>