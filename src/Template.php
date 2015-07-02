<?php
namespace TemplateEngine;

class Template
{
    private $vars = array();
    private $debug = true;


    public function render($temp, array $data = [])
    {
        if (!file_exists("$temp") && $this->$debug == true) {
            throw new \Exception('Невозможно открыть файл'); //перед Exception стоит "\" потому что мы создаём этот объект класса в глобальном пространстве имён
        } else {
            extract($data); //импортируем переменные из массива в текущую таблицу символов
            ob_start(); //включение буферизации
            include("$temp");
            return ob_get_clean(); //получаем содержимое текущего буфера
        }
    }
}

?>
