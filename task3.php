<?php 
include_once('defaults.php');

$circle = array('number'=>4, 'date'=>'28 октября 2013', 'title'=>'Часы');

echo getTop();
$tasks = array();

$tasks[] = 'Славины настенные часы отстают в час на 5 минут. Сейчас 6 часов утра, а в 12 часов дня к Славе придут гости. На какое время ему надо поставить стрелки часов, чтобы в полдень часы показывали правильное время?';

$tasks[] = 'У вас есть песочные часы на 4 и на 7 минут. Можно ли с их помощью поставить вариться яйцо ровно на 10 минут? Класть часы набок нельзя.';

$tasks[] = 'Башенные часы отбивают три удара за 12 с. В течение какого времени они пробьют шесть ударов?';

$tasks[] = 'Волшебным считается момент, в который число минут на электронных часах совпадает с числом часов. Чтобы сварить волшебное зелье, его надо и поставить на огонь, и снять с огня в волшебные моменты. А чтобы оно получилось вкусным, его надо варить от полутора до двух часов. Сколько времени варится вкусное волшебное зелье?';

$tasks[] = 'На электронных часах Казанского вокзала высвечиваются часы и минуты (например, 17:36). Сколько времени в течение суток на них а) высвечивается цифра 2; б) высвечиваются цифры 5 и 7 одновременно?';

$tasks[] = 'Вася разбил старинные бабушкины часы на 4 части. Дедушка заметил, что разбились они очень хитро: сумма римских чисел на каждой части оказалась равна 20. Попробуйте определить, как треснул циферблат.';


$tasks_add = array();

$tasks_add[] = 'Вова носит электронные часы, которые показывают время в формате ЧЧ:ММ:СС, то есть в 14 часов 23 минуты 57 секунд они покажут 14:23:57. Вова заинтересовался, каких секунд в сутках больше: тех, когда часы показывают, что минут больше, чем секунд (например, 04:45:14), или тех, когда минут меньше, чем секунд (например, 23:37:59). А как думаете вы?';


$tasks_add[] = 'Пустив в одно и то же время двое часов, Иван Антонович обнаружил, что одни из них отстают на 2 минуты в час, а другие спешат на 1 минуту в час. Когда Иван Антонович вновь посмотрел на часы, то увидел, что спешащие часы ушли по сравнению с отстающими на 1 час вперёд. Сколько времени шли часы?';

$tasks_home = array('Известно, что бикфордов шнур горит неравномерно, но сгорает ровно за 1 минуту. Можно ли при помощи двух таких шнуров отмерить ровно 45 секунд? Как?');


echo getPaper($circle,
array('heading'=>null, 
	'tasks'=> $tasks
	));

echo getPaper($circle,
array('heading'=>'Дополнительные задачи', 
	'tasks'=> $tasks_add
	));

echo getPaper($circle,
array('heading'=>'Домашняя задача', 
	'tasks'=> $tasks_home
	));


echo getBottom();
