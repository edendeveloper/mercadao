 <?php
            //variáveis
            $nm         = filter_input(INPUT_POST,'nomex', FILTER_SANITIZE_STRING);
            $emailx     = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
            $mensagem   = filter_input(INPUT_POST,'msg', FILTER_SANITIZE_STRING);
            

            // Importa classes do PHPMailer para o namespace global
            // Estes devem estar no topo do seu script, não dentro de uma função
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;

            //Defina o caminho correto do arquivo 
            require 'mailer/src/Exception.php';
            require 'mailer/src/PHPMailer.php';
            require 'mailer/src/SMTP.php';

            //A instanciação e a passagem 'true' permitem exceções
            $mail = new PHPMailer(true);

            // DEFINIÇÃO DOS DADOS DE AUTENTICAÇÃO
            try { 

                // Ativar saída de depuração detalhada
                $mail->SMTPDebug = 0;  

                // Definir mailer para usar    SMTP                                
                $mail->isSMTP();                                            

                // Especifique servidor SMTP principal
                $mail->Host       = 'smtp.gmail.com';  

                // Ativar autenticação SMTP                     
                $mail->SMTPAuth   = true;    

                // Usuário SMTP                               
                $mail->Username   = 'welington.robertodev@gmail.com';

                // Senha SMTP          
                $mail->Password   = 'kindred9480';

                // Ativar criptografia TLS, 'ssl' também aceita                           
                $mail->SMTPSecure = 'tls';

                // Porta TCP para conectar                                  
                $mail->Port       = 587; 

                // Charset da mensagem
                $mail->charset    = 'UTF-8';                                   

                //Destinatários
                $mail->setFrom($emailx, $nm);
                $mail->addAddress('welington.robertodev@hgmail.com');
                $mail->addCC($emailx);

                // Conteúdo
                // Definir formato de email para HTML
                $mail->isHTML(true);                                  
                $mail->Subject      = 'E-mail de contato';
                $mail->Body         = 'Nome: '.$nm.'<br /><hr>Mensagem: '.$mensagem.'<br /><hr>E-mail: '.$emailx;                
                // Enviar o e-mail
                $mail->send();
                //echo 'Message has been sent - Mensagem enviada';
                header("Location: enviado.html");
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error:(A mensagem não pôde ser enviada. Erro do Mailer:) {$mail->ErrorInfo}";
            }    
