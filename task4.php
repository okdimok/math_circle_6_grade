<?php 
include_once('defaults.php');

$circle = array('number'=>5, 'date'=>'11 ноября 2013', 'title'=>'Путешествия');

echo getTop();
$tasks = array();

$tasks[] = 'Вертолёт вылетел с площадки в Тушино. Он пролетел 100 км на север, затем 100 км на восток, 100 км на юг и 100 км на запад. Где он оказался, к северу, к северо-востоку, к востоку, ... , к северо-западу или точно в Тушино?';

$tasks[] = 'Откуда мог вылететь вертолёт, если пролетев 100 км на восток он приземлился в той же точке?';

$tasks[] = 'Откуда мог вылететь вертолёт, если пролетев 100 км на юг, 100 км на восток и 100 км на север, он приземлился в той же точке?';

$tasks[] = 'Велосипедист едет со скоростью <var>36 км/ч</var>. Сколько метров он проезжает за секунду?';

$tasks[] = ' У одного человека не было наручных часов, но зато дома висели точные настенные часы, которые он иногда забывал заводить. Однажды, забыв в очередной раз завести часы, он отправился в гости к своему другу, провел у того вечер, а вернувшись домой, сумел правильно поставить часы. Каким образом ему удалось это сделать, если время в пути заранее известно не было? ';

$tasks[] = 'Петя и Витя ехали вниз по эскалатору. Посередине эскалатора хулиган Витя сорвал с Пети шапку и бросил её на встречный эскалатор. Пострадавший Петя побежал обратно вверх по эскалатору, чтобы затем спуститься вниз и вернуть шапку. Хитрый Витя побежал по эскалатору вниз, чтобы затем подняться вверх и успеть раньше Пети. Кто успеет раньше, если скорости ребят относительно эскалатора постоянны и не зависят от направления движения?';

$tasks[] = 'Улитке нужно забраться на дерево высотой 10&nbsp;метров. За день она поднимается на 4 метра, а за ночь сползает на 3. Когда она доползет до цели, если стартовала улитка утром в понедельник?';

$tasks[] = 'По шоссе со скоростью 100 км/ч едет колонна машин длиной <var>300 метров</var>. Проезжая мимо поста ДПС, каждая машина сбрасывает скорость до <var>80 км/ч</var>. Какова будет длина колонны, когда все машины проедут пост ДПС?';





$tasks_add = array();

$tasks_add[] = 'У Алёны есть мобильный телефон, заряда аккумулятора которого хватает на 6 часов разговора или 210 часов ожидания. Когда Алёна садилась в поезд, телефон был полностью заряжен, а когда она выходила из поезда, телефон разрядился. Сколько времени она ехала на поезде, если известно, что Алёна говорила по телефону ровно половину времени поездки?';


$tasks_add[] = 'Два поезда, находившиеся на расстоянии 200 км друг от друга, сближаются по одной колее, причем каждый развивает скорость <var>50 км/ч</var>. С&nbsp;ветрового стекла одного локомотива в начальный момент движения взлетает муха и принимается летать со скоростью 75 км/ч вперед и назад между поездами, пока те, столкнувшись, не раздавят ее. Какое расстояние успевает пролететь муха до столкновения?                                                                                                                                                 ';

$tasks_home = array('Есть ли места, вылетев из которых вертолёт мог бы пролетев 100 км на север, 100 км на восток, 100 км на юг и 100 км на запад оказаться в том же месте?');


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
