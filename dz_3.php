<?php
/*
 * Следующие задания требуется воспринимать как ТЗ (Техническое задание)
 * p.s. Разработчик, помни! 
 * Лучше уточнить ТЗ перед выполнением у заказчика, если ты что-то не понял, чем сделать, переделать, потерять время, деньги, нервы, репутацию.
 * Не забывай о навыках коммуникации :)
 * 
 * Задание 1
 * - Создайте массив $date с пятью элементами
 * - C помощью генератора случайных чисел забейте массив $date юниксовыми метками
 
 */
    $date = array();
	mt_srand(time());

	for ($i=1; $i<=5; $i++) {
		$date[] = mt_rand();
	}

//  - Сделайте вывод сообщения на экран о том, какой день в сгенерированном массиве получился наименьшим, а какой месяц наибольшим

	$day = array();
	for ($i=0; $i<5; $i++) {
        $day[] = date('j', $date[$i]);
	}

	echo 'Наименьший день: '.min($day).'<br>';
	
	$month = array();
	for ($i=0; $i<5; $i++) {
		$month[] = date('n', $date[$i]);
	}

	echo 'Наибольший месяц: '.max($month).'<br>';

	 // - Отсортируйте массив по возрастанию дат

	sort($date);

  // - С помощью функция для работы с массивами извлеките последний элемент массива в новую переменную $selected

 	$selected = array_pop($date);

  // - C помощью функции date() выведите $selected на экран в формате "дд.мм.ГГ ЧЧ:ММ:СС"

 	echo 'Вывод $select ' .date('d:m:Y H:i:s', $selected).'<br>';

 // - Выставьте часовой пояс для Нью-Йорка, и сделайте вывод снова, чтобы проверить, что часовой пояс был изменен успешно
 
 	date_default_timezone_set('America/New_York'); //Устанавливает временную зону
	echo 'Часовой пояс Нью-Йорка: ' .date('d:m:Y H:i:s', $selected);
?>
