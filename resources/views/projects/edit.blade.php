@extends('layout')
@section('content')
    <div class="px-8 py-4">
<h1 >edit</h1>
<div class=>
    <form action="/projects/{{$project->id}}" method="POST">
        @csrf
        @method('PATCH')
        <label for="title">Title</label>
        <div class="border rounded ">
        <input class="w-full rounded " type="text" name="title" placeholder="Title" value="{{ $project->title }}">
        </div>
        <label for="description">Description</label>
        <div  class="border rounded ">
        <textarea class="w-full" name="description" >{{ $project->description }}</textarea>
        </div>
        <div>
            <button class="bg-blue-400 px-4 py-2 my-2 rounded" type="submit">Submit</button>
        </div>
</form>
<form action="/projects/{{$project->id}}" method="POST">
@method('DELETE')
@csrf
<button type="submit" class="bg-red-400 px-4 py-2 rounded">Delete</button>
</form>
</div>
</div>
@endsection