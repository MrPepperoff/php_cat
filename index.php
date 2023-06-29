<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Document</title>
</head>
<body>
	<a href="classes/index.php">переход CLASSES</a>
	<div class="container">
		<div class="row">
			<div class="col">
				<form action="obr.php" method="POST">
					<div class="mb-3 text">

						<label for="name" class="form-label">Имя: </label>
						<input type="text" class="form-control" id="name">
					</div>
					<div class="mb-3">
						<div class="row colors">
							<div class="col-2 color">
								<label for="black"><img src="images/black.jpg" alt="black" title="Черная"></label>
								<input type="radio" id="black" name="color" value="black">
							</div>
							<div class="col-2 color">
								<label for="black-white"><img src="images/black-white.jpg" alt="black-white" title="Черно-Белая"></label>
								<input type="radio" id="black-white" name="color" value="black-white">
								
							</div>
							<div class="col-2 color">
								<label for="black-white-orange"><img src="images/black-white-orange.jpg" alt="black-white-orange" title="Трехцветная"></label>
								<input type="radio" id="black-white-orange" name="color" value="black-white-orange">
								
							</div>
							<div class="col-2 color">
								<label for="white"><img src="images/white.jpg" alt="white" title="Белая"></label>
								<input type="radio" id="white" name="color" value="white">
								
							</div>
							<div class="col-2 color">
								<label for="orange"><img src="images/orange.jpg" alt="orange" title="Рыжая"></label>
								<input type="radio" id="orange" name="color" value="orange">
								
							</div>
							<div class="col-2 color">
								<label for="thai"><img src="images/thai.jpg" alt="thai" title="Тайская"></label>
								<input type="radio" id="thai" name="color" value="thai">
								
							</div>
						</div>
					</div>

					<button type="submit" class="btn btn-primary text-center">Сохранить</button>
					
				</form>
				
				
			</div>
		</div>
	</div>
	<script src="js/bootstrap.min.js"></script>
	<script src='js/script.js'></script>

</body>
</html>