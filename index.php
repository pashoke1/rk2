<!DOCTYPE html>
<html>
<head>
	<title>rk2</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Фомичев Павел ИУ4-13Б ВР№10</h1>
	<h1>Задание 2</h1>
	<br>
	<form method="post">
		<p>Первое число:<input type="int" name="p" value="0"></p>
		<p>Второе число:<input type="int" name="v" value="0"></p>
		<p>Сумма:<input type="radio" name="rad" value="sum"></p>
		<p>Разность:<input type="radio" name="rad" value="raz"></p>
		<p>Произведение:<input type="radio" name="rad" value="pr"></p>
		<p>Деление:<input type="radio" name="rad" value="del"></p>
		<input type="submit" name="Решить">
	</form>


<?php

$p = $_POST['p'];
$v = $_POST['v'];
if ($_POST['rad'] == 'sum') {
	echo $p+$v;
} elseif ($_POST['rad'] == 'raz') {
	echo $p-$v;
} elseif ($_POST['rad'] == 'pr') {
	echo $p*$v;
} elseif ($_POST['rad'] == 'del') {
	echo $p/$v;
}
?>
<br>
<hr>
<h1>Задание 1</h1>
<?php
$rows = 100;
$cols = 100;

echo '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){
    echo '<tr>';
    for ($td=1; $td<=$cols; $td++){
        echo '<td>'. $tr. "-" . $td .'</td>';
    }
    echo '</tr>';
}

echo '</table>';
?>
