<!-- 	Name: Sang Hoon Lee
		Class: CS290 W15
		Assignment: 4 part 1
		Filename: multtable.php
		Date: 02/09/15
-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
</head>
<body>
	<?php
		//variables
		$min_multiplicand = $_GET["min-multiplicand"];
		$max_multiplicand = $_GET["max-multiplicand"];
		$min_multiplier = $_GET["min-multiplier"];
		$max_multiplier = $_GET["max-multiplier"];
		
		//variables for validation
		$isValid = 1;
		$plicand_minmaxChk = 1;
		$plier_minmaxChk = 1;
		
		//validation of GET inputs
		//min multiplicand input validation
		if (!isset($min_multiplicand) || empty($min_multiplicand)){
			echo "Enter a min-multiplicand<br>";
			$isValid++;
			$plicand_minmaxChk++;
		}else if (!(is_numeric($min_multiplicand))){
			echo "min-multiplicand must be an integer<br>";
			$isValid++;
			$plicand_minmaxChk++;
		}

		//max multiplicand input validation
		if (!isset($max_multiplicand) || empty($max_multiplicand)){
			echo "Enter a max-multiplicand<br>";
			$isValid++;
			$plicand_minmaxChk++;
		}else if (!(is_numeric($max_multiplicand))){
			echo "max-multiplicand must be an integer<br>";
			$isValid++;
			$plicand_minmaxChk++;
		}

		//min multiplier input validation
		if (!isset($min_multiplier) || empty($min_multiplier)){
			echo "Enter a min-multiplier<br>";
			$isValid++;
			$plier_minmaxChk++;
		}else if (!(is_numeric($min_multiplier))){
			echo "min-multiplier must be an integer<br>";
			$isValid++;
			$plier_minmaxChk++;
		}

		//max multiplier input validation
		if (!isset($max_multiplier) || empty($max_multiplier)){
			echo "Enter a max-multiplier<br>";
			$isValid++;
			$plier_minmaxChk++;
		}else if (!(is_numeric($max_multiplier))){
			echo "max-multiplier must be an integer<br>";
			$isValid++;
			$plier_minmaxChk++;
		}

		//min < max input for multiplicand
		if ($plicand_minmaxChk == 1){
			if ($min_multiplicand > $max_multiplicand){
				echo "min-multiplicand must be less than max-multiplicand<br>";
				$isValid++;
			}
		}

		//min < max validation for multiplier
		if ($plier_minmaxChk == 1){
			if ($min_multiplier > $max_multiplier){
				echo "min-multiplier must be less than max-multiplier<br>";
				$isValid++;
			}
		}

		//makes the table if inputs are correct
		if ($isValid == 1)
		{
				$col_number = $min_multiplier;	//column tracker for first row
				$row_number = $min_multiplicand;	//row tracker
				$rowCur = 0;	//row counter
				$row_size = $max_multiplicand - $min_multiplicand + 2;	//row size
				$col_size = $max_multiplier - $min_multiplier + 2;	//column size
				$temp_multiplicand = $min_multiplicand;	//storage value for min multiplicand

				echo "<h2>Mult Table</h2>";
				echo "<table border='2'>";

				//while loop to generate the table
				while($rowCur < $row_size){
					echo "<tr>";
					$colCur = 1;
					if ($rowCur == 0){	//for the blank cell
						echo "<td></td>";
						$temp_multiplicand--;
					}
					else{
						echo "<td>" . $row_number . "</td>";
						$row_number++;
					}
					$temp_multiplier = $min_multiplier;
					while($colCur < $col_size){

						//for the first row, only put the values in, no calculation
						if ($rowCur == 0){
							echo "<td>" . $col_number . "</td>";
							$col_number++;
						}

						//put multiplied values into each cell
						else{
							$product = $temp_multiplicand * $temp_multiplier;
							echo "<td>" . $product . "</td>";
							$temp_multiplier++;
						}
						$colCur++;
					}
					$rowCur++;
					$temp_multiplicand++;
					echo "</tr>";
				}
				echo "</table>";
	}
?>
</body>
</html>
