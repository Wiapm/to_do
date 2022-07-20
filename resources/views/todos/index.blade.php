
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>To_do_list</title>
</head>
<body>
    <div class="flex justify-center">
      <div class="text-center pt-10">
    <h1 class="text-3xl"> ALL TO_DO(S)</h1>
    

    <a  href="/todos/create" class="mx-5 py-1 px-1 bg-blue-400 cursor pointer rounded text-white">Create New</a>
</div>
<ul class="my-20 px-10">
    @foreach ($todos as $todo)
    <li class="flex justify center py-4">




    <p>
    {{$todo->title}}</p>
    <a href="{{'/todos/'.$todo->id.'/edit'}}" class="mx-6 py-1 px-2 bg-orange-400 cursor pointer rounded text-white">Edit</a>

</li>
@endforeach

</ul>
      </div>
</body>
</html>