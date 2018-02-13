<?php

/*
 * This is a simple router for any app used PHP
 */

include 'Router.php';

$request = $_SERVER['REQUEST_URI'];

$router = new Router($request);