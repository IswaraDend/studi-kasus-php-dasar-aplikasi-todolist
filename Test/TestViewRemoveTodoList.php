<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Iswara");
addTodoList("Dendy");
addTodoList("Arta");
addTodoList("Iswara");
addTodoList("Dendy");
addTodoList("Arta");

showTodoList();

viewRemoveTodoList();

showTodoList();