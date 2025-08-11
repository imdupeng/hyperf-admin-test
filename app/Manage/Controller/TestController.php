<?php
declare(strict_types=1);
namespace App\Manage\Controller;
use App\Controller\AbstractController;
/*
 *  管理后台-代码测试
 *
 * */
class TestController extends AbstractController{
    public function index(){
        return 'Test Index!';
    }
    public function index2(){
        return 'Test Index2-gg1';
    }
}