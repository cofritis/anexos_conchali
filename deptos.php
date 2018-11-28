<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lista de Departamentos</title>
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
  ?>
	<table class="table" >
		<thead>
		<tr>
			<th>Departamentos</th>
		</tr>
		</thead>

	<?php foreach ($link->query('SELECT D.id, D.departamento FROM departamento AS D') as $row){ ?> 
	<tr>
		<td><a href="listado.php?idd=<?php echo $row[0] ?>" ><?php echo $row[1] ?></a></td>
	</tr>
	<?php
		}
	?>
	</table>

</body>
</html>