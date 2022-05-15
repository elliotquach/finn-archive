<html>
	<body>
		<?php include ("header.inc.php"); ?>

		<h1>Height Finder</h1>
		<h1>Find Height</h1>
		<div class="form">
			<form action="output.php" method="POST">
				<p>Please enter your name <input type="text" name="name"></p>
				<input type="submit" value="Submit">
			</form>	
		</div>

		<h1>Add Height</h1>
		<div class="form">
			<form action="output.php" method="POST">
				<p>Please enter your name <input type="text" name="name"></p>
				<p>Please enter your height <input type="number" name="height"></p>
				<input type="submit" value="Submit">
			</form>	
		</div>
	</body>
</html>