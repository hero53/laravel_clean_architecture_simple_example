<?php

namespace App\Models\Task;

use App\Infrastructure\Task\EloquentTaskRepository;

class TaskServices
{
    protected $taskRepository;
    public function __construct(EloquentTaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function createTask(array $data)
    {
        $task =  new Task();
        $task->title = $data['title'];
        $task->description = $data['description'];

        $this->taskRepository->create($task);
        return $task;
    }
}
