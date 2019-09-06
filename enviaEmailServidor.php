<?php
require  './PHPMailer/PHPMailerAutoload.php';

     date_default_timezone_set('America/Sao_Paulo');
    
    
     $nome = $_POST['nome'];
     $assunto = $_POST['assunto'];
     $email = $_POST['email'];
     $telefone = $_POST['telefone'];
     $mensagem = $_POST['mensagem'];
    
                    
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->setLanguage('pt-br');



    $mail->Host = 'smtp.gmail.com'; // Which SMTP server to use.
    $mail->Port = 587; // Which port to use, 587 is the default port for TLS security.
    $mail->SMTPSecure = 'tls'; // Which security method to use. TLS is most secure.
    $mail->SMTPAuth = true; // Whether you need to login. This is almost always required.
    $mail->Username = "@gmail.com"; // Your Gmail address.
    $mail->Password = ""; // Your Gmail login password or App Specific Password.
    
    /*
     * Message Configuration
     */
    
    $mail->setFrom('@gmail.com', 'Contato-Servidor-EletricaPinho'); // Set the sender of the message.
    $mail->addAddress(''); // Set the recipient of the message.
    $mail->addAddress($email); // Set the recipient of the message.
    $mail->Subject = utf8_decode($assunto) ; //Assunto
    
    $mail->isHTML(true);  // Indicamos o uso do HTML;
    $mail->Body = utf8_decode("
    
    <br> Nome: {$nome}
    <br> Tel: {$telefone} 
    <br> E-mail: {$email}
    <br> Mensagem: <br><br>{$mensagem}
                             
    ");
    
    
    //$mail->addAttachment('imagens/pinho.png'); envia anexo

    if(empty($_POST['nome']) == '' && empty($_POST['assunto']) == '' &&  empty($_POST['email']) == '' && empty($_POST['telefone']) == ''  && empty($_POST['mensagem']) == ''    ){
        
        if ($mail->send()) {
            echo "E-mail enviado com sucesso!";
            header('location: index.php?enviado');
            
        } else {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
       
    }else{

        echo "[Erro prenecha todos os dados] <br>";
        echo'<br><a href="formulario-contato.php">Contato</a>';
        

        //<input class="msg" type="text" name="mensagem" id="mensagem" rows="6" autocomplete="off">
    }
    



    
    


