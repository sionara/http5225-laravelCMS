@extends('layouts.admin');
@section('content')
<div class="row">
  <div class="col">
    <h1 class="display-2">View All Employees</h1>
  </div>
</div>

<a href="{{route('employees.create')}}">Create Employeee</a>
<div class="row">
  @foreach ($employees as $employee )
    <div class="col-md-4  mb-3">
      <div clas="card" style="width: 18rem;">
        <div class="card-body">
          <div class="card-title">
            <h2>{{$employee -> fname}} | {{$employee -> lname}}</h2>
            <p>
              {{$employee -> role}}
            </p>
          </div>
          <a href="{{ route('employees.edit', $employee -> id ) }}" class="card-link">Edit</a>
          <a href="{{ route('employees.trash', $employee -> id )}}" class="card-link">Delete</a>
        </div>
      </div>
    </div>
  @endforeach
  

  
</div>
@endsection