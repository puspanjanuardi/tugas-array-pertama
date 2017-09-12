<?php
$data = array("Volvo", "BMW", "Toyota");
$arrlength = count($data); for($x = 0; $x < $arrlength; $x++) { 
echo $data[$x];    echo "<br>"; }
$santri = array ( 
	 array("abdurrahman",22,18), 
	 array("abullah",15,13),
	 array("abdullah",5,2),
	 array("alrahman",17,15)  );
		 echo $santri[0][0].": In stock: ".$santri[0][1].", sold: ".$santri[0][2].".<br>"; 
		 echo $santri[1][0].": In stock: ".$santri[1][1].", sold: ".$santri[1][2].".<br>"; 
		 echo $santri[2][0].": In stock: ".$santri[2][1].", sold: ".$santri[2][2].".<br>";
		 echo $santri[3][0].": In stock: ".$santri[3][1].", sold: ".$santri[3][2].".<br>";
	 for ($santri = 0; $santri< 4; $santri++) { 
	 echo "<p><b>santri number $santri</b></p>" ;  
	 echo "<ul>";  
	 for ($santri = 0; $santri < 3; $santri++) {   
	 echo "<li>".$santri[$santri][$santri]."</li>";
	 }  
	 echo "</ul>"; 
	 }
?>