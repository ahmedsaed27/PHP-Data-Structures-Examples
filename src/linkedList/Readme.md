# PHP LinkedList Example

This PHP code example demonstrates a basic implementation of a doubly linked list data structure. It includes classes for LinkedList, LinkedListNode, and LinkedListIterator.

## LinkedList Class

The `LinkedList` class manages the linked list operations such as adding nodes (`push`, `pushAfter`, `pushBefore`), removing nodes (`remove`), and printing the list (`printList`). It also includes a magic method `__call` to handle undefined method calls.

### Methods

- `push(int $_data)`: Adds a new node with the given data at the end of the list.
- `pushAfter(LinkedListNode|int $targetData, int $newData)`: Inserts a new node after a specified target node or data.
- `pushBefore(LinkedListNode|int $targetData, int $newData)`: Inserts a new node before a specified target node or data.
- `remove(LinkedListNode|int $targetData)`: Removes a node with the specified data from the list.
- `printList()`: Prints the contents of the linked list.

## LinkedListIterator Class

The `LinkedListIterator` class implements the `Iterator` interface to iterate over the nodes of the linked list.

### Methods

- `current()`: Returns the current node's data.
- `next()`: Moves the iterator to the next node.
- `key()`: Returns the current node's data as the key.
- `valid()`: Checks if the iterator is valid (current node is not null).
- `rewind()`: Not needed for forward-only iteration.
- `getNextObject()`: Returns the next node in the list.
- `getPrevObject()`: Returns the previous node in the list.

## LinkedListNode Class

The `LinkedListNode` class represents a node in the linked list.

### Properties

- `data`: Holds the data for the node.
- `next`: Points to the next node in the list.
- `prev`: Points to the previous node in the list.

## Description of LinkedLists

A linked list is a fundamental data structure consisting of nodes where each node contains a piece of data and a reference (link) to the next node in the sequence. In a doubly linked list, each node also maintains a reference to the previous node.

### When to Use Linked Lists

Linked lists are useful in scenarios where you need frequent insertion and deletion operations in a dynamic collection of data. Unlike arrays, linked lists do not require contiguous memory allocation, allowing for efficient insertions and deletions at any point in the list.

### Time Complexity

- **Access (Search)**: O(n)
- **Insertion (at beginning or end)**: O(1)
- **Deletion (given a node)**: O(1)
- **Insertion (at specific position)**: O(n)
- **Deletion (given a position)**: O(n)

## Usage

To use the LinkedList, instantiate objects and call methods as demonstrated in the provided code example. Ensure you have the necessary autoload setup or include statements to use these classes in your PHP application.

Example usage:
```php
use As984\DataStructures\Facade\DataStructuresFacade;

// Create a linked list
$linkedList = (new DataStructuresFacade())->linkedList();

// Add nodes
$linkedList->push(1);
$linkedList->push(2);
$linkedList->push(3);

// Print the list
$linkedList->printList();
