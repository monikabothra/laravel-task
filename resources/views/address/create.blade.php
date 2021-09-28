<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="d-flex justify-content-center">
        <form method="POST" action="/address">
            @csrf
            <div class="row">
                
             
              <div class="col">
                <select name="customer_id">
                  @foreach ($customer as $value )
                    <option value="{{$value->id}}">{{$value->name}}</option>
                    @error('customer_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  @endforeach
                </select>
              </div>
              
              
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="address 1" name="address1">
                    @error('address1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="address 2" name="address2">
                    @error('address2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="address 3" name="address3">
                    @error('address3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
              
              
            </div>
            <button type="submit" class="btn btn-primary">Add Address</button>
          </form>
        </div>
</body>
</html>