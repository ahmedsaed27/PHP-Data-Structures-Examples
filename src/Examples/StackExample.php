<?php
    namespace As984\DataStructures\Examples; 
    use As984\DataStructures\Contracts\ShouldHandle;
    use As984\DataStructures\Facade\DataStructuresFacade;

    class StackExample implements ShouldHandle
    {
        public function __construct()
        {
            $this->handle();
        }

        public function handle(): void
        {
            $stack = DataStructuresFacade::stack();
            // Push some initial data into the Stack
            $stack->push(10);
            $stack->push(20);
            $stack->push(30);

            // Print The Stack List
            $stack->printStack();
        }
    }
