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
    <h3>Contact Us</h3>
    <form class="form-horizontal" method="POST" action="/contact">
        @csrf
        <div class="form-group">
          <label  class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="email" placeholder="enter an email">
          </div>
        </div>
        <div class="form-group">
            
            @error('email')
            <div class="col-sm-10 col-sm-offset-2 alert alert-danger">{{$message}}
            </div>
            @enderror
        </div> 
        <div class="form-group">
            <label  class="col-sm-2 control-label">Mobile</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="mobile" placeholder="enter your mobile">
            </div>
          </div>
        <div class="form-group">
            
            @error('mobile')
            <div class="col-sm-10 col-sm-offset-2 alert alert-danger">{{$message}}
            </div>
            @enderror
        </div> 
       
        
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Email</button>
          </div>
        </div>
      </form>
    </div>
</body>
</html>