<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <table class="table table-condensed">
        <tr>    
            <th>category name</th>
            <th>category description</th>
            <th>action</th>
        </tr>
        {{-- @dd($data) --}}
        @foreach ($data as $value)
        {{-- @dd($data) --}}

        <tr>
            <td>{{$value->name}}</td>
            <td>{{$value->description}}</td>
            <td><a href="category/{{$value->id}}/edit">edit</a>
                <form method="post" action="/category/delete/{{$value->id}}">
                    @csrf
                    {{-- @method('delete') --}}
                    <button type="submit">delete</button>
                    </form>
            </td>

        </tr>            
        @endforeach
      </table>
</body>
</html>