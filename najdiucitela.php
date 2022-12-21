<!DOCTYPE html>
<html lang="sk">
<head>
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>KUDY TUDY</title>
</head>


<body>

	<nav>
		<a href="menu.html"><img id="left" src="images/arrow_icon.png"></a>
		<a href="nastavenia.html"><img id="right"src="images/hamburger_icon.png"></a>
	</nav>


	<section>
		<form method="post">
			<div>
				<input list="odkial" type="text" name="odkial" placeholder="Odkiaľ" required>
				<datalist id="odkial">

					<?php
						$json_data = file_get_contents("data/classrooms.json");
                        $classrooms = json_decode($json_data, true);

                        foreach ($classrooms as $key => $classroom) {
                            echo '<option value="'.$classroom["schoolId"].' '.$classroom["name"].'">';
                        }
					?>

  				</datalist>
				<input list="ucitel" type="text" name="ucitel" placeholder="Učiteľ" required>
				<datalist id="ucitel">

					<?php
                        $json_data = file_get_contents("data/teachers.json");
                        $teachers = json_decode($json_data, true);

                        foreach ($teachers as $key => $teacher) {
                            echo '<option value="'.$teacher["lastname"].' '.$teacher["firstname"].'">';
                        }
                    ?>
                    
  				</datalist>
			</div>
			<button type="submit" name="submit" value="Submit">Ukáž mi cestu</button>
		</form>
	</section>

</body>


</html>