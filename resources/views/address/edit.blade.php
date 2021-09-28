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
    <h3>Edit address</h3>
    <form class="form-horizontal" method="POST" action="/address/{{$address->id}}">
        @csrf
        @method('patch')
        <div class="form-group">
          {{-- <label  class="col-sm-2 control-label">customer Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="name" placeholder="enter a category" value="{{$address->customer->name}}">
          </div> --}}
          <div class="col">
            <select name="customer_id">
              @foreach ($customer as $value )
                <option value="{{$address->customer->id}}">{{$address->customer->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label">address 1</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="address1" placeholder="address 1" value="{{$address->address1}}">
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-2 control-label">address 2</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="address2" placeholder="enter address 2" value="{{$address->address2}}">
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-2 control-label">address 3</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="address3" placeholder="enter address 3" value="{{$address->address3}}">
            </div>
          </div>
          
        
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Update Address</button>
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