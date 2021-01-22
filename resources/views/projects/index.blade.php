@extends('layouts.app')

@section('content')
    <div class="row"><br><br>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>an application that can calculate the salary of employees</h2>
            </div><br><br>
            <div class="pull-right">
                <a type="submit" class="btn btn-primary" href="{{ route('projects.create') }}"
                   title="Create a project">
                    New Employee
                </a>
            </div>
        </div>
    </div><br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <!--<table class="table table-bordered table-responsive-lg">-->
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Kids</th>
                <th scope="col">Rent Car</th>
                <th scope="col">Salary Rate</th>
                <th>Tax %</th>
                <th>Total</th>
                <th width="110px">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($projects as $project)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $project->name }}</td>
                <td>{{ $project->age }}</td>
                <td>{{ $project->kids }}</td>
                <td>{{ $project->rentcar }}</td>
                <td>{{ $project->salaryrate }}</td>

                @php $t= $project->salaryrate; @endphp

                <td>{{ $project->tax }}</td>

                @php $tax= $project->salaryrate; $tax=0.2*$tax; @endphp

                <td>@php echo $t+$tax; @endphp</td>
                <!--<td>{{-- date_format($project->created_at, 'jS M Y') --}}</td>-->
                <td>
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">

                        <a href="{{ route('projects.show', $project->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('projects.edit', $project->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! $projects->links() !!}

@endsection
