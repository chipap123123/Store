<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div style="background: ;height: 1000px" class="col-6 mx-auto bg-dark">
		<h1 style="text-align: center;color: white">Добавить Товар</h1>
		<form action="insert.php" method="GET">
			<input placeholder="Название" name="title" style="width: 600px;height: 80px;font-size: 40px;margin-left: 400px;">
			<input placeholder="Описание" name="opisanie" style="width: 600px;height: 80px;font-size: 40px;margin-left: 400px;margin-top: 30px">
			<input placeholder="Картинка" name="img" style="width: 600px;height: 80px;font-size: 40px;margin-left: 400px;margin-top: 30px">
			<input placeholder="Цена" name="price" style="width: 600px;height: 80px;font-size: 40px;margin-left: 400px;margin-top: 30px">
			<button class="btn btn-primary" style="height: 100px;width: 200px;margin-left: 600px;margin-top: 30px;font-size: 30px">Добавить</button>
		</form>
	</div>
</body>
</html>