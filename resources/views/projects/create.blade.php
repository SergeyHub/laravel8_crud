@extends('layouts.app')

@section('content')
    <div class="row"><br><br>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>an application that can calculate the salary of employees</h2>
            </div><br><br>
            <div class="pull-right">
                <a type="submit" class="btn btn-success" href="{{ route('projects.index') }}"
                   title="Create a project">
                    Return
                </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('projects.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Age:</strong>
                    <input type="text" name="age" class="form-control" placeholder="Age">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kids:</strong>
                    <input type="text" name="kids" class="form-control" placeholder="Kids">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rent Car:</strong>
                    <input type="text" name="rentcar" class="form-control" placeholder="Rent Cart">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Salary Rate:</strong>
                    <input type="number" name="salaryrate" class="form-control" placeholder="Salary Rate">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tax Plan %:</strong>
                    <input type="number" name="tax" class="form-control" placeholder="Tax Plan %">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
