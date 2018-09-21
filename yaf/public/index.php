<?php
/**
 * Created by PhpStorm.
 * User: gongzhi
 * Date: 2018/9/20
 * Time: 15:03
 */
use Yaf\Application;
use Yaf\Exception;
define("APP_PATH",realpath(dirname(__DIR__)));//指向public 的上一级
$app = new Application(APP_PATH.'/conf/application.ini');
$app->run();