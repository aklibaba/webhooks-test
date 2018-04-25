<?php
/**
 * Created by PhpStorm.
 * User: AASA
 * Date: 16.01.2018
 * Time: 11:42
 */

$name = filter_input(INPUT_GET, 'name');
var_dump($name);
var_dump(boolval($name));