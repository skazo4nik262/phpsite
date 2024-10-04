<!DOCTYPE html>
<html>
<head>
	<title>Калькулятор</title>
</head>
<body>

<h1>Мои формы</h1>

<?php

// Проверяем, была ли отправлена форма калькулятора
if (isset($_GET['act']) && $_GET['act'] == 'calc') {

	// Выводим форму калькулятора
	?>
	<h2>Калькулятор</h2>
	<form method="post" action="?act=calc">
		<input type="number" name="num1" placeholder="Число 1">
		<select name="operator">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
		<input type="number" name="num2" placeholder="Число 2">
		<button type="submit">Рассчитать</button>
	</form>

	<?php

	// Проверяем, были ли отправлены данные формы
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		// Получаем данные из формы
		$num1 = $_POST['num1'];
		$operator = $_POST['operator'];
		$num2 = $_POST['num2'];

		// Выполняем расчет
		switch ($operator) {
			case '+':
				$result = $num1 + $num2;
				break;
			case '-':
				$result = $num1 - $num2;
				break;
			case '*':
				$result = $num1 * $num2;
				break;
			case '/':
				if ($num2 == 0) {
					$result = "Деление на ноль!";
				} else {
					$result = $num1 / $num2;
				}
				break;
		}

		// Выводим результат
		echo "Результат: " . $result;
	}
} else {

	// Выводим ссылку на форму калькулятора
	echo "<a href='?act=calc'>Открыть калькулятор</a>";
}

// Вывод других форм
?>

</body>
</html>
