<?php
include "ParentClass.php";
include "ChildClass.php";
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
					$monsterNumber = $_POST['buttons'];
			}

			// Displays the encounter with your selected monster, its attributes, and some action
			if ($monsterNumber == "1")
			{
				$monster1 = new Monster("does not", "does not", "is very", "neutral");
				echo nl2br ("\n");
				echo "You encounter monster 1 on the path! It ", $monster1->hair, " furry.";
				echo nl2br ("\n");
				echo "His alignment is ", $monster1->alignment, " so he sniffs around your feet and sits on a nearby rock.";
				echo nl2br ("\n");
				echo "You move safely along the path.";
			}
			if ($monsterNumber == "2")
			{
				$monster2 = new Monster("flies", "fangs", "has no", "evil");
				echo nl2br ("\n");
				echo "You encounter monster 2 on the path! She ", $monster2->flies, " above your head!";
				echo nl2br ("\n");
				echo "Her alignment is ", $monster2->alignment, " and she attacks with her ", $monster2->fangs, "." ;
				echo nl2br ("\n");
				echo "You are injured, but manage to fight her off with your sword! Well done!";
			}
			if ($monsterNumber == "3")
			{
				$monster3 = new Monster("walks", "has no", "none", "good");
				echo nl2br ("\n");
				echo "You encounter monster 3 on the path! She ", $monster3->flies, " up to you.";
				echo nl2br ("\n");
				echo "Her alignment is ", $monster3->alignment, " and she heals your wounds." ;
				echo nl2br ("\n");
				echo "You thank her and move on down the path.";
			}
			if ($monsterNumber == "4")
			{
				$monster4 = new Vampire("flies", "pointy", "tidy", "evil");
				echo nl2br ("\n");
				echo "You walk along the path and encounter a castle. It is a dark foreboding place";
				echo nl2br ("\n");
				echo " that smells of death. Since I don't want to spend any more time on this";
				echo nl2br ("\n");
				echo " you decide going in at night is a brillaint plan!";
				echo nl2br ("\n");
				echo "You encounter Strahd van Zarovich and he eats you!";
			}


			?>
	</div>
</body>
</html>
