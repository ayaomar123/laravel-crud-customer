@extends('teams.content')

@section('content')
    <header class="d-flex flex-wrap mt-3 mb-5">
        <h1 class="mr-auto">Create Role</h1>
    </header>

<div>
    <form action="{{ route('roles.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>

        <div class="form-group">
            <h1 >Permissions</h1>
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="view" value="view" id="view">
                    <label class="form-check-label" for="defaultCheck1">
                        View customer
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input"  name="create" type="checkbox" value="create" id="create">
                    <label class="form-check-label" for="defaultCheck1">
                        Create Customer
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input"  name="update" type="checkbox" value="update" id="update">
                    <label class="form-check-label" for="defaultCheck1">
                        Update Customer
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input"  name="delete" type="checkbox" value="delete" id="delete">
                    <label class="form-check-label" for="defaultCheck1">
                        Delete Customer
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn bg-primary">Create</button>
    </form>
</div>



@endsection