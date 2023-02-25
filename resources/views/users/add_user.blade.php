@extends('layouts.main')

@section('title', 'Add user')

@section('content')
@include('partials._messages')

<form action="{{ route('user.store') }}" method="POST">
    @include('users._form',['button'=>'Save'])
    
</form>
@endsection