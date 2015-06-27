<?php
namespace TemplateEngine;

class Template {
	private $vars=array();

	public function __set($name, $value){
		$this->vars[$name]=$value;
	}

	public function __get($name){
		return $this->vars[$name];
	}

	public function render($temp){
		extract($vars); //импортируем переменные из массива в текущую таблицу символов
		ob_start(); //включение буферизации
		include("$temp"); 
		return ob_get_clean(); //получаем содержимое текущего буфера
	}
}
?>
