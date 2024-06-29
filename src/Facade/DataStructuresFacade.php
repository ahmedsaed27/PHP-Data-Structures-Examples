<?php

namespace As984\DataStructures\Facade;
use As984\DataStructures\linkedList\LinkedList;

class DataStructuresFacade
{
    public static function linkedList(): LinkedList
    {
        return new LinkedList;
    }

}