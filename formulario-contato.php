<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Envia E-mail</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>





<form id="form" action="enviaEmailServidor.php" method="post">

<fieldset>
          <label for="nome">Nome</label>           
          <input type="text" name="nome" id="nome" placeholder="nome" autocomplete="off" >
          <label for="assunto">Assunto</label>   
          <input type="text" name="assunto" id="assunto" placeholder="Assunto" autocomplete="off">
          <label for="email">E-mail</label>  
          <input type="email" name="email"id=""  placeholder="email">
          <label for="telefone">Telefone</label>  
          <input type="tel" name="telefone" id="telefone" placeholder="telefone" autocomplete="off">
          <label for="mensagem">Mensagem</label>
          <textarea id="msg" name="mensagem" placeholder="Digite Sua mensagem"></textarea>  
          <input type="submit" name="envia" value="Enviar" >
</fieldset>
</form>

        
    
</body>
</html>

