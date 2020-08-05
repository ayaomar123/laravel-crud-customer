@extends('teams.content')

@section('content')
    <table  class="table" width="100px">
        <tr>
            <th>Id</th>
            <th>img</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        @foreach($customer as $cus)
            <tr>
                <td>{{ $cus->id }}</td>

                <td> <img src="{{ $cus->image }}"width="100" height="100"></td>
                <td>{{ $cus->name}} </td>
                <td>{{ $cus->email}}</td>
                <td>{{ $cus->phone}}</td>
            </tr>
        @endforeach
    </table>
@endsection
