<?php

namespace App\JsonRpc;

use Hyperf\RpcServer\Annotation\RpcService;

#[RpcService(name: 'CalculatorService',protocol: 'jsonrpc-http',server: 'jsonrpc-http',publishTo: 'nacos')]
class CalculatorService implements CalculatorServiceInterface
{

    public function sum(int $v1, int $v2): int
    {
       return $v1 + $v2;
    }
}