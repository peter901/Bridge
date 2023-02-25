@extends('layouts.main')

@section('title', 'Users')

@section('content')

@include('partials._messages')

<div class="card-header py-3">
    <a class='btn btn-primary btn-sm' href="{{route('user.create')}}"><i class="bi bi-plus-square"></i> Add User</a>
</div>

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Sn</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Date of Birth</th>
                    <th>Age</th>
                    <th>Country</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Sn</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Date of Birth</th>
                    <th>Age</th>
                    <th>Country</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
            <tbody>
            @foreach($users as $k => $u)
                <tr>
                    <td>{{ $k +1 }}</td>
                    <td>{{ $u->first_name }}</td>
                    <td>{{ $u->last_name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->date_of_birth }}</td>
                    <td>{{ $u->age }}</td>
                    <td>{{ $u->country }}</td>
                    <td>
                    <div class="btn-group float-right">
                        <a href="{{ route('user.show',$u->id) }}" class='btn btn-secondary btn-sm'><i class="bi bi-eye-fill"></i> Show</a>
                        <a href="{{ route('user.edit',$u->id) }}" class='btn btn-primary btn-sm'><i class="bi bi-pencil-square"></i> Edit</a>
                        <a class='btn btn-danger btn-sm'><i class="bi bi-trash-fill"></i> Delete</a>
                    </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection