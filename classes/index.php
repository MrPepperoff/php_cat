<?php
	require 'form.php';

	if(isset($_GET['status']) && $_GET['status'] == 0){
		echo "<p>недостаточно символов</p>";
	}

	if(isset($_GET['status']) && $_GET['status'] == 1){
		echo "<p>Форма успешно отправлена</p>";
	}
?>
