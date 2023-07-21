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


	   </head>

	<?php 
	include('plugin/ext/Classe.Extenso.php');
	include('plugin/ext/Classe.Funcao.php');

	$dados = isset($_SESSION['dados']) ? $_SESSION['dados'] : "";

	?>
	<body>
	
<div class="container">
	<div class="row imprimir">
		<div class="col-md-12 text-center"><br>
			<a class="btn btn-primary" type="button" onclick="javascript:history.back();" title="Clique aqui para Voltar">Voltar</a>
			<br><br>
			<a class="btn btn-success" type="button" id="savePdf" onclick="javascript:savePdf();" title="clique aqui para Imprimir !">Salvar PDF</a>
			<a class="btn btn-success" id="recibojpg" type="button" onclick="javascript:downloadimage();" title="clique aqui para Imprimir !">Salvar JPG</a>
			<a class="btn btn-success" type="button" onclick="javascript:window.print();" title="clique aqui para Imprimir !">Imprimir</a>
			<br><br>
		</div>
	</div>


	<div class="row" id="recibo">
		<br>
		<?php
			$modelo = isset($_GET['modelo']) ? $_GET['modelo'] :"";
			if($modelo == 'tradicional'){
		?>

			<!-- MODELO TRADICIONAL -->
			<div class="col-12 recibo">

				<div class="col-12 text-center">
					<h4><?=strtoupper($dados['empresa']);?></h4>
					<span class="titulo2"><?=ucwords($dados['endereco'])?></span>
					<span class="titulo2"><?=$dados['telefone']?>&nbsp;&nbsp;<?=strtolower($dados['contato'])?></span>
				</div>
				<h3><p class="titulo">RECIBO</p></h3>
				<h4><p class="titulo">R$<?=$dados['valor']?></p></h4>

				Recebí(emos) de, <b><?=$dados['cliente']?></b>, a importancia de R$ <?=$dados['valor']?> ( <i><u><?=Extenso::valorPorExtenso($dados['valor'], true, false)?></u> </i>), referente a <u><?= $dados['historico']?></u>, e para clareza, firmo(amos) o presente.<br><br>

				<?php if($dados['dataAtual']){

					print "_______________," .date("d")." de ".date("M")." de ". date("Y").".";

				}else {
					print Funcao::espaco('10')."_______________, ___de __________de _____.
					<br><br><br><br>
					<p class=\"text-center linha\">".Funcao::linha('35')."<br>".$dados['empresa']."</p>";
				}
				?>

			</div>

			<!-- MODELO MOBILE -->
		<?php
			}else if($modelo == 'modelo') {
		?>
		<div class="col-12">
				<div class="col-12 text-center">
					<h4><?=strtoupper($empresa);?></h4>
					<span class="titulo2"><?=ucwords($endereco)?></span>
					<span class="titulo2"><?=$telefone?>&nbsp;&nbsp;<?=strtolower($contato)?></span>
				</div>
				<h3><p class="titulo">RECIBO</p></h3>
				<h4><p class="titulo">R$<?=$valor?></p></h4>

				Recebí(emos) de, <b><?=$cliente?></b>, a importancia de R$ <?=$valor?> ( <i><u><?=Extenso::valorPorExtenso($valor, true, false)?></u> </i>), referente a <u><?= $historico?></u>, e para clareza, firmo(amos) o presente.<br><br>

				<?php if($dataAtual){

					print "_______________," .date("d")." de ".date("M")." de ". date("Y").".";

				}else {
					print Funcao::espaco('10')."_______________, ___de __________de _____.
					<br><br><br><br>
					<p class=\"text-center linha\">".Funcao::linha('35')."<br>".$empresa."</p>";
				}
				?>

			</div>
			<?php
			}else {

			}
			?>

	</div>

	<canvas id="reciboCanvas"></canvas>
	

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

		$(document).ready(function(){

		    
		});

		/* salvar jpg */
		function downloadimage(){
			var container = document.getElementById("recibo");
			html2canvas(container,{allowTaint : true}).then(function(canvas) {
			var link = document.createElement("a");
			document.body.appendChild(link);
			link.download = "recibo_online.jpg";
			link.href = canvas.toDataURL();
			link.target = "_blank";
			link.click();
			});
		};


		function saveJPG() {
			html2canvas(document.querySelector("#recibo")).then(canvas => {
    			document.body.appendChild($("reciboCanvas"));
			});
		}


	</script>
	<!--google analitic-->
	<!-- validation -->
