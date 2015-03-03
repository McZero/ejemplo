<html>
	<head>
		<meta charset="UTF-8">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
                <meta charset="UTF-8">
	</head>
	<body>
	<h2>PHP lenguaje de lado del servidor</h2>
	<div class="alert alert-info">Esto lo escribio carlos <a href="carlos.php">Click aqui!</a></div>
	<div class="row">
		<div class="col-md-2"><p>Tabla de multiplicar del 7</p></div>
		<div class="col-md-4">
			<select multiple class="form-control">
			<?php for ($i = 1; $i <= 10; $i++) { ?>
				<option><?php echo $i*7;?></option>
			<?php } ?>
			</select>
		</div>	
	</div>
	<hr>
	<h2>JAVASCRIPT lenguaje del lado del cliente</h2>
        <div class="alert alert-success"><p>ESTO LO ESCRIBIO HETZA DESDE GIT</p><a href="hetza.php" >Visita mi página</a></div>        
	<p>Serie de Fibonacci</p>
	<ol id="fibo">
		
	</ol>
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
	function seriefibo (n){
		v1=0;
		v2=1;
		$("ol#fibo").append('<li><a class="btn btn-default" href="#" role="button">'+v2+'</a></li>');
		for (i=1; i<=n; i++)
		{
		   Resul = v1 + v2;
		   v1 = v2;
		   v2 = Resul;
		   $("ol#fibo").append('<li><a class="btn btn-default" href="#" role="button">'+v2+'</a></li>');
		}
	}
	seriefibo(10);
	</script>
</html>
