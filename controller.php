<?php
include "vendor/autoload.php";
use "TemplateEngine\Template";
$view = new Template;

$view->title='Заголовок';
$view->links=array("Главная","Статьи","О нас");
$view->body="Lorem ipsum";
$view->img="images/posts/1.png";

$view->content=$view->render("content.php");

echo $view->render("main.php");

?>


