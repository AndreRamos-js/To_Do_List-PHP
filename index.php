<?php


require_once "init.php";

use Classes\Bd;

Bd::getConn()->query("INSERT INTO tarefas (descricao,concluida) VALUES ('teste', 1)")->execute();
