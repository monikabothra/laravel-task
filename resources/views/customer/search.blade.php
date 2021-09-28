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
    <div class="container">
        
        <table class="table table-condensed">
            <tr>    
                <th>customer name</th>
                <th>customer contact</th>
                <th>customer email</th>
                <th>customer password</th>
                <th>customer address1</th>
                <th>customer address2</th>
                <th>customer address3</th>
            </tr>
        @foreach ($user as $value)
        <tr>
            <td>{{$value->name}}</td>
            <td>{{$value->mobile}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->password}}</td>
            <td>{{$value->address1}}</td>
            <td>{{$value->address2}}</td>
            <td>{{$value->address3}}</td>
        </tr>
        @endforeach

        </table>
    </div>
</body>
</html>