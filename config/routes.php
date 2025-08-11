<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
use Hyperf\HttpServer\Router\Router;

Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');
Router::get('/test1', 'App\Manage\Controller\TestController@index');
Router::addGroup('/test/',function (){
    Router::get('index','App\Manage\Controller\TestController@index2');
});

Router::get('/favicon.ico', function () {
    return '';
});
