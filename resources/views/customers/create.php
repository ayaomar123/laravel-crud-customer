<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">
    <br>
    <h1>Customers</h1>
  <form class="" action="<?=route('store') ?>" method="post">
      <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}">-->
      <input type="hidden" name="_token" value="<?= csrf_token() ?>">

        <div class="form-group">
       <label for="name">Name</label>
       <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" >
      </div>
        <div class="form-group">
       <label for="email">Email address</label>
       <input type="email" name="email"class="form-control" id="email" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
       <label for="password">Password</label>
       <input type="password"name="password" class="form-control" id="password">
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
  </form>
  </div>

  </body>
</html>
