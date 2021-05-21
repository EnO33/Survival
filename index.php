<?php
session_start();
require_once("core/includes.php");

$url = htmlspecialchars($_SERVER['REQUEST_URI']);
$url_array = explode('/', $url);

$view = "public/views/" . htmlspecialchars($url_array[2]) . ".view.php";

include ("public/views/layout/layout_top.php");

if (empty($url_array[2])) {
	$view = "public/views/home.view.php";
}

if (is_file($view)) {
	include $view;
}

include ("public/views/layout/layout_bottom.php");