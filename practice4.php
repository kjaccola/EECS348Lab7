<?php
        $size = $_POST['size'];
        makeTable($size);
               function makeTable($size){
        
               echo "<table border =\"1\" style='border-collapse: collapse'>";
        for ($row=0; $row <= $size; $row++) {
                echo "<tr> \n";
                for ($col=0; $col <= $size; $col++) {
			$p = $col * $row;
			if($col == 0 and $row == 0){
				echo "<td>x</td> \n";

			}
			elseif($col ==0){

				echo "<td>$row</td> \n";

			}

			elseif($row == 0){
				echo "<td>$col</td> \n";

			}
			else{
				echo "<td>$p</td> \n";

			}
                   
                        }
                    echo "</tr>";
                }
                echo "</table>";
        }

