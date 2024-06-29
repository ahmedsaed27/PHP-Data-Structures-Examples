# PHP Data Structures Example

This PHP project demonstrates the implementation of various data structures using object-oriented programming principles.

## Overview

This project includes the implementation of a doubly linked list data structure in PHP. The main file (`index.php`) demonstrates the functionality of the doubly linked list through an example usage scenario.

## How It Works

### Index File (`index.php`)

The `index.php` file serves as the entry point to demonstrate the functionality of the implemented data structures. It showcases the usage of a doubly linked list through the `ShouldHandle` interface and `DataStructuresFacade`.

#### Code Explanation

```php
<?php
use As984\DataStructures\Contracts\ShouldHandle;

require_once __DIR__ . '/vendor/autoload.php';

return new class implements ShouldHandle
{
    public function __construct()
    {
        $this->handle();
    }

    public function handle(): void
    {
        // Create a new LinkedList instance
        $data = (new As984\DataStructures\Facade\DataStructuresFacade)->linkedList();

        // Push some initial data into the linked list
        $data->push(1);
        $data->push(2);
        $data->push(3);

        // Use pushAfter method to insert new data after node with data 1
        $data->pushAfter(1, 4);

        // Use pushBefore method to insert new data before node with data 1
        $data->pushBefore(1, 98);

        // Remove node with data 1
        $data->remove(1);

        // Print the Linkedlist 
        $data->printList();
    }
};
?>
```

### Usage

To run the code:

1. Ensure PHP 8.0 or later is installed.
2. Install dependencies by running `composer install`.
3. Execute the following command in your terminal or command prompt:

```bash
php ./index.php

