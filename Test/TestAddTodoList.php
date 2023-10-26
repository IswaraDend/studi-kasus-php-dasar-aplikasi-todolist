<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Iswara");
addTodoList("Dendy");
addTodoList("Arta");

var_dump($todoList);