<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Iswara");
addTodoList("Dendy");
addTodoList("Arta");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();