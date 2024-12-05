<?php

namespace Controllers;

use Model\Database;
use Model\Models\TaskModel;
use Model\Repositories\TaskRepository;
use View\TaskListView;

class HomeController
{
    public function index(): string
    {
        $db = new Database();
        $repository = new TaskRepository($db);

        $tasks = $repository->getAll();

        $view = new TaskListView();

        return $view->render($tasks);
    }

    public function create()
    {

    }
}