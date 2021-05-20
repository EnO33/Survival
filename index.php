<?php
session_start();
require_once("core/includes.php");

$url = htmlspecialchars($_SERVER['REQUEST_URI']);
$url_array = explode('/', $url);

$view = "public/views/" . htmlspecialchars($url_array[2]) . ".php";

if (is_file($view)) {
	include $view;
}