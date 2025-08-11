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
Router::addRoute(['GET', 'POST', 'HEAD'], '/ddd', 'App\Controller\IndexController@index2');
//Router::addRoute(['GET', 'POST', 'HEAD'], '/manage/index', 'App\Manage\Controller\IndexController@index');
//Router::get('/test1', 'App\Manage\Controller\IndexController@index');
Router::addGroup('/manage2/',function (){
    Router::get('index','App\Manage\Controller\IndexController@index');
});

Router::get('/favicon.ico', function () {
    return '';
});
