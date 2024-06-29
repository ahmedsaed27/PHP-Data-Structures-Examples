<?php

namespace As984\DataStructures\linkedList;

class LinkedListNode
{
    public int $data;
    public ?LinkedListNode $next;
    public ?LinkedListNode $prev;

    public function __construct(int $_data)
    {
        $this->data = $_data;
        $this->next = null;
        $this->prev = null;
    }
}
