<html>
	<body>
		<?php include ("header.inc.php"); ?>

		<h1>My First Web Program</h1>
		<div class="form">
			<form action="output.php" method="POST">
				<p>What is your name? <input type="text" name="name"></p>
				<p>What year were you born? <input type="text" name="yob"></p>
				<p>Have you had your birthday this year? (y/n) <input type="text" name="hadBirthday"></p>
				<p>How much money do you save each year? <input type="text" name="savings"></p>
				<input type="submit" value="Submit">
			</form>	
		</div>
	</body>
</html>