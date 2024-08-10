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

## Why Use a Queue?

- A Queue is a fundamental data structure that provides several advantages:

- Orderly Processing: Queues follow a First-In-First-Out (FIFO) principle, which ensures that elements are   processed in the order they arrive. This is ideal for scenarios where order matters, such as task scheduling, resource management, or handling requests in a sequential manner.

- Efficient Task Management: In systems where multiple tasks are enqueued for processing, a queue helps manage these tasks efficiently by ensuring each task is handled in turn without skipping or reordering.

- Real-World Application: Queues are ubiquitous in real-world applications. They are used in print spooling, task scheduling (like in operating systems), managing calls in customer service centers, and in breadth-first search algorithms for traversing trees or graphs.

- Concurrency Control: In multi-threaded or distributed environments, queues can be used to manage the flow of tasks between different parts of a system, ensuring that resources are used effectively and that tasks are handled fairly.

- Simplifies Coding: Using a queue simplifies the logic required to manage ordered collections of data, providing a clear, straightforward interface for adding, removing, and inspecting elements.


