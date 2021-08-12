<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<title>PHP Import & Export of Seapower</title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col col-md-12 mt-4">
				<h4 class="mb-2 fw-bold">Import / Export XLSX data of Mysql</h4>
				<hr>
					<form action="load_dt.php" method="POST" >
						<div class="row mb-2">
							<label for="formFileMultiple" class="form-label">
								Select your File (Multible) </label>
							<div class="col-md-6">
								<input class="form-control" name="filename" type="file" id="formFileMultiple" multiple>
							</div>
							<div class="col-md-6">
								<button type="submit" name="submit" class="btn btn-primary">UPLOAD FILE</button>
							</div>				
						</div>
					</form>
			</div>
		</div>
	</div>

</body>
</html>