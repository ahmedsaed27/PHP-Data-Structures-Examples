<?php

namespace As984\DataStructures\Facade;
use As984\DataStructures\linkedList\LinkedList;
use As984\DataStructures\stack\Stack;

class DataStructuresFacade
{
    public static function linkedList(): LinkedList
    {
        return new LinkedList;
    }


    public static function stack(): Stack
    {
        return new Stack;
    } 

}