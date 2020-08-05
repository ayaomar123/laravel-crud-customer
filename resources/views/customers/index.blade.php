@extends('teams.content')

@section('content')
    <h1>Customers</h1>
    <a href="{{route('create')}}"class="btn btn-sm btn-primary mb-3 ">Add Customer</a>
    <br>
    <table  class="table" width="100px">
      <tr>
        <th>Id</th>
          <th>img</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th> Edit</th>
        <th>delete</th>
      </tr>

      @foreach($customer as $cus)
        <tr>
          <td>{{ $cus->id }}</td>

            <td> <img src="{{ $cus->image }}"width="100" height="100"></td>
          <td>{{ $cus->name}} </td>
          <td>{{ $cus->email}}</td>
            <td>{{ $cus->phone}}</td>
          <td> <a href="{{ route('edit',[$cus->id]) }}">Edit </a></td>
          <td> <form class="" action="{{ route('delete',[$cus->id]) }}" method="post">
                  <input type="hidden" name="_token" value=" {{csrf_token()}} ">
            <input type="hidden" name="_method" value="delete">
            <button type="submit"class="btn btn-danger" name="button">Delete</button>

          </form> </td>
        </tr>
      @endforeach
    </table>
@endsection
