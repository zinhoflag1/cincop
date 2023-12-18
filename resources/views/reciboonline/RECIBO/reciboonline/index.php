	<!doctype html>
	<html lang="en">
	  <head>
	  	<title>Gerador de Recibos on line (Gratis)- CincoPassos Sistemas - 30/05/2020 v.1.0</title>
	    <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	    <link rel="stylesheet" type="text/css" href="css/estilo.css">

	</head>
	<body>

		<!-- barra de ferramentas -->
	<div class="col-md-12 barraFerramenta">
		Gerador de Recibos 
	</div>

	<!--Topo -->
	<div class="col-md-12 p-3 topo">
		<div class="row">
			<div class="col-2">
				
				</div>
				<div class="col-1">
					<img src="image/logo.png">
				</div>
				<div class="col-9">
					<h3 style="color:#3CB371">Gerador de Recibo on-line</h3>
				</div>
		</div>
	</div>

	<div class="container"> 
	<div class="row">

	<!-- lateral esquerda--> 
	<div class="col-md-2 lateral-esquerda">lateral esquerda</div>

	<div class="col-md-8">

	<?php

	include_once('cliente.php');
	$id_cliente = isset($_GET['cliente']) ? $_GET['cliente'] : "vazio";
	
?>
			
			
				<form action="tipo.php" method="post" name="frmRecibo" id="frmRecibo" enctype="multipart/form-data">

					<!--dados da empresa -->
					<legend>Dados do seu negócio</legend>
					<div class="col-12 dados-empresa">
						<div class="row">
							<div class="col-md-8">
								<label>Seu Nome ou da sua Firma</label>&nbsp;&nbsp;&nbsp; <small>( Opcional )</small>
								<input type="text" class="form-control" name="txtEmpresa" id="txtEmpresa" value="<?=$cliente[$id_cliente]['nome']?>">
							</div>
							<div class="col-md-4">
								<label>Email</label>&nbsp;&nbsp;&nbsp; <small>( Opcional )</small>
								<input type="text" class="form-control" name="txtContato" id="txtContato" value="<?=$cliente[$id_cliente]['email']?>">
							</div>
						</div>
						<div class="row">
							<div class="col-8">
								<label>Seu Endereço</label>&nbsp;&nbsp;&nbsp; <small>( Opcional )</small>
								<input type="text" class="form-control" name="txtEndereco" id="txtEndereco" value="<?=$cliente[$id_cliente]['endereco']?>">
							</div>
							<div class="col-4">
								<label>Seu Telefone</label>&nbsp;&nbsp;&nbsp; <small>( Opcional )</small>
								<input type="text" class="form-control" name="txtTelefone" id="txtTelefone" value="<?=$cliente[$id_cliente]['telefone']?>">
							</div>
						</div>
					</div>

					<legend>Dados do seu Cliente</legend>
					<!--dados do cliente -->
					<div class="col-12 dados-cliente">
						<div class="row">
						<div class="col-8">
							<label>Nome do Cliente</label>
							<input type="text" class="form-control" name="txtCliente" id="txtCliente">
						</div>
						<div class="col-4">
							<label>CPF/CNPJ</label>&nbsp;&nbsp;&nbsp; <small>( Opcional )</small>
							<input type="text" class="form-control" name="txtCpfCnpj" id="txtCpfCnpj"> 
						</div>
					</div>
					</div>

					<legend>Dados do Recibo</legend>
					<!--dados do recibo -->
					<div class="col-md-12 dados-recibo">
						<div class="row">
							<div class="col-md-3">
								<label>Valor</label>
								<input type="text" class="form-control requerido" name="txtValor" id="txtValor" required> 
							</div>
							<div class="col-md-9">

						<label>Historico</label>
						<input type="text" class="form-control requerido" name="txtHistorico" id="txtHistorico" required> 
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<br>
						<div class="custom-control custom-checkbox">
						  <input type="checkbox" class="custom-control-input" id="ckData" name="ckData">
						  <label class="custom-control-label" for="ckData">Data Atual</label> &nbsp;&nbsp;&nbsp; <small>( Mostra a data atual no recibo )</small>
						</div>
						</div>
					</div>
				</div> 
				<div class="col-md-12 text-center">
					<br>
					<input class="btn btn-primary" type="submit" name="btnEnviar" id="btnEnviar" value="Gerar Recibo">
				</div>
				</form>
	</div>

	<div class="col-md-2 lateral-direita">lateral direita</div>

	<div class="col-md-12 text-center rodape">
		<br>
		Todos os direitos reservados - Gerador de Recibo on-line<br>
		Desenvolvido por <a class="end" href="http://www.cincopassos.com.br">Cinco Passos Sistemas</a>
	</div>
	</div>
</div>

	</body>
	</html>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!--google analitic-->
	<!-- validation -->
	<script>

		/* remover ponto */
		$("#txtValor").blur(function(){

			var valor = $("#txtValor").val();
			$("#txtValor").val(valor.replace(".", ",", valor));

		});



	</script>
