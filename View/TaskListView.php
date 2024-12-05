<?php

namespace View;

class TaskListView
{
    const string TEMPLATE = 'list';

    public function render(array $tasks): string
    {
        $path = 'templates/' . self::TEMPLATE . '.template.php'; ;

        ob_start();
        require_once $path;
        return ob_get_clean();
    }
}
