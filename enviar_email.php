<?php

   require 'PHPMailer/PHPMailerAutoload.php';
   $Mailer = new PHPMailer();

   $nome = 'João';
   $fone = '47 30306666';
   $email = 'contato@aylon.com.br';


   //Define que vai ser usado SMTP
   $Mailer-> isSMTP();
   //Enviar email em HTML
   $Mailer-> isHTML(true);
   //Aceitar caracteres especiais
   $Mailer->CharSet = 'UTF-8';
   //Configurações
   //Permitir que autentique
   $Mailer->SMTPAuth = true;
   //Definir que aceite o SSL - email criptografado
   $Mailer->SMTPSecure = 'tls';
   //Nome do servidor
   $Mailer->Host ='mail.aylon.com.br';
   //A porta que vai utilizar para saida de email
   $Mailer->Port = 587;
   //Usuário de email de saída.
   $Mailer->Username = 'contato@aylon.com.br';
   //Senha
   $Mailer->Password = '(?,*=R+ukYAf';

   // Email remetente - Quem está enviando
   $Mailer->From = 'contato@aylon.com.br';
   //Nome do remetente
   $Mailer->FromName = 'Aylon';
   // Assunto da mensagem
   $Mailer->Subject ='Titulo - Teste PHPMailer';
   //Corpo da mensagem
   $Mailer-> Body = 'Conteúdo de E-mail';
   // Corpo da mensagem em texto
   $Mailer->AltBody = 'Conteúdo do E-mail em texto';
   //Destinatário
   $Mailer->addAddress('aylonteixeira@gmail.com');

   if($Mailer->send()){
      echo "E-mail enviado com sucesso";
   }else{
       echo "Erro no envio do e-mail:". $Mailer->ErrorInfo;
   }







?>