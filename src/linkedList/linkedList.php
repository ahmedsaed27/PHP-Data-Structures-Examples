<?php

namespace As984\DataStructures\linkedList;

use As984\DataStructures\Traits\MethodNotFound;

class LinkedList
{
    use MethodNotFound;

    public ?LinkedListNode $head = NULL;
    public ?LinkedListNode $tail = NULL;
    private int $length = 0;

    
    public function push(int $_data): void
    {
        $newNode = new LinkedListNode($_data);

        if ($this->head === NULL) {
            $this->head = $newNode;
            $this->tail = $newNode;
        } else {

            $newNode->prev = $this->tail;
            $this->tail->next = $newNode;
            $this->tail = $newNode;
        }

        $this->length++;
    }

    public function pushAfter(LinkedListNode|int $targetData, int $newData): void
    {
        $currentNode = $this->head;

        // Traverse the list to find the target node
        while ($currentNode !== NULL && $currentNode->data !== $targetData) {
            $currentNode = $currentNode->next;
        }

        // If the target node is found
        if ($currentNode !== NULL) {
            $newNode = new LinkedListNode($newData);
            $newNode->next = $currentNode->next;
            $newNode->prev = $currentNode;
            if ($currentNode->next !== NULL) {
                $currentNode->next->prev = $newNode;
            }
            $currentNode->next = $newNode;

            // If the new node is inserted at the end, update the tail
            if ($currentNode === $this->tail) {
                $this->tail = $newNode;
            }
        }

        $this->length++;
    }

    public function pushBefore(LinkedListNode|int $targetData, int $newData): void
    {
        // If the list is empty
        if ($this->head === NULL) {
            return;
        }

        // If the target node is the head
        if ($this->head->data === $targetData) {
            $newNode = new LinkedListNode($newData);
            $newNode->next = $this->head;
            $this->head->prev = $newNode;
            $this->head = $newNode;
            return;
        }

        $currentNode = $this->head;

        // Traverse the list to find the node just before the target node
        while ($currentNode->next !== NULL && $currentNode->next->data !== $targetData) {
            $currentNode = $currentNode->next;
        }

        // If the node just before the target node is found
        if ($currentNode->next !== NULL) {
            $newNode = new LinkedListNode($newData);
            $newNode->next = $currentNode->next;
            $newNode->prev = $currentNode;
            $currentNode->next->prev = $newNode;
            $currentNode->next = $newNode;
        }

        $this->length++;
    }

    public function remove(LinkedListNode|int $targetData): void
    {
        // If the list is empty
        if ($this->head === NULL) {
            return;
        }

        // If the target node is the head
        if ($this->head->data === $targetData) {
            $this->head = $this->head->next;
            if ($this->head !== NULL) {
                $this->head->prev = NULL;
            } else {
                $this->tail = NULL;
            }
            $this->length--;
            return;
        }

        $currentNode = $this->head;

        // Traverse the list to find the target node
        while ($currentNode !== NULL && $currentNode->data !== $targetData) {
            $currentNode = $currentNode->next;
        }

        // If the target node is found
        if ($currentNode !== NULL) {
            if ($currentNode->next !== NULL) {
                $currentNode->next->prev = $currentNode->prev;
            } else {
                $this->tail = $currentNode->prev;
            }
            if ($currentNode->prev !== NULL) {
                $currentNode->prev->next = $currentNode->next;
            }

            $this->length--;
        }
    }


    public function printList(): void
    {
        $iterator = new LinkedListIterator($this->head);

        // Iterate through the linked list and print data
        while ($iterator->valid()) {
            $currentNodeData = $iterator->current();
            $nextNode = $iterator->getNextObject();
            $prevNode = $iterator->getPrevObject();
            $nextNodeData = $nextNode ? $nextNode->data : 'NULL';
            $prevNodeData = $prevNode ? $prevNode->data : 'NULL';

            echo "Node $currentNodeData points to Node $nextNodeData and comes from Node $prevNodeData" . PHP_EOL;
            $iterator->next(); // Move to the next node
        }
    }

    public function getLength(): int
    {
        return $this->length;
    }

}
