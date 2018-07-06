<?php
$meuEmail = "desenvolvedor2018@gmail.com";
if(isset($_POST['nome'])) $nome = $_POST['nome'];
if(isset($_POST['email'])) $email = $_POST['email'];
if(isset($_POST['mensagem'])) $mensagem = $_POST['mensagem'];
if(isset($_POST['assunto'])) $assunto = $_POST['assunto'];

if(isset($nome) && empty($nome)){
    
$to = "dassaevlim@gmail.com";
$subject = "NOVO EMAIL - SITE D-LIMA";
$message = "<strong>Remetente: </strong> $email <br> <strong>Nome: </strong> $nome <br> <strong>Assunto: </strong> $assunto <br> <strong>Mensagem: </strong> $mensagem <br>";
$header = "MIME-VEersion: 1.0 \n";
$header .= "content-type: text/html; charset=iso-8859-1 \n";
$header .= "From: $meuEmail\n";
mail($to, $subject, $message, $header);
echo "<script>
	alert('Mensagem enviada!'); location= './index.html';
	</script>";
}else{
    echo "<script>
	setTimeout(function(){
	    alert('Mensagem não enviada!'); 
	    location= './index.html';
	}, 5000);
	</script>";
}

?>