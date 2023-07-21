<?php include('infor.php');?>
<link rel="stylesheet" type="text/css" href="style.css">
<title><?php echo $firma; ?></title>
<p><a href="javascript:print()" title="Imprimir recibo para <?php echo $firma; ?> assinar">Imprimir..</a></p>
<h1 align="center"><img src="<?php echo $logomarca; ?>" alt="<?php echo $firma; ?> - <?php echo $entidade; ?>" width="100"></h1>
<h1 align="center"><font style="font-family:Verdana, Arial, Helvetica, sans-serif">RECIBO</font></h1>
<p align="center"><font style="font-family:Verdana, Arial, Helvetica, sans-serif"><?php echo $firma; ?><br /><?php echo $entidade; ?><br />CNPJ: <?php echo $cnpj_cgc_firma; ?></font></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="right"><font style="font-family:Verdana, Arial, Helvetica, sans-serif">RECIBO: R$ <?php echo $valor_devedor; ?></font></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-family:Verdana, Arial, Helvetica, sans-serif">Recebemos de (a) <strong><?php echo $nome_devedor; ?></strong> portador (a) do CPF/CNPJ: <strong><?php echo $cpf_cnpj_devedor; ?></strong>, a import&acirc;ncia de R$ <strong><?php echo $valor_devedor; ?></strong> (<?php echo $valor_extenso_devedor; ?>) referente &agrave; <strong><?php echo $referente; ?></strong>, <?php echo $final; ?>.</font></p>
<p align="right"><font style="font-family:Verdana, Arial, Helvetica, sans-serif"><?php echo $endereco; ?></font></p>
<p>&nbsp;</p>
<p align="center"><font style="font-family:Verdana, Arial, Helvetica, sans-serif"><?php echo $cidade; ?> - <?php echo $estado; ?>, <?php echo $dia_pagamento; ?>/<?php echo $mes_pagamento; ?>/<?php echo $ano_pagamento; ?>.</font></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center">________________________________________<br /><font style="font-family:Verdana, Arial, Helvetica, sans-serif"><?php echo $firma; ?></font></p>