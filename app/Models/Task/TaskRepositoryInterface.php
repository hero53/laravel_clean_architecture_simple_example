<?php

namespace App\Models\Task;

interface TaskRepositoryInterface{

    public function create(Task $task);
    public function update(Task $task);
    public function delete($taskId);
    public function find($taskId);
}
