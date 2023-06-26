<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <link rel="stylesheet" href="css/style.css">
	<title>Document</title>
</head>
<body>
	<a href="classes/index.php">переход CLASSES</a>
	<div class="container">
		<div class="row">
			<div class="col">
				<form>
					<div class="mb-3">

						<label for="name" class="form-label">Имя: </label>
						<input type="text" class="form-control" id="name">
					</div>
					<div class="mb-3">
						<div class="row colors">
							<div class="col-2 color active">
								<label for="black"><img src="images/black.jpg" alt="black" title="Черная"></label>
								<input type="radio" id="black" name="color">
							</div>
							<div class="col-2 color active">
								<label for="black-white"><img src="images/black-white.jpg" alt="black-white" title="Черно-Белая"></label>
								<input type="radio" id="black-white" name="color">
								
							</div>
							<div class="col-2 color">
								<label for="black-white-orange"><img src="images/black-white-orange.jpg" alt="black-white-orange" title="Трехцветная"></label>
								<input type="radio" id="black-white-orange" name="color">
								
							</div>
							<div class="col-2 color">
								<label for="white"><img src="images/white.jpg" alt="white" title="Белая"></label>
								<input type="radio" id="white" name="color">
								
							</div>
							<div class="col-2 color">
								<label for="orange"><img src="images/orange.jpg" alt="orange" title="Рыжая"></label>
								<input type="radio" id="orange" name="color">
								
							</div>
							<div class="col-2 color">
								<label for="thai"><img src="images/thai.jpg" alt="thai" title="Тайская"></label>
								<input type="radio" id="thai" name="color">
								
							</div>
						</div>
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
					
				</form>
				
				
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<script>
		let colors = document.querySelectorAll('.color');
		for (var i = colors.length - 1; i >= 0; i--) {
			console.log(colors[i]);
		}
	</script>

</body>
</html>