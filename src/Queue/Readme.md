# PHP Queue Implementation Based on Linked List

This repository contains a PHP implementation of a Queue data structure, built on top of a doubly linked list. The queue follows a First-In-First-Out (FIFO) order.

## Table of Contents
- [Installation](#installation)
- [Usage](#usage)
  - Enqueue Elements
  - Dequeue Elements
  - Peek at the Front Element
  - Check if the Queue is Empty
  - Print the Queue

## Installation

To use this Queue implementation, ensure you have the following structure in your project:

```plaintext
src/
├── DataStructures/
│   ├── linkedList/
│   │   ├── LinkedList.php
│   │   ├── LinkedListNode.php
│   │   ├── LinkedListIterator.php
│   ├── Queue/
│   │   ├── Queue.php
│   └── Traits/
│       └── MethodNotFound.php
├── README.md
```
## Usage

```php
use As984\DataStructures\Queue\Queue;

$queue = new Queue();

// Enqueue Elements
// To add elements to the queue, use the enqueue method.

$queue->enqueue(10);
$queue->enqueue(20);
$queue->enqueue(30);

// Dequeue Elements
// To remove elements from the queue, use the dequeue method. This will remove and return the element at the front of the queue.

$dequeuedItem = $queue->dequeue();
echo $dequeuedItem; // Outputs: 10

// Peek at the Front Element
// You can check the front element of the queue without removing it by using the peek method.

$frontItem = $queue->peek();
echo $frontItem; // Outputs: 20

// Check if the Queue is Empty
// You can check if the queue is empty using the isEmpty method.

$isEmpty = $queue->isEmpty();
var_dump($isEmpty); // Outputs: bool(false)

// Print the Queue
// To print all elements in the queue, use the printQueue method.

$queue->printQueue();
// Outputs:
// Node 20 points to Node 30 and comes from Node NULL
// Node 30 points to Node NULL and comes from Node 20

```


