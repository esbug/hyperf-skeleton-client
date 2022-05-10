<?php

namespace App\Controller;

use Hyperf\DbConnection\Db;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\GetMapping;

#[Controller(prefix: 'test')]
class TestController extends AbstractController
{
    #[GetMapping("get")]
    public function get()
    {
       $queryResult = DB::select('select * from t_user where id = 1');
       return [
           'code' => 200,
           'data' => $queryResult
       ];
//        return config('nacos_config.mysql');
    }

}