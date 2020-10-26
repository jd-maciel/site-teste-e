
<?php
//Variáveis
 
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

//enviar  
  
  $emailenviar = "jd_maciel@hotmail.com";
  $destino = $emailenviar;
  $assunto = "Contato pelo Site";
 
  
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: ' .$nome.' <'.$email.'>';
  //$headers .= "Bcc: $EmailPadrao\r\n";
   
  $enviaremail = mail($destino, $assunto, $mensagem, $headers);
  if($enviaremail){
    $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
    echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
  } else {
    $mgm = "ERRO AO ENVIAR E-MAIL!";
    echo $mgm;
  }
?>