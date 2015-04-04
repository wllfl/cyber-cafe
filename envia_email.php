<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
header('Content-type: text/html; charset=utf-8');
define('SERVIDOR', 'cybercafe24h@cybercafe24h.com.br');
define('DESTINO', 'cybercafe24h@gmail.com');
define('EMPRESA', 'CyberCafé24H');

if (isset($_POST['nome'])){

    $nome    = (isset($_POST['nome']))? $_POST['nome']: '';
    $email   = (isset($_POST['email']))? $_POST['email']: '';
    $assunto = (isset($_POST['assunto']))? $_POST['assunto']: '';
    $fone    = (isset($_POST['fone']))? $_POST['fone']: '';
    $msg     = (isset($_POST['mensagem']))? $_POST['mensagem']: '';
    
    if (empty($nome) || empty($email) || empty($msg)){
         $array  = array('erro' => 2, 'mensagem' => 'Preencher os campos obrigatórios(*)!');
         echo json_encode($array);
    }else{

        if (empty($assunto)):
           $assunto = "Contato enviado pelo site " . EMPRESA;
        endif;

        $mensagem = "Contato enviado pelo site ".EMPRESA."\n";
        $mensagem .= "**********************************************************\n";
        $mensagem .= "Nome do Contato: ".$nome."\n";
        $mensagem .= "E-mail do Contato: ".$email."\n";
        $mensagem .= "Fone do Contato: ".$fone."\n";
        $mensagem .= "**********************************************************\n";
        $mensagem .= "Mensagem: \n".$msg."\n";

        $retorno = EnviaEmail(DESTINO, $email, $assunto, $mensagem);

       if ($retorno){
           $array  = array('erro' => 0, 'mensagem' => 'Mensagem enviada com sucesso!');
           echo json_encode($array);
        }else{
           $array  = array('erro' => 1, 'mensagem' => 'Infelizmente houve um erro ao enviar sua mensagem!');
           echo json_encode($array);
        }
    }
}

function EnviaEmail($para, $from, $assunto, $mensagem){

    $headers = "From: ".SERVIDOR."\n";
    $headers .= "Reply-To: $para\n";
    $headers .= "Subject: $assunto\n";
    $headers .= "Return-Path: ".SERVIDOR."\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\n";

    $retorno = mail($para, $assunto, nl2br($mensagem), $headers);
    return $retorno;  
}

?>

