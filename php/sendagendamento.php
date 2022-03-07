<?php
			# alterar a variavel abaixo colocando o seu email
            	if(isset($_POST['tMail']) && !empty($_POST['tMail'])){
			$email = $_POST['tMail'];
			$dataagendamento = $_POST['tDtAgendamento'];
			$empresa = $_POST['tNomeEmpresa'];
			$cnpj = $_POST['tCnpj'];
			$tipocompromisso = $_POST['tTipoCompromisso'];
			$funcionario = $_POST['tFuncionario'];
			$cargo = $_POST['tCargo'];
			$nascimento = $_POST['tNascimento'];
			$exames = $_POST['tExames'];
			$mensagem = $_POST['tMsg'];
				};
 // monta o e-mail na variavel $body
			
			$to = "agendamento@salutarnet.com.br";
			$subject = "Agendamento pelo Site";
			$body = "Nome:  ". $email. "\r\n".
				  "Data do Agendamento:  ". $dataagendamento. "\r\n".
				  "Nome da Empresa:  ". $empresa. "\r\n".
				  "CNPJ:  ". $cnpj. "\r\n".
				  "Tipo de Compromisso:  ".$tipocompromisso. "\r\n".
				  "Funcionario:  ".$funcionario. "\r\n".
				  "Cargo:  ".$cargo. "\r\n".
				  "Nascimento:  ".$nascimento. "\r\n".
				  "Exames:  ".$exames. "\r\n".
				  "Mensagem:  ".$mensagem;


			$headers = "$to"."\r\n";
						"Replay-To:".$to."\r\n";
						"x=Mailer:PHP/".phpversion();	  	

			// envia o email
if(mail($to,$subject,$body,$header,"-f$to"));
	{
	echo "<script>window.location='agendamento.html';alert('$empresa, Seu agendamento foi enviado com sucesso! Aguade a confirmação da data e horário, retornando em breve');</script>"; 
	}
	

			// redireciona para a página de obrigado
			//header("obrigado.html");
?>
