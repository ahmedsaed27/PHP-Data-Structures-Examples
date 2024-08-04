<?php

namespace As984\DataStructures\Traits;

trait MethodNotFound
{

    public function __call($methodName, $args)
    {
        echo "Method '{$methodName}' not found. Arguments: " . implode(', ', $args) . PHP_EOL;
        exit();
    }

}