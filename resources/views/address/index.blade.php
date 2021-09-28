<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Address<b>Details</b></h2></div>
                    <div class="col-sm-4">
                        {{-- <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add Stock</button> --}}
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Customer Name</th>
                        <th>Address 1</th>
                        <th>Address 2</th>
                        <th>Address 3</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @dd($data); --}}
                    @foreach ($data as $value )
                    <tr>
                        <td>{{$value->customer->name}}</td>
                        <td>{{$value->address1}}</td>
                        <td>{{$value->address2}}</td>
                        <td>{{$value->address3}}</td>
                        <td>
                            <a class="edit" title="Edit" data-toggle="tooltip" href="address/{{$value->id}}/edit"><i class="material-icons"></i></a>
                            <form method="post" action="/address/{{$value->id}}">
                                @csrf
                                @method('delete')
                                <button type="submit">delete</button>
                                </form>
                            {{-- <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a> --}}
                        </td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>