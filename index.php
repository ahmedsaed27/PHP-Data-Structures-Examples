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
            // Create a new LinkedList
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
    }


?>
