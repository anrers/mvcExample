<?php

namespace Model\Repositories;

use DateTime;
use Exception;
use Model\Database;
use Model\Models\TaskModel;

class TaskRepository
{
    public function __construct(
        protected Database $db
    ) {
    }

    /**
     * @return array<TaskModel>
     * @throws Exception
     */
    public function getAll(): array
    {
        $result = [];

        $dbResult = $this->db->connection()->query('SELECT * FROM tasks order by id');

        while ($row = $dbResult->fetch()) {
            $result[] = new TaskModel(
                id: $row['id'],
                name: $row['name'],
                status: $row['status'],
                dueDate: new DateTime($row['dueDate']),
                createdAt: new DateTime($row['createdAt']),
                description: $row['description'],
                executedAt: new DateTime($row['executedAt'])
            );
        }

        return $result;
    }

    public function create(TaskModel $task): int
    {

    }

    public function update(TaskModel $task): bool
    {

    }

    public function getById(int $id): TaskModel
    {

    }
}