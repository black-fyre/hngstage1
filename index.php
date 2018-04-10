<!DOCTYPE html>
<html>
<head>
	<title>HNG Internship</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
	<style type="text/css">
		body{
			background-color: #9C27B0;
			font-family: Raleway, "sans-serif"

		}
		h1{
			font-weight: 700;
		}
		.main{
			width: 50vw;
			height: 50vh;
			background-color: #F3E5F5;
			margin: auto;
			text-align: center;
			box-shadow: 2px 2px 4px;

		}
		.clock{
			border-radius: 5%;
			width: 150px;
			margin: auto;
			background-color: #000;
			color: #fff;
			text-align: center;
			font-size: 2em;
			padding: 10px;
		}
	</style>
</head>
<body>

	<div class="main">

		<h1 class="header">HNG Internship</h1>

		<div class="clock">
			<p class="time"><?php echo date("h:i a"); ?></p>
		</div>

		<p class="date"><?php echo date("l, F d, Y") ?></p>

	</div>

</body>
</html>