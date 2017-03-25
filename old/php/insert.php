

<?php require 'main.php';

 $way = $_POST['way'];
	if($way == ""){
		echo("Way is empty!");
		echo('<a href = "../admin.php">Back</a>');
	}else{
	mysqli_query($connection,"INSERT INTO `all_images`.`slider_db` (`id`, `url`) VALUES (NULL, '$way')");
		echo('<a href = "../admin.php">Back</a>');

	}

	?>
	