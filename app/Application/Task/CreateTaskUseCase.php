<?php

namespace App\Application\Task;

use App\Models\Task\TaskServices;

class CreateTaskUseCase
{
    protected $taskServices;

    public function __construct(TaskServices $taskServices)
    {
        $this->taskServices =  $taskServices;
    }

    public function execute(array $data)
    {
        return  $this->taskServices->createTask($data);
    }

}
