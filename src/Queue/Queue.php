<?php

namespace As984\DataStructures\Queue;

use As984\DataStructures\linkedList\LinkedList;

class Queue
{
    private LinkedList $list;

    public function __construct()
    {
        $this->list = new LinkedList();
    }

    public function enqueue(int $data): void
    {
        $this->list->push($data);
    }

    public function dequeue(): ?int
    {
        if ($this->isEmpty()) {
            return NULL;
        }

        // Get the data from the head (front of the queue)
        $data = $this->list->head->data;

        // Remove the head node
        $this->list->remove($data);

        return $data;
    }

    public function isEmpty(): bool
    {
        return $this->list->getLength() === 0;
    }

    public function peek(): ?int
    {
        return $this->list->head ? $this->list->head->data : NULL;
    }

    public function printQueue(): void
    {
        while (!$this->isEmpty()) {
            echo 'lenght: ' . $this->list->getLength()  . PHP_EOL;
            echo 'first element: ' . $this->peek() . PHP_EOL;
            $this->dequeue();
            echo 'remove the top element' . PHP_EOL;
            if($this->list->getLength()  == 0){
                echo 'lenght ' . $this->list->getLength()  . PHP_EOL;
            }
        }
    }
}
