<?php

function getTop($append = ''){
	$result = '<!DOCTYPE html>';
	$result .= '<html> <head>';
	$result .= '<link rel="stylesheet" type="text/css" href="cssreset-min.css">';
	$result .= '<link rel="stylesheet" type="text/css" href="style.css">';
	$result .= $append;
	$result .= '</head> <body>';
	return $result;	
}

function getPaper($circle = array('number'=>1, 'date'=>'14 октября 2013', 'title'=>'Тугрики и кроны'), $paper = array('heading'=>null, 'tasks'=> array())){
	$result = '<div class="paper">';
	$result .= '<div class="circle-name">57я школа.';
	$result .= '<br>Кружок';
	$result .= '<br>по математике';
	$result .= '<br>для 5х классов.';
	$result .= '</div>';
	$result .= '<div class="circle-date">Занятие №'.$circle['number'].'.';
	$result .= '<br>'.$circle['date'];
	$result .= '<br>'.$circle['title'];
	$result .= '</div>';
	$result .= '<h1>'.($paper['heading']?:$circle['title']).'</h1>';
	$result .= '<div class="tasks">';
	$i = 0;
	foreach ($paper['tasks'] as $task) {
		$result .= '<div class="task">';
		$result .= '<span class="task-no">Задача '.++$i.'.</span>';
		$result .= '<span class="task-text">';
		$result .= $task;
		$result .= '</span>';
		$result .= '</div>';
	}
	$result .= '</div></div>';
	return $result;
}

function getBottom(){
	return '</body></html>';
}


