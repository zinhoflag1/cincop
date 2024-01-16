 <!doctype html>
 <html lang="en">

 <head>
     <title>Gerador de Recibos on line (Gratis)- CincoPassos Sistemas - 30/05/2020 v.1.0</title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">

 </head>

 <body>

     <!-- barra de ferramentas -->
     <div class="col-md-12 barraFerramenta">
         <div class="row">
             <nav class="navbar navbar-expand-lg navbar-light bg-light">
                 <div class="container">
                     <a class="navbar-brand" href="#">Recibo Online</a>
                     
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">

                         
                     </div>
                     <div class="col-md-3 text-end"><a href='{{ url('login') }}'><img src="{{ asset('imagens/icon/login.png') }}" width="20"> &nbsp;Acesso Sistema</a></div>
                 </div>
             </nav>
         </div>

         <!--Topo -->
         <div class="p-3 col-md-12 topo">
             <div class="row">
                 <div class="col-md-2">
                 </div>
                 <div class="col-md-1">
                     <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24">
                     {{-- <img src="image/logo.png"> --}}
                 </div>
                 <div class="text-center col-md-6">

                     <h3 style="color:#3CB371">Gerador de Recibo on-line Grátis</h3>
                 </div>
                 <div class="col-md-1">

                 </div>
                 <div class="col-2">
                 </div>
             </div>
         </div>

         <div class="rounded" style="background-color: #3CB371; height: 100vh;">
             <div class="row">

                 <!-- lateral esquerda-->
                 <div class="col-md-2 lateral-esquerda">lateral esquerda</div>

                 <div class="col-md-8">

                     <div class="p-3 mb-2 text-white bg-primary">.bg-primary</div>

                     <?php
                     
                     $cliente = [
                         'vazio' => [
                             'nome' => '',
                             'endereco' => '',
                             'telefone' => '',
                             'email' => '',
                         ],
                         'dreamarcade' => [
                             'nome' => 'DreamArcade Diversoes',
                             'endereco' => 'Rua Dom Helder Camara, 129',
                             'telefone' => '(31)99493-0947',
                             'email' => 'dreamarcade@dreamarcade.com.br',
                         ],
                         'marmita' => [
                             'nome' => 'Marmita da Zica',
                             'endereco' => 'Rua Madre de Deus, 199',
                             'telefone' => '(31)99269-2003',
                             'email' => 'marmita@marmita.com',
                         ],
                     ];
                     
                     $id_cliente = isset($_GET['cliente']) ? $_GET['cliente'] : 'vazio';
                     
                     ?>


                     <form action="tipo.php" method="post" name="frmRecibo" id="frmRecibo" enctype="multipart/form-data">

                         <!--dados da empresa -->
                         <legend>Dados do seu negócio</legend>
                         <div class="col-12 dados-empresa">
                             <div class="row">
                                 <div class="col-md-8">
                                     <label>Seu Nome ou da sua Firma</label>&nbsp;&nbsp;&nbsp; <small>( Opcional )</small>
                                     <input type="text" class="form-control" name="txtEmpresa" id="txtEmpresa" value="<?= $cliente[$id_cliente]['nome'] ?>">
                                 </div>
                                 <div class="col-md-4">
                                     <label>Email</label>&nbsp;&nbsp;&nbsp; <small>( Opcional )</small>
                                     <input type="text" class="form-control" name="txtContato" id="txtContato" value="<?= $cliente[$id_cliente]['email'] ?>">
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-8">
                                     <label>Seu Endereço</label>&nbsp;&nbsp;&nbsp; <small>( Opcional )</small>
                                     <input type="text" class="form-control" name="txtEndereco" id="txtEndereco" value="<?= $cliente[$id_cliente]['endereco'] ?>">
                                 </div>
                                 <div class="col-4">
                                     <label>Seu Telefone</label>&nbsp;&nbsp;&nbsp; <small>( Opcional )</small>
                                     <input type="text" class="form-control" name="txtTelefone" id="txtTelefone" value="<?= $cliente[$id_cliente]['telefone'] ?>">
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
                         <div class="text-center col-md-12">
                             <br>
                             <input class="btn btn-orange" type="submit" name="btnEnviar" id="btnEnviar" value="Gerar Recibo">
                         </div>
                     </form>
                 </div>

                 <div class="col-md-2 lateral-direita">lateral direita</div>

                 <div class="text-center col-md-12 rodape">
                     <br>
                     Todos os direitos reservados - Gerador de Recibo on-line<br>
                     Desenvolvido por <a class="end" href="http://www.cincopassos.com.br">Cinco Passos Sistemas</a>
                 </div>
             </div>
         </div>

 </body>

 </html>

 <!--google analitic-->
 <!-- validation -->
 <script src="{{ asset('site/js/jquey.js') }}"></script>
 <script>
     /* remover ponto */
     $("#txtValor").blur(function() {

         var valor = $("#txtValor").val();
         $("#txtValor").val(valor.replace(".", ",", valor));

     });
 </script>
