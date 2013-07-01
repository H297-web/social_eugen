<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ildar
 * Date: 16.04.13
 * Time: 23:08
 * To change this template use File | Settings | File Templates.
 */
require_once dirname(__FILE__) . '/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem(dirname(__FILE__) . '/templates');
$twig = new Twig_Environment($loader, array('debug' => true));

function render($name)
{
  global $twig;
  $name = str_replace('.php', '', $name);
  echo $twig->render($name . '.html.twig');
}