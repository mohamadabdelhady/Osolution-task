<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $query = Task::query();
        $allowedFilters = ['priority', 'category_id', 'completed'];
        
        foreach ($allowedFilters as $filter) {
            if ($request->has($filter)) {
                $query->where($filter, $request->input($filter));
            }
        }

        $sortBy = $request->input('sort', 'desc');
        $query->orderBy('created_at', $sortBy);

        $perPage = $request->input('per_page', 10);

        $tasks=$query->paginate($perPage);

        return response()->json([$tasks], 200);
    }

    public function show($id)
    {
        $task = Task::find($id);
        
        if (!$task) {
            return response()->json(['message'=>'Task not found'], 404);
        }  
        
        return response()->json($task, 200);
    }

    public function store(StoreTaskRequest $request)
    {
        $validatedData = $request->validated();

        if (!isset($validatedData['image_url'])|| empty($validatedData['image_url'])) {
            $category = Category::find($validatedData['category_id']);
            $seedOffset = $category->image_seed_offset ?? 'default';
            $filter = $category->image_filter ?? '';
            $validatedData['image_url'] = "https://picsum.photos/seed/{$seedOffset}/400/300?{$filter}";
        }

        Task::create($validatedData);

        return response()->json(['message'=>'Task created successfully'],201);
    }

    public function update(UpdateTaskRequest $request, Task $task)
    {
        $validatedData = $request->validated();

        
        $task->update($validatedData);

        return response()->json(['message'=>'Task updated successfully'],200);
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return response()->noContent();
    }
}
