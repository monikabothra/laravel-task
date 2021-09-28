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
   {{-- @dd($customer->id); --}}
    
    <div class="container">
    <h3>Edit category</h3>
    <form class="form-horizontal" method="POST" action="/customer/{{$customer->id}}">
        @csrf
        @method('patch')
        <div class="form-group">
          <label  class="col-sm-2 control-label">customer Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="name" placeholder="enter a category" value="{{$customer->name}}">
          </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label">customer contact</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="mobile" placeholder="enter mobile" value="{{$customer->mobile}}">
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-2 control-label">customer email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="email" placeholder="enter email" value="{{$customer->email}}">
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-2 control-label">customer password</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="password" placeholder="enter password" value="{{$customer->password}}">
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-2 control-label">customer address 1</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="address1" placeholder="enter address1" value="{{$customer->address1}}">
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-2 control-label">customer address 2</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="address2" placeholder="enter address2" value="{{$customer->address2}}">
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-2 control-label">customer address 3</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="address3" placeholder="enter address3" value="{{$customer->address3}}">
            </div>
          </div>
        
        
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Update Customer</button>
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