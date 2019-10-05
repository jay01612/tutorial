<!DOCTYPE html>
<html>
<head>
	<title>Murder Manila | Booking</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/297acfa026.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
	<div class="logo">
	<img src="12.png" width="180" height="180">
	</div>

	<div class="container">
		<ul class="progressbar">
			<li class="active">Date</li>
			<li class="info">Info</li>
			<li class="summary">Summary</li>
			<li class="payment">Payment</li>
			<li class="confirmation">Confirmation</li>
		</ul>
	</div>

	<div class="container">
	<p class="text-center">Select your game</p>
	<div class="row">
		<div class="col-md-4">
			<label for="game">Game Theme</label>
			<select name="game" id="game" class="form-control">
				<option value="1">Game 1</option>
				<option value="2">Game 2</option>
				<option value="3">Game 3</option>
				<option value="4">Game 4</option>
				<option value="5">Game 5</option>
			</select>
		</div>
		<div class="col-md-4">
			<label for="dateStart">Date</label>
			<input type="date" class="form-control" id="dateStart"/>
		</div>
		<div class="col-md-4">
			<label for="timeStart">Time</label>
			<input type="time" class="form-control" id="timeStart"/>
		</div>
		<button type="button" class="btn btn-primary" id="nextBtn">Next</button>
	</div>
	
	<hr class="hr">
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('click', '#nextBtn', function(){
			var game = $('#game').val();
			var dateStart = $('#dateStart').val();
			var timeStart = $('#timeStart').val();

			// console.log(game + " " + dateStart + " " + timeStart);

			$.ajax({
				url: "{{ url('api/bookNow') }}",
				method : "POST",
				data : {
					game : game,
					date : dateStart,
					time : timeStart
				}
			}).done(function(result){
				if(result.response){
					alert("Next Process");
				}
				if(!result.response){
					alert(result.message);
				}
			});

		});
	});
</script>

</body>
<style>
	body {
		padding: 0;
		margin: 0;
		background-color: #000;
		height: 100vh;
		text-align: center;
		color: #fff;
	}
	.logo {
		position: absolute;
		width: 100%;
		text-align: center;
	}
	.container {
		width: 100%;
	}
	.progressbar {
		counter-reset: step;
	}
	.progressbar li{
		list-style-type: none;
		float: left;
		color: #fff;
		position: relative;
		margin-top: 20%;
		width: 20%;
		right: 20px;
		text-align: center;
		text-transform: uppercase;
		font-weight: 100;
		font-size: 70%;
		
	}
	.progressbar li:before {
		content: counter(step);
		counter-increment: step;
		width: 20px;
		height: 20px;
		border: 1px solid #ddd;
		display: block;
		text-align: center;
		margin: 0 auto 10px auto;
		border-radius: 50%;
		background-color: #000;
	}
	.progressbar li:after {
		content:'';
		position: absolute;
		width: 100%;
		height: 1px;
		background-color: #ddd;
		top: 10px;
		left: -50%;
		z-index: -1;
	}
	.progressbar li:first-child:after {
		content: none;
	}
	.progressbar li.active {
		color: #55efc4;
	}
	.progressbar li.active:before {
		border-color: #55efc4;
	}
	.container-fluid{
		margin-top: 20px;
		display: inline-flex;
	}
	.text-center{
		text-transform: uppercase;
		letter-spacing: 0.5em;
		line-height: 80px;
	}
	.hr {
		width: 80%;
		border: none;
		height: 1px;
		background-color: #fff;
	}
	#btn {
		width: 50%;
	}
	


</style>
</html>