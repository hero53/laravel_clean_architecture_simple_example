<?php

namespace App\Http\Controllers\Task;

use App\Application\Task\CreateTaskUseCase;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    protected $reateTaskUseCase;

    public function __construct(CreateTaskUseCase $reateTaskUseCase)
    {
        $this->reateTaskUseCase =  $reateTaskUseCase;
    }

    public function store(Request $request){

        try {
            $task = $this->reateTaskUseCase->execute($request->all());
            return response()->json(
                [
                    'code'=>201,
                    'data'=>$task
                ]
            );
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }

    }
}
