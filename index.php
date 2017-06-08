<br /><br />
<br /><br />
<center>
<?php 
/*
	Create an associative array with items ands their respective quantities.
	Use a php loop of your choice to display a list of items with quantities on the right side.
	Each quantity is displayed using an html select option to allow the customer to pick any number of items. 
	The display should monitor the quantity in stock such that there is always 3 items remaining in stock. 
*/
	// minimum available stock for each item
		define("FLOOR", 3);
		define("CEIL", 30);
	// variables to hold items in stock	
		
	$computer_parts = array(
		"mouse" => CEIL,
		"keyboard" => CEIL,
		"monitor" => CEIL,
		"battery" => CEIL,
		"charger" => CEIL,
		"hard disk" => CEIL,
		"express card" => CEIL,
		"DDR3 RAM" => CEIL,		
		"optical drive" => CEIL
	);
	$auto_parts = array(
		"dashcam" => CEIL,
		"alternator bracket" => CEIL,
		"alternator fan" => CEIL,
		"alternator bearing" => CEIL,
		"rectifier" => CEIL,
		"stator" => CEIL,
		"pulley" => CEIL,
		"rotor assembly" => CEIL,
		"rotor" => CEIL,
		"diode and plate assembly" => CEIL,
		"retainer" => CEIL,
		"carbon brushes" => CEIL,
		"slip rings" => CEIL,
		"coil" => CEIL,
		"voltage regulator" => CEIL,
		"battery box" => CEIL,
		"battery cable" => CEIL,
		"battery cap" => CEIL,
		"battery control system" => CEIL,
		"battery tray" => CEIL,
		"performance battery" => CEIL,
		"fuel gauge" => CEIL,
		"ammeter" => CEIL,
		"tachometer/rev counter" => CEIL,
		"odometer/milometer/mileometers" => CEIL,
		"vacuum gauge" => CEIL,
		"spark plug" => CEIL,
		"glow plug" => CEIL,
		"ignition box" => CEIL,
		"ignition coil" => CEIL,
		"electronic timing controller" => CEIL,
		"distributor cap" => CEIL,
		"distributor" => CEIL,
		"headlight" => CEIL,
		"fog light" => CEIL,
		"license plate lamp" => CEIL,
		"airbag sensor" => CEIL,
		"crankshaft position sensor" => CEIL,
		"knock sensor" => CEIL,
		"camshaft position sensor" => CEIL,
		"glowplug" => CEIL,
		"main harness" => CEIL,
		"control harness" => CEIL,
		"air conditioning harness" => CEIL,
		"door latch" => CEIL,
		"fuel tank" => CEIL
	);
	$plumbing_materials = array(
		"pvc pipe" => CEIL
	);
	$electrical_materials = array(
		"copper cable" => CEIL,
		"capacitor" => CEIL,
		"transistor" => CEIL,
		"transducer" => CEIL
	);
	ksort($electrical_materials);
	ksort($plumbing_materials);
	ksort($auto_parts);
	ksort($computer_parts);
	$items = array(
			"computer_parts" => $computer_parts,
			"auto_parts" => $auto_parts,
			"plumbing_materials" => $plumbing_materials,
			"electrical_materials" => $electrical_materials
		);
	ksort($items);
	print_r($items);
	echo '<form name = "items" action = "/api-class/home/receiver.php" method = "post">';
	echo '<br /><br /><h1>Complex array</h1>';
	echo '<br /><br />';
	echo '<select id = "item">';
		foreach($items as $item_key => $item_value){
			if($item_key == computer_parts){
				echo '<option>Computer Parts</option>';
			} else if($item_key == auto_parts){
				echo '<option>Auto Parts</option>';
			} else if($item_key == plumbing_materials){
				echo '<option>Plumbing Materials</option>';
			} else if($item_key == electrical_materials){
				echo '<option>Electrical Materials</option>';
			}
		}
	echo '</select>';
	echo '<input type="submit" value="View items" />';
	echo '</form>';
	echo '<br /><br />';
	
	echo '<br /><br />';
	foreach($computer_parts as $item_key => $item_value){
		echo $item_key . ': ' . '<select>';
		for($i = 1; $i < $item_value; $i++){
			$top_i = $item_value - FLOOR;
			if($i <= $top_i ){
					echo '<option>' . $i . '</option>';
			} 
		}
		echo '</select><br /><br />';
	}
	echo '</center>';
?>
