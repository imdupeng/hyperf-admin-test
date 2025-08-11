<?php
declare(strict_types=1);
namespace App\Manage\Controller;
use App\Controller\AbstractController;
/*
 *  管理后台-代码测试
 *
 * */
class IndexController extends AbstractController{
    public function index(RenderInterface $render){
//        return 'this is manage/index/index';
        return $render->render('manage/index', ['name' => 'Hyperf']);
    }

    public function inde2x(){
        return 'this is manage/index/index';
    }

}