<?php 
include_once('defaults.php');

$circle = array('number'=>7, 'date'=>'25 ноября 2013', 'title'=>'Рыцари и лжецы');

echo getTop();

//paste content here

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
