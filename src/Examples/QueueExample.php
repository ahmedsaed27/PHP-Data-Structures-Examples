<?php
    namespace As984\DataStructures\Examples; 
    use As984\DataStructures\Contracts\ShouldHandle;
    use As984\DataStructures\Facade\DataStructuresFacade;

    class QueueExample implements ShouldHandle
    {
        public function __construct()
        {
            $this->handle();
        }

        public function handle(): void
        {
            $stack = DataStructuresFacade::queue();
            // Push some initial data into the queue
            $stack->enqueue(10);
            $stack->enqueue(20);
            $stack->enqueue(30);

            // Print The queue List
            $stack->printQueue();
        }
    }
