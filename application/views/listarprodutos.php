<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="Lista de produtos da tabela produtos">
    <meta name="author" content="blog.ismweb.com.br">
    
    <title>Lista de produtos</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <style type="text/css">
      .margin-button15 { margin-bottom: 15px; }
    </style>  
  </head>

  <body>    
    <div class="container">
      <div class="row">
        <h1>Lista de produtos</h1>
        <a href="produtos/add" class="btn btn-success margin-button15">Novo Produto</a>
        <table class="table table-bordered">
        	<thead>
        		<tr>
        			<td class="text-center">Produto</td>
              <td class="text-center">Preço</td>
              <td class="text-center">Status</td>
        			<td class="text-center">Ação</td>
        		</tr>
        	</thead>
        	 <?php
                $i = 0;
                
                foreach ($produtos as $produto)
                { 
              ?>       
                <tr>
                  <td><?php echo $produto->nome;?></td> 
                  <td class="text-right"><?php echo $produto->preco;?></td> 
                  <td class="text-center">
                      <?php
                        if($produto->ativo == 1){
                      ?>
                        <span class="label label-success">
                          <a href="produtos/status/<?php echo $produto->id;?>" title="Deixar inativo">Ativo</a>
                        </span>
                      <?php }else{ ?>
                       <span class="label label-warning">
                          <a href="produtos/status/<?php echo $produto->id;?>" title="Deixar inativo">Inativo</a>
                        </span>
                      <?php }?>
                    </td>
                     <td class="text-center">
  	                    <a href="produtos/editar/<?php echo $produto->id;?>" title="Editar cadastro" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
  	                    <a href="produtos/apagar/<?php echo $produto->id;?>" title="Apagar cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
  	                    <a href="produtos/detalhes/<?php echo $produto->id;?>" title="Detalhes" class="btn btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
	                    </a>
                    </td> 
                  </tr>
                <?php
                	$i++;
                }
            ?>
        </table>
        <div class="row">
          <div class="col-md-12">
            Todal de Registro: <?php echo $i; ?>
          </div>
        </div>
      </div>
    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>    
  </body>
</html>
