<?php

    include('Funciones.php');
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
-->
<body>
	<div class="Container">
		<div class="row m-1 justify-content-center">
			<form class="col-8" action="" method="POST">
				  <div class="mb-3 mt-3 row">
					  <label for="staticEmail" class="col-2 col-form-label">nombre</label>
					  <div class="col-10">
					     <input type="text" class="form-control-plaintext" id="inputEmail" name="usuario">
					  </div>
					  <label for="inputPassword" class="col-2 col-form-label">Password</label>
					  <div class="col-10">
					     <input type="password" class="form-control" id="inputPassword" name="contra">
					  </div>
				</div>
				<button type="submit" class="btn btn-primary mt-3">enviar</button>
				<button type="reset" class="btn btn-primary mt-3">reset</button>
			</form>
		</div>
	</div>
</body>
</html>