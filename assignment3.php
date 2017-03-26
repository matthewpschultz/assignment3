<?php
include "ParentClass.php";
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	<div id = "wrap">
	  <form action="" name="monsterPicker" method="post">
			<input type="radio" name="buttons" value="1" > 1
			<input type="radio" name="buttons" value="2" > 2
	  	<input type="radio" name="buttons" value="3" > 3
	  	<input type="radio" name="buttons" value="4" > 4
			<input type="submit" name="submit" value="Pick a Monster!" />
		</form>
		<?php

			if(isset($_POST['buttons']))
			{
					echo "You have picked monster ", $_POST['buttons'], "!";
					$monsterNumber = $_POST['buttons'];
			}

			// Displays the encounter with your selected monster and its attributes
			if ($monsterNumber == "1")
			{
				$monster1 = new Monster("does not", "does not", "is very", "neutral");
				echo nl2br ("\n");
				echo "you encounter monster 1 on the path! It ", $monster1->flies, " fly";
			}



			?>





	</div>
</body>
</html>
