<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>

<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Anexos</a>
  </div>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
	<ul class="nav navbar-nav">
      <li><a href="deptos.php">Lista de Departamentos</a></li>      
    </ul>

    <div class="col-sm-3 col-md-3">
        <form class="navbar-form" role="search" action="listado.php" method="POST">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscar..." name="busqueda">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
		
    </div>
    <ul class="nav navbar-nav">
   
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>

</body>
</html>
</html>