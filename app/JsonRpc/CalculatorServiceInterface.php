<?php

namespace App\JsonRpc;

interface CalculatorServiceInterface
{
    public function sum(int $v1,int $v2) : int;
}