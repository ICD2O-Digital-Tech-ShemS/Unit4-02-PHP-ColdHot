<?php
	$Celsius = $_POST['Celsius'];
	$Conversion =($Celsius * 9/5) + 32;
	$Final = round($Conversion,1);
        if ($Final >= 15) {
            echo "It is Hot out side";
        }
        if  ($Final <= 15) {
            echo  "It is cold"; 
    }
?>
<h3>Results:</h3>
Volume of a sphere is <?php echo "$Final" ?>°F.