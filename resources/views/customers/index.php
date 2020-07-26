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
    <a href="<?=route('create') ?>"class="btn btn-sm btn-primary mb-3 ">Add Customer</a>
    <br>
    <table  class="table">
      <tr>
        <th>Id</th>
          <th>img</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th> Edit</th>
        <th>delete</th>
      </tr>
      <?php foreach ($customer as $cus): ?>
        <tr>
          <td><?= $cus->id ?></td>

            <td> <img src="<?= $cus->image ?>"width="100"></td>
          <td><?= $cus->name ?></td>
          <td><?= $cus->email ?></td>
            <td><?= $cus->phone ?></td>
          <td> <a href="<?= route('edit',[$cus->id]) ?>">Edit </a></td>
          <td> <form class="" action="<?= route('delete',[$cus->id]) ?>" method="post">
            <input type="hidden" name="_token" value="<?= csrf_token() ?> ">
            <input type="hidden" name="_method" value="delete">
            <button type="submit"class="btn btn-danger" name="button">Delete</button>

          </form> </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>

  </body>
</html>
