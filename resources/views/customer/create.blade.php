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
    <div class="container">
    <h3>Add a new customer</h3>
    <form class="form-horizontal" method="POST" action="/customer">
        @csrf
        <div class="form-group">
          <label  class="col-sm-2 control-label">Customer Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="name" placeholder="enter cutomer name">
            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label">Customer contact</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="mobile" placeholder="enter mobile number">
              @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
          </div>
        <div class="form-group">
          <label  class="col-sm-2 control-label">Customer email</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="email" placeholder="enter email">
            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label">password</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="password" placeholder="enter password">
              @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-2 control-label">address 1</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="address1" placeholder="enter address 1">
              @error('address1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
          </div><div class="form-group">
            <label  class="col-sm-2 control-label">address 2</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="address2" placeholder="enter address 2">
              @error('address2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
          </div><div class="form-group">
            <label  class="col-sm-2 control-label">address 3</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="address3" placeholder="enter address 3">
              @error('address3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
          </div>
        
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Save Customer</button>
          </div>
        </div>
      </form>
    </div>
</body>
</html>