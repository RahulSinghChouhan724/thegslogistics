<!doctype html>
<html lang="en">

<head>
	<title>Tracking Id genrator</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<!-- Optional JavaScript -->

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
	 crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
	 crossorigin="anonymous"></script>

	<style type="text/css">
		.wrapper {
			width: 500px;
			margin: 0 auto;
		}

		.row {
			margin-top: 20px;
		}
	</style>
</head>

<body>
	<div class="container-fluid">
		<div class="container">
				<div class="row">
					<div class="col-md-10"></div>
					<div class="col-md-2">
						<form action="logout.php" method="get">
	<a href="logout.php">Logout</a>
	</form>
					</div>
				</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="wrapper">
			<div class="container">
				<div class="row">
					<h2>Enter Information</h2>
				</div>
				<form action="insert.php" method="post">
					<div class="row">
						<div class="col-md-3">
							<label for="Name">Senders Name:</label>
						</div>
						<div class="col-md-5">
							<input type="text"  name ="sname" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<label for="Date">Date:</label>
						</div>
						<div class="col-md-5">
							<input type="date"  name="sdate" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<label for="TrackingNum">Tracking No:</label>
						</div>
						<div class="col-md-5">
							<input type="text" id="Tnum" name="Tnum" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<input type="button" value="Genrate" onclick="getRandom(9)">
						</div>
						<div class="col-md-5">
							<input type="submit" class="btn btn-primary" name="submit" value="Submit">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!--Script-->
	<script>
		function getRandom(length) {
			var randN = Math.floor(Math.pow(10, length - 1) + Math.random() * 9 * Math.pow(10, length - 1));
			document.getElementById('Tnum').value = randN;
			}
	</script>


</body>

</html>
