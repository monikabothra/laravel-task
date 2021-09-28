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
    <h3>Add a New Product</h3>
    <form class="form-horizontal" method="POST" action="/product">
        @csrf
        <div class="form-group">
          <label  class="col-sm-2 control-label">Product Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="name" placeholder="enter a product">
          </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label">category Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="category" placeholder="enter category name">
            </div>
        </div>
        <div class="form-group">
          <label  class="col-sm-2 control-label">Product Price</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="price" placeholder="describe the price of product">
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Save Product</button>
          </div>
        </div>
      </form>
    </div>
</body>
</html>