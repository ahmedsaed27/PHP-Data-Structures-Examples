<?php

namespace As984\DataStructures\stack;

use As984\DataStructures\Contracts\IsEmpty;
use As984\DataStructures\Contracts\Peek;
use As984\DataStructures\linkedList\LinkedList;
use As984\DataStructures\Traits\MethodNotFound;

class Stack implements IsEmpty , Peek
{
    use MethodNotFound;

    private LinkedList $list;

    public function __construct()
    {
        $this->list = new LinkedList();
    }

    public function push(int $data): void
    {
        $this->list->push($data);
    }

    public function pop(): ?int
    {
        if ($this->isEmpty()) {
            return null;
        }

        $data = $this->list->tail->data;
        $this->list->remove($data);

        return $data;
    }

    public function isEmpty(): bool
    {
        return $this->list->head === null;
    }

    public function peek(): ?int
    {
        return $this->list->tail ? $this->list->tail->data : null;
    }

    public function printStack(): void
    {
        while (!$this->isEmpty()) {
            echo 'lenght: ' . $this->list->getLength()  . PHP_EOL;
            echo 'Top element: ' . $this->peek() . PHP_EOL;
            echo 'Popped element: ' . $this->pop() . PHP_EOL;
            
            if($this->list->getLength()  == 0){
                echo 'lenght ' . $this->list->getLength()  . PHP_EOL;
            }
        }
        
    }
}
