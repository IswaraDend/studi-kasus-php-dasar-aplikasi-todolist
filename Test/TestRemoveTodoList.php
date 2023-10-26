<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Iswara");
addTodoList("Dendy");
addTodoList("Arta");
addTodoList("Bagas");
addTodoList("Tri");

showTodoList();

removeTodoList(2);

showTodoList();