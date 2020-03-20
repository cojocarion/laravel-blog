<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
@extends('layout')
@section('content')
<div class="px-4 border rounded bg-blue-200 ">
        <div>id: {{$project->id}}</div>
<h1 class="font-bold capitalize">{{$project->title}}</h1>
<div class="content">{{$project->description}}</div>
<div>   
<a href="/projects/{{$project->id}}/edit">Edit </a>
</div>
<div  class=" pb-2">Crated at: {{$project->created_at}}</div>
<div  class=" pb-2"> Updated at: {{$project->updated_at}}</div>
@if ($project->tasks->count())

<div class="pl-8">
    <h1>Tasks</h1>


    @foreach ($project->tasks as $task)
<form method="POST" action="/completed-tasks/{{$task->id}}">
    @if ($task->completed)
        @method('DELETE')
    @endif
        @method('PATCH')
        @csrf
<label class="{{$task->completed ? 'line-through': ''}}" for="completed">
<input type="checkbox" name="completed" onchange="this.form.submit() "{{$task->completed ? 'checked': ''}}>
{{$task->description}}
</label>
    </form>
    @endforeach
</div>
    
@endif
<div>
    <a href="/projects" class="underline"> Back</a>
</div>
</div>

<form method="POST" action="/projects/{{$project->id}}/tasks" >
    @csrf
    <div class=" border py-4 px-2 mt-4">
        <label for="description">New Task</label>
        <div class="w-full">
            <input type="text" name="description" placeholder="New Task" class="border w-full mt-2 {{ $errors->has('description') ? 'border-red-600' : ''}}" required>
            <div>
                    <button type="submit" class=" mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Task</button>
                </div>
        </div>
    </div>
   @include ('errors')
</form>
@endsection