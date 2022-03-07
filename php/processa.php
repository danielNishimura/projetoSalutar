<?php
			# alterar a variavel abaixo colocando o seu email
            if(isset($_POST['tMail']) && !empty($_POST['tMail'])){
			$email = $_POST['tMail'];
			$empresa = $_POST['tNomeEmpresa'];
			$cnpj = $_POST['tCnpj'];
			$qtdfuncionario = $_POST['tQtdFuncionario'];
			$atividade = $_POST['tAtividade'];
			$terceiro = $_POST['tServicoTerceiro'];
			$mensagem = $_POST['tMsg'];
				};
 // monta o e-mail na variavel $body
			
			$to = "salutar@salutarnet.com.br";
			$subject = "Contato pelo Site";
			$body = "Nome:  ". $email. "\r\n".
				  "Nome da Empresa:  ". $empresa. "\r\n".
				  "CNPJ:  ". $cnpj. "\r\n".
				  "Quantidade de Funcionários:  ".$qtdfuncionario. "\r\n".
				  "Atividade:  ".$atividade. "\r\n".
				  "Presta Serviços para Terceiros?:  ".$terceiro. "\r\n".
				  "Mensagem:  ".$mensagem;

			$headers = "$to"."\r\n";
						"Replay-To:". $to."\r\n";
						"x=Mailer:PHP/".phpversion();	  	

			// envia o email
if(mail($to,$subject,$body,$header,"-f$to"));

	{
	echo "<script>window.location='contato.html';alert('$nome, sua mensagem foi enviada com sucesso! Estaremos retornando em breve');</script>"; 
	}
	

			// redireciona para a página de obrigado
			//header("obrigado.html");
?>
