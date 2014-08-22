<?php
	session_start();
// echo $_SESSION['number'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Great Number Game</title>
	<style type="text/css">
		#container{
			width: 650px;
			height: 700px;
			margin: auto;
		}
		#top{
			text-align: center;
		}
		#left.box, #right.box{
			background-color: red;
			text-align: center;
		}
		/*#middle.box{
			text-align: center;
		}*/
		#middle1{
			background-color: green;
			color: white;
			position: absolute;
			left:430px;
			top:195px;
			text-align: center;
		}
		#middle1 input {

		}
		#hide{
			display: none;
		}
		.box{
			display: inline-block;
			width: 200px;
			height: 200px;
			vertical-align: top;
			/*border: 1px solid black;*/
		}
		p {
			margin-top: 80px;
			color: white;
			font-weight: 500;
			display: inline-block;
		}
		input{
			display: block;
			margin: auto;
			margin-top: 10px;
		}
		form{
			margin-top: 80px;
		}

	</style>
</head>
<body>
	<div id="container">

		<div id="top">
			<h1>Welcome to the Great Number Game!</h1>
			<h2>I am thinking of a number between 1 and 100</h2>
			<h3>Take a guess</h3>
		</div>

		<div class="box">
	<?php	if(isset($_SESSION['low']))
	{
		echo $_SESSION['low']; 
		unset($_SESSION['low']);
	} ?>
		</div>

		
	<?php if(!isset($_SESSION['correct']))
	{	
	?>
		<div class='box'>
			<form action='process.php' method="post">
				<input type="text" name="guess">
				<input type="submit" value="Submit">
			</form>
		</div>
	<?php 
	} 
	else {
		echo $_SESSION['correct'];
		$_SESSION['number'] = rand(1,100);
		unset($_SESSION['correct']);
	}?>
	

	<div class="box">
	<?php	if(isset($_SESSION['high']))
	{
		echo $_SESSION['high']; 
		unset($_SESSION['high']);
	}?>
	</div>

</div>
	
</body>
</html>


<?php

// session_destroy();
?>