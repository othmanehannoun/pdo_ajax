<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" type="text/css" href="category.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

</head>

<!-- <head>
	<meta charset="utf-8">
	<title>Ajax CRUD Operation using PDO with Bootstrap/Modal</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head> -->

<body>
<div class="container">
	<!-- <center> -->
		<h1 class="page-header text-center" style="margin-bottom:70px;">Gestion des partenaires</h1>
		<div class="row" style="justify-content: center;">
			<div class="col-sm-8 col-sm-offset-2">
				<button id="addnew" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New</button>

				<div id="alert" class="alert alert-info text-center"" role="alert"  style="margin-top:20px; display:none;">
				<span id="alert_message"></span>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>


				<!-- <div id="alert" class="alert alert-info text-center" style="margin-top:20px; display:none;">
					<button class="close"><span aria-hidden="true">&times;</span></button>
					<span id="alert_message"></span>
				</div>   -->

				<table class="table table-striped" style="margin-top:20px;">
					<thead>
						<th>ID</th>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Address</th>
						<th>Action</th>
					</thead>
					<tbody id="tbody"></tbody>
				</table>
			</div>
		</div>
	<!-- </center> -->
	
</div>
<!-- Modals -->
<?php include('modal.html'); ?>
<!-- <script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


<script src="js.js"></script>
</body>
</html>