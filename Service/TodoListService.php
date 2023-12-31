<?php

namespace Service {

    use Entity\TodoList;
    use Repository\TodoListRepository;

    interface TodoListService {
        function showTodoList() ;

        function addTodoList(string $todo): void;

        function removeTodoList(int $number) : void;
    }

    class TodoListServiceImpl implements TodoListService
    {
        private TodoListRepository $todoListRepository;

        function __construct(TodoListRepository $todoListRepository)
        {
            $this->todoListRepository = $todoListRepository;
        }

        function showTodoList()
        {
            echo "TODOLIST" . PHP_EOL;

            $todoList = $this->todoListRepository->findAll();

            foreach ($todoList as $number => $value) {
                echo "$number. ". $value->getTodo() . PHP_EOL;
            }
        }

        function addTodoList(string $todo): void
        {
            $todoList = new TodoList($todo);
            $this->todoListRepository->save($todoList);

            echo "Sukses Menambah Todolist" . PHP_EOL;
        }

        function removeTodoList(int $number): void
        {
            if ($this->todoListRepository->remove($number)) {
                echo "Sukses Menghapus todolist" . PHP_EOL;
            }
            else {
                echo "Gagal Menghapus todolist" . PHP_EOL;
            }
        }
    }
    
}