
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
    
    <title>Novo cadastro</title>
    <!-- Bootstrap core CSS -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->       
  </head>

  <body>    

    <div class="container">

      <div class="row">
                
        <h1>Alterar produto</h1>   
        <ol class="breadcrumb">
              <li><a href="../../produtos">Inicio</a></li>          
              <li class="active">Alterar produto</li>
        </ol>      

        <!-- Formulário de novo cadastro  -->
        <form action="../salvar" name="form_add" method="post">
          
          <!-- Input text nome do produtos -->
          <div class="row">
            <div class="col-md-8">
              <label>Nome</label>
              <input type="text" name="nome" class="form-control" value="<?php echo $produto->nome;?>">
            </div>
          </div> <!-- fim input text nome produtos -->

          <!-- Input text preço do produtos -->
          <div class="row">
            <div class="col-md-8">
              <label>Preço</label>
              <input type="text" name="preco" class="form-control" value="<?php echo $produto->preco;?>">
            </div>
          </div><!-- fim input text preco produtos -->

          <!-- Select produtos ativo ou inativo -->
          <div class="row">
            <div class="col-md-2">
              <label>Ativo</label>
              <select name="ativo" class="form-control">
                <option value="1" <?php if($produto->ativo == 1) echo "selected='selected'";?>>Sim</option>
                <option value="0" <?php if($produto->ativo == 0) echo "selected='selected'";?>>Não</option>
              </select>
            </div>
          </div><!-- fim select produtos ativo ou inativo -->

          <!-- Button submit(enviar) formulário -->
          <br />
          <div class="row">
            <div class="col-md-2">
              <input type="hidden" name="id" value="<?php echo $produto->id;?>">
              <button type="submit" class="btn btn-primary">Alterar</button>
            </div>
          </div><!-- fim do button submit(enviar) formulário -->

        </form><!--Fim formulário de novo cadastro  -->

      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>    
  </body>
</html>
