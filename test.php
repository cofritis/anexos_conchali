<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lista de Anexos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
<body>
<?php include 'header.php'; ?>
  <?php
	$link = new PDO('mysql:host=localhost;dbname=anexos', 'root', ''); 
	$idd = $_GET["idd"];
  ?>
  <section>
  <?php foreach ($link->query("SELECT P.nombre, P.anexo, D.departamento FROM persona AS P, departamento AS D WHERE P.depto=D.id AND D.id=$idd") as $row){  ?> 
		<div class="container py-3">
			<div class="card">
				<div class="row ">
					<div class="col-md-4">
						<img src="perfil.png" alt="imgperfil" class="w-100">
					</div>
						<div class="col-md-8 px-3">
							<div class="card-block px-3">
								<div class="container">
									<div class="row">
										<div class="col-sm">
										<h4><?php echo $row[0]  ?></h4>
										</div>
										<div class="col-sm">
											Cargo:
										</div>
										<div class="col-sm">
											Email:
										</div>
									</div>
								<table class="table table-striped">									
									<tr><td><h4><?php echo $row[0]  ?></h4></td></tr>
									<tr><td><label>Cargo:</label></td></tr>
									<tr><td><label>Departamento:</label> <?php echo $row[2] ?></td></tr>
									<tr><td><label>Email:</label></td></tr>
									<tr><td><label>Anexo:</label> <?php echo $row[1] ?></td></tr>								
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
		<br>
		<?php
			}
			?>
	</section>
</body>
</html>


	</div>