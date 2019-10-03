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
    <div class="px-8">
    <h1>Leave a comment</h1>
    <form action="/projects" method="POST" >
        @csrf
        <div class="border rounded my-2 ">
            <input class="w-full" type="text" name="title" placeholder="title">
        </div>
        <div class="border rounded my-2">
                <textarea class="w-full" type="text" name="description" placeholder="description"></textarea>
            </div>
            <div>
                <button class="bg-blue-200 rounded px-4 py-2" type="submit">Submit</button>
            </div>
           
    </form>
</div>
</body>
</html>