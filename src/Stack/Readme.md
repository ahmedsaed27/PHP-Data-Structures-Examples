# Stack Data Structure Implementation

This repository provides a PHP implementation of a stack data structure using a linked list. The stack follows the Last In, First Out (LIFO) principle, where the most recently added element is the first to be removed.

## Overview

The stack is implemented with the following key components:

- **`Stack`**: The main stack class that uses a linked list to store elements.
- **`LinkedList`**: Provides the underlying linked list structure.
- **`DataStructuresFacade`**: A facade for easy access to the stack and linked list.
- **`StackExample`**: Demonstrates how to use the stack.

## Code Explanation

### `Stack` Class

The `Stack` class encapsulates the stack operations. It uses a `LinkedList` to store the stack elements.

#### Key Methods

- **`__construct()`**: Initializes the stack by creating a new linked list.
  
- **`push(int $data): void`**: Adds an integer element to the top of the stack. This method uses the `push` method of the `LinkedList` class to add the new node to the end of the list.

- **`pop(): ?int`**: Removes and returns the top element of the stack. It retrieves the data from the tail of the linked list, removes the tail node, and returns the data. If the stack is empty, it returns `null`.

- **`isEmpty(): bool`**: Checks if the stack is empty by verifying if the linked list's head is `null`.

- **`peek(): ?int`**: Returns the top element of the stack without removing it. It retrieves the data from the tail node of the linked list or returns `null` if the stack is empty.

- **`printStack(): void`**: Prints the current state of the stack, including its length and the elements. It also shows the length after each `pop` operation.

### `LinkedList` Class

The `LinkedList` class provides the data structure for the stack. It maintains the list of nodes and supports operations like adding and removing nodes.

#### Key Methods

- **`push(int $_data): void`**: Adds a new node with the given data to the end of the linked list. Updates the `tail` and `length` accordingly.

- **`remove(LinkedListNode|int $targetData): void`**: Removes the node with the specified data from the list. Handles updates to both `head` and `tail` pointers and decrements the length.

- **`getLength(): int`**: Returns the current length of the linked list.

### `DataStructuresFacade` Class

The `DataStructuresFacade` class provides a convenient way to access the stack and linked list without needing to instantiate them directly.

#### Key Methods

- **`stack(): Stack`**: Returns a new instance of the `Stack` class.
  
- **`linkedList(): LinkedList`**: Returns a new instance of the `LinkedList` class.

### `StackExample` Class

The `StackExample` class demonstrates how to use the stack data structure. It creates a stack instance, pushes some elements, and prints the stack's state.

## Usage

Here’s how you can use the stack data structure in your own PHP code:

1. **Instantiate the Stack**

   To create a new stack instance, you can use the `DataStructuresFacade`:

   ```php
    use As984\DataStructures\Facade\DataStructuresFacade;

    $stack = DataStructuresFacade::stack();

    //Add elements to the top of the stack using the push method:
    $stack->push(10);
    $stack->push(20);
    $stack->push(30);

    // Retrieve the top element of the stack without removing it:
    $topElement = $stack->peek(); // 30

    // Remove and retrieve the top element:
    $poppedElement = $stack->pop(); // 30

    // Print the stack’s state, including its length and elements:
    $stack->printStack();       


