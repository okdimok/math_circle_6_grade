<?php 
include_once('defaults.php');

$circle = array('number'=>3, 'date'=>'21 октября 2013', 'title'=>'Весы');

echo getTop();
$tasks = array();

$tasks[] = 'Имеются чашечные весы без гирь и 3 одинаковые по внешнему виду монеты, одна из которых фальшивая: она легче настоящих (настоящие монеты одного веса). Сколько надо взвешиваний, чтобы определить фальшивую монету? А если монет было 9? 4? 27? 36?';

$tasks[] = 'Имеются чашечные весы без гирь и 3 одинаковые по внешнему виду монеты. Одна из монет фальшивая, причём неизвестно, легче она настоящих монет или тяжелее (настоящие монеты одного веса). Сколько надо взвешиваний, чтобы определить фальшивую монету? А если монет было 4?';

$tasks[] = 'У весов одна чаша тяжелее другой. Когда на весы положили одну связку бананов, весы показали 1,5 кг. Когда на весы положили связку бананов побольше, весы показали 2,5 кг. Когда взвесили сразу обе связки бананов, весы показали 3,5 кг. Сколько на самом деле весили связки бананов?';

$tasks[] = 'Имеются неправильные чашечные весы, мешок крупы и правильная гиря в 1 кг. Как отвесить на этих весах 1 кг крупы?';

$tasks[] = 'Имеются весы с двумя чашами и по одной гире в 1 грамм, 3 грамма, 9 грамм, 27 грамм и 81 грамм. Как уравновесить груз в 61 грамм, положенный на чашу весов? ';

$tasks[] = 'Сколько крупы уравновесит гирю массой 1кг на весах у которых одно из плеч в два раза больше другого?';


$tasks_add = array();

$tasks_add[] = 'Имеются чашечные весы, любые гири и десять мешков с монетами. Все монеты во всех мешках одинаковы по внешнему виду, но в одном из мешков все монеты фальшивые и каждая весит по 15 г, а в остальных девяти мешках все монеты настоящие и каждая весит по 20 г. Как при помощи одного взвешивания определить, в каком мешке фальшивые монеты?';


$tasks_add[] = '"Дама сдавала в багаж рюкзак, чемодан, саквояж и корзину. Известно, что чемодан весит больше, чем рюкзак;  саквояж и рюкзак весят больше, чем чемодан и корзина;  корзина и саквояж весят столько же, сколько чемодан и рюкзак. 
Перечислите вещи дамы в порядке убывания их веса."';

$tasks_home = array('У продавца имеются чашечные весы с неравными плечами и гири. Сначала он взвешивает товар на одной чашке, затем – на другой, и берет средний вес. Не обманывает ли он?',
'Имеются чашечные весы без гирь и 21 одинаковая по внешнему виду монета, одна из которых фальшивая: она легче настоящих (настоящие монеты одного веса). Сколько надо взвешиваний, чтобы определить фальшивую монету? Нарисуйте дерево решений.');


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
