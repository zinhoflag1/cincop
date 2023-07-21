	<?php session_start();?>
	<!doctype html>
	<html lang="en">
	  <head>
	  	<title>Gerador de Recibos on line (Gratis)- CincoPassos Sistemas - 30/05/2020 v.1.0</title>
	    <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	    <link rel="stylesheet" type="text/css" href="css/impressao.css">

	   

	<?php 
	include('plugin/ext/Classe.Extenso.php');
	include('plugin/ext/Classe.Funcao.php');


	$dados['empresa']   = isset( $_POST['txtEmpresa'])   ? $_POST['txtEmpresa']  :"";
	$dados['endereco']  = isset( $_POST['txtEndereco'])  ? $_POST['txtEndereco'] :""; #"Rua dos Manacas, 178, bairro Bixiga";
	$dados['telefone']  = isset( $_POST['txtTelefone'])  ? $_POST['txtTelefone'] :""; #"(31) 99199-0045";
	$dados['contato']   = isset( $_POST['txtContato'])   ? $_POST['txtContato']  :""; #"zinhoflag1@gmail.com";
	$dados['cliente']   = isset( $_POST['txtCliente'])   ? $_POST['txtCliente']  :""; #"Neneco de Dora";
	$dados['cpfCnpj']   = isset( $_POST['txtCpfCnpj'])   ? $_POST['txtCpfCnpj']  :""; #"00.000.0000/0001-14";
	$dados['valor']     = isset( $_POST['txtValor'])     ? $_POST['txtValor']    : ""; #"88,00";
	$dados['historico'] = isset( $_POST['txtHistorico']) ? $_POST['txtHistorico']:""; #"Servico de Manutenção em Equipamentos de Nusga";
	$dados['dataAtual'] = isset( $_POST['ckData'])       ? $_POST['ckData'] : null;

	$_SESSION['dados'] = $dados;

	?>
	<body>
	<div class="container">
		<p style="text-align: center">
		<legend>Escolha um Modelo de Recibo</legend></p>
	<div class="row imprimir">
		<div class="col-md-12 text-center"><br>	
			<div class="col-md-6 text-center float-left">
				<a href="recibo.php?modelo=tradicional"><img src="image/mod_trad.png" width="300px"><br>Modelo Tradicional</a>
			</div>
			<div class="col-md-6 text-center float-right">
				<a href="recibo.php?modelo=mobile"><img src="image/mod_mob.png"  width="300px"><br>Mini Comprovante</a>
			</div>
		</div>
	</div>


	<div class="row" id="recibo">

			
	</div>

	

</div>
	</body>
	</html>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- plugin save pdf -->
	<script src="plugin/ext/jsPDF/jspdf.debug.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.4/jspdf.plugin.autotable.min.js"></script>
	<script type="text/javascript" src="plugin/html2canvas.js"></script>
	<script type="text/javascript" src="plugin/ext/FileSaver/FileSaver.js"></script>
	
	<script type="text/javascript">

		

	</script>
	<!--google analitic-->
	<!-- validation -->
