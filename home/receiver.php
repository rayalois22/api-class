<?php 
	if(isset($_POST['items'])){
		var_dump($_POST['items']);
		$selectedCategory = $_POST['items'];
		echo "$selectedCategory";
	}
?>