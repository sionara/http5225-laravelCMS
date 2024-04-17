@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Add a Employee
            </h1>
        </div>
    </div>
    <div class="row">
        <form action="{{ route('employees.store') }}" method="post">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" aria-describedby="fname">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" aria-describedby="lname">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">SIN number</label>
                <input type="text" class="form-control" id="sin" name="sin" aria-describedby="lname">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone" aria-describedby="lname">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">role</label>
                <input type="text" class="form-control" id="role" name="role" aria-describedby="lname">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

