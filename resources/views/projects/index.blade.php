<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="px-8 ">
    <h1 class="text-3xl">hello</h1>

    @foreach ($projects as $item)
    <div class="bg-blue-200 my-2 border rounded px-4 flex justify-between" >
        <div>
        <div class="text-xl font-semibold py-2">
        <a href="/projects/{{$item->id}}">{{$item->title}}</a></div>
        <div class=" pb-2">{{$item->description}}</div>

    </div>
    <div class="my-8">
<a href="/projects/{{$item->id}}/edit" >Edit</a>
</div>
    </div>

    @endforeach
</div>
<div class="px-8">
        <h1>Leave a comment</h1>
        <form action="/projects" method="POST" >
            @csrf
            <div class="my-2 " >
                <input class="w-full border rounded {{ $errors->has('title') ? 'border-red-600' : ''}}" type="text"  name="title" placeholder="title"  >
            </div>
            <div class="my-2">
            <textarea class="w-full border rounded  {{$errors->has('description') ? 'border-red-600':''}}" type="text" name="description" placeholder="description" ></textarea>
                </div>
                <div>
                    <button class="bg-blue-200 rounded px-4 py-2" type="submit">Submit</button>
                </div>
              @if ($errors->any())
                  
              
                <div class="w-100 bg-red-600 py-2 my-2 rounded">
                    <ul>
                    @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                    @endforeach
                </ul>
                </div>
                @endif
        </form>
    </div>
</body>
</html>
<style>
.is-danger{
    border:1px solid red;
}
</style>