<?php

// $email = $_POST['caixaemail'];
$email = isset($_POST['caixaemail']) ? $_POST['caixaemail'] : '';

//Composicao Email

$arquivo = "<style type='text/css'>
  body {
  margin:0px;
  font-family:Verdane;
  font-size:12px;
  color: #666666;
  }
  a{
  color: #666666;
  text-decoration: none;
  }
  a:hover {
  color: #FF0000;
  text-decoration: none;
  }
</style>
    <html>
        <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
			<tr>
				<td width='320'>E-mail:<b>$email</b></td>
			</tr>
        </table>
    </html>
  ";

//Envio email

$emailRemetente = "leiteigors@gmail.com";
$emailDestino   = $email;
$assunto        = "A natureza agradece";

//Configuração tipo de email

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers.= 'From: $emailRemetente';

$enviarEmail = mail($emailDestino, $assunto, $arquivo, $headers);

if ($enviarEmail) 
{
	$result = '<div id="alertSucess" class="alert alert-success alert-dismissable"> 
	 <button type="button" id="bSucess" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> 
	 <p>Agora você receberá um email e estará antenado em nosso portal através de novidades verdes.</p></div>';
} 
else {
	$result = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="@avizuber & @nadavreis">
    <title>A Natureza Agradece</title>
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700|Pacifico' rel='stylesheet' type='text/css'>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom Theme CSS -->
    <link href="css/launchrocket.css" rel="stylesheet">

</head>
<body>
<div class="container-fluid">

	 <?php echo $result; ?>
	 <div class="header"> 
		<h1 class="logo">A Natureza Agradece</h1>
		<h2 class="logo">Esse é um passo revolucionário para o mundo.</h2>
                <h3 font-weight: bold>🍀Seja Positivo, a vida retribui! ⚛ #universo#einstein#somosatomos#natureza#permacultura#yoga#praialimpa#somosum#surf#alimentaçaosaudável#gratidao ⚛ 🍀🌊♻❤ Vamos aprender juntos, somos um!</h3>
                </div>
	<div class="teaser">
		<p>Quer ficar por dentro da nossa real ideia? Você mal pode esperar!</p>
		<!-- <p>Here is some generic text explaining this awesome app. Or is it a service? Who knows? Who cares? Well, hopefully your new users care.</p> -->
		<hr class="launchrocket signup">
		<p class="stress">Assine e saiba. A natureza agradece!</p>
	<!-- Begin MailChimp Signup Form -->
	<!-- Note: You'll want to replace the form action and the input name with values from your own MailChimp account -->
		<div class="mailchimp" id="mc_embed_signup">
		<!-- http://rungs.us8.list-manage1.com/subscribe/post?u=b5d201b8fb8ca501b7429e6c0&amp;id=afcf0506f4 -->
			<!-- <form action="contato.php" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate> -->
			<form action="index.php" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form">
			<input type="email" value="" name="caixaemail" class="email" id="mce-EMAIL" placeholder="endereço eletrônico" required>
			<!-- <div class="hide-this-monkey"> -->
			<!-- <input type="text" name="caixaemail" value=""> -->
			<!-- </div> -->
			<input type="submit" value="Quero saber!" name="subscribe" id="mc-embedded-subscribe" class="button" >
			</form>
			<!-- <form action="contato.php" method="post"> -->
			 <!-- <input type="text" name="caixaemail" value=""> -->
			<!-- <input type="submit" value="Quero saber!" name="subscribe" > -->
			<!-- </form> -->
		</div>
		
		<!--End mc_embed_signup-->
		<hr class="launchrocket social">
		
		<div class="social">
			<h4> Siga nossas atualizações: 
				 <a href="https://www.facebook.com/OUniversodaSabrina/" target="_blank"> 
					 <i class="fa fa-facebook"></i> 
				 </a> 
				<a href="https://www.instagram.com/sabrinaaafreitas/" target="_blank" > 
					<i class="fa fa-instagram"></i>
				</a>
				
				
			</h4>
		</div>
	</div>
	<div class="footer">
	<p>Com <i class="fa fa-heart"></i> de <a href="http://twitter.com/leiteigors" tager="_blank">@leiteigors</a> 
	<!-- &  -->
	<!-- <a href="http://twitter.com/nadavreis" tager="_blank">@</a>  -->
	| &copy; A natureza agradece 2017</p>
	</div>
	<video autoplay loop poster="img/bg.png" id="bgvid">
		<source src="vid/bg.webm" type="video/webm">
		<source src="vid/bg.mp4" type="video/mp4">
		<source src="vid/bg.ogg" type="video/ogg"/>
	</video>
</div>
    <!-- Core JavaScript Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	<!-- <script> -->
	
		<!-- $(document).ready(function() { -->
			<!-- $("#mc-embedded-subscribe-form").submit(function(e) { -->
				<!-- e.preventDefault(); -->
				<!-- var tField 	=	document.getElementById('mce-EMAIL'); 	  -->
				<!-- var bSend 	=	document.getElementById('mc-embedded-subscribe'); -->
					<!-- tField.disabled = true; -->
					<!-- bSend.disabled = true; -->
					
				<!-- $("#alertSucess").show(); -->
				

			<!-- }); -->

		<!-- }); -->
		
			<!-- $("#bSucess").click(function() { -->
				
						<!-- location.reload(); -->

			<!-- });		 -->
		
	
	
	<!-- </script> -->
</body>

</html>	

