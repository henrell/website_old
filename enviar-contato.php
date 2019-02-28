<?php
// setando os campos
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require("phpmailer/class.phpmailer.php");
 
// Inicia a classe PHPMailer
$mail = new PHPMailer();
 
// Define os dados do servidor e tipo de conexão
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.lhdeveloper.me"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Autenticação
$mail->Username = 'contato@lhdeveloper.me'; // Usuário do servidor SMTP
$mail->Password = '@obgdj12@'; // Senha da caixa postal utilizada
 
// Importante: O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
$mail->From = "contato@lhdeveloper.me"; 
$mail->FromName = $nome;
 
// E-mail de Resposta
$mail->AddReplyTo("contato@lhdeveloper.me","Contato Via Site");
 
// Define os destinatário(s)
$mail->AddAddress('contato@lhdeveloper.me', 'Nome do Destinatário');
//$mail->AddAddress('e-mail@destino2.com.br');
//$mail->AddCC('copia@dominio.com.br', 'Copia'); 
//$mail->AddBCC('CopiaOculta@dominio.com.br', 'Copia Oculta');
 
// Define os dados técnicos da Mensagem
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
 
// Texto e Assunto
$mail->Subject = "Japlog - Contato via Site";
$mail->Body    =  "<p style='font-family:Verdana,sans-serif;font-size:13px;'>Você recebeu uma mensagem via página de contato:</p>
                    <table border='0' style='font-family:Verdana,sans-serif;font-size:13px;'>
                        <tr>
                            <td><strong>Nome:</strong></td>
                            <td>$nome</td>
                        </tr>
                        <tr>
                            <td><strong>Telefone:</strong></td>
                            <td>$telefone</td>
                        </tr>
                        <tr>
                            <td><strong>E-mail:</strong></td>
                            <td>$email</td>
                        </tr>
                        <tr>
                            <td><strong>Assunto:</strong></td>
                            <td>$assunto</td>
                        </tr>
                        <tr>
                            <td><strong>Mensagem:</strong></td>
                            <td>$mensagem</td>
                        </tr>
                    </table>
                  ";
$mail->AltBody = 'Você recebeu uma mensagem via página de contato.';
 
// Envio da Mensagem
$enviado = $mail->Send();
 
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();
 
// Exibe uma mensagem de resultado
if ($enviado) {
  header("Location:alert-envio-sucesso.php");
  exit;
} else {
  header("Location:alert-envio-erro.php");
  exit;
}
?>