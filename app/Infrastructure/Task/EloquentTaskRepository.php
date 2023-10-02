<?php

namespace App\Infrastructure\Task;

use App\Models\Task\Task;
use App\Models\Task\TaskRepositoryInterface;

class EloquentTaskRepository implements TaskRepositoryInterface
{
    protected $model;

    public function __construct(Task $model)
    {
        $this->model = $model;
    }

    public function create(Task $task)
    {
        $task->save();
    }
    public function update(Task $task)
    {
        $task->save();
    }
    public function delete($taskId)
    {
        $task = $this->model->find($taskId);

        if ($task) {
            $task->delete();
        }
    }
    public function find($taskId)
    {
        return $this->model->find($taskId);

    }
}
