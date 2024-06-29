<?php

namespace As984\DataStructures\linkedList;

class LinkedListIterator implements \Iterator
{
    private ?LinkedListNode $currentNode;

    public function __construct(?LinkedListNode $node)
    {
        $this->currentNode = $node;
    }

    public function current(): mixed
    {
        return $this->currentNode->data;
    }

    public function next(): void
    {
        $this->currentNode = $this->currentNode->next;
    }

    public function key(): mixed
    {
        return $this->currentNode->data;
    }

    public function valid(): bool
    {
        return $this->currentNode !== null;
    }

    public function rewind(): void
    {
        // Not needed for forward-only iteration
    }

    public function getNextObject(): ?LinkedListNode
    {
        return $this->currentNode->next;
    }

    public function getPrevObject(): ?LinkedListNode
    {
        return $this->currentNode->prev;
    }
}
