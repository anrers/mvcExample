<?php

namespace Model\Models;

use DateTime;

class TaskModel
{
    public function __construct(
        public ?int $id,
        public string $name,
        public int $status,
        public DateTime $dueDate,
        public DateTime $createdAt,
        public ?string $description = null,
        public ?DateTime $executedAt = null,
    ) {
    }
}