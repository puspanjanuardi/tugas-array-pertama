<?php
$age = array("pater"=>"35","ben"=>"32","joe"=>"40");
	echo "pater is ". $age['pater']."years old.";
	
$cars = array("volvo","bmw","avanza");
$arrlength = count($cars);
for($x = 1; $x < $arrlength; $x++) {
	echo $cars[$x];
	echo "<br>";
}
foreach ($cars as $key => $value) {
	echo $key.":".$value."<br>";
}

$cars = array("volvo","bmw","avanza");
echo count ($cars);
$cars = array("volvo"," bmw"," totota",);
echo " I like " . $cars[0]. "." . $cars[1] . "and" . $cars[2] .".";

$age = array("dika"=>"29","abid"=>"57","bilal"=>"32","tama"=>"48");

foreach($age as $x_value) {
	echo "value=" . $x_value;
	echo "<br>";
}

$age = array("Peter"."35", "Ben"."37", "Joe"."43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

?>