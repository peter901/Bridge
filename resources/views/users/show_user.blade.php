@extends('layouts.main')

@section('title', 'Show user')

@section('content')
@include('partials._messages')

    <div class="card position-relative">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ $user->first_name }} {{ $user->last_name }}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>Email</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                            <th>Date of Birth</th>
                            <td>{{ $user->date_of_birth }}</td>
                        </tr>
                            <th>Age</th>
                            <td>{{ $user->age }}</td>
                        </tr>
                            <th>Country</th>
                            <td>{{ $user->country }}</td>
                        </tr>
                </table>
            </div>
        </div>
    </div>

    <hr>

    <div class="card position-relative">
        <div class="card-header py-3">
            <span  class="m-0 font-weight-bold text-primary">User Contacts</span>
            <a class='btn btn-primary btn-sm float-right' href="{{route('contact.create',$user->id)}}"><i class="bi bi-plus-square"></i> Add Contact</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Sn</th>
                            <th>Contact Type</th>
                            <th>Contact</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($user->user_contacts as $k=> $contact)
                        <tr>
                            <td>{{ $k+1 }}</td>
                            <td>{{ $contact->contact_type }}</td>
                            <td>{{ $contact->contact }}</td>
                            <td> 
                                <a class="btn btn-primary btn-sm" href="{{ route('contact.edit',[$user->id, $contact->id]) }}">
                                    <i class="bi bi-pencil-square"></i> 
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <hr>

    <div class="card position-relative">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User Qualifactions</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Sn</th>
                            <th>Level</th>
                            <th>Qualification</th>
                            <th>Awarding Institution</th>
                            <th>Awade Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <hr>

    <div class="card position-relative">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User Employment</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Sn</th>
                            <th>Organisation</th>
                            <th>Industry</th>
                            <th>Postion</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Employed From</th>
                            <th>Employed To</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
