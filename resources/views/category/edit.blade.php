<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    {{-- @dd($category) --}}
    <div class="container">
    <h3>Edit category</h3>
    <form class="form-horizontal" method="POST" action="/category/{{$data->id}}">
        @csrf
        {{-- @method('patch') --}}
        <div class="form-group">
          <label  class="col-sm-2 control-label">Category Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="name" placeholder="enter a category" value="{{$data->name}}">
          </div>
        </div>
        <div class="form-group">
          <label  class="col-sm-2 control-label">Category Description</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="description" placeholder="describe the category" value="{{$data->description}}">
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Update Category</button>
          </div>
        </div>
      </form>
      {{-- <form method="post" action="/category/{{$data->id}}">

        @csrf
        @method('patch')
        name:<input type="text" name="name" value="{{$data->name}}"/><br/>
        description:<input type="text" name="description" value="{{$data->description}}"/><br/>
        <button type="submit">submit</button>
    </form> --}}
    </div>
</body>
</html>