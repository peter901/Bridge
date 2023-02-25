@extends('layouts.main')

@section('title', 'Edit user')

@section('content')
@include('partials._messages')

<form action="{{ route('user.update',$id) }}" method="POST">
    @method('put')
    @include('users._form',['button'=>'Edit'])
    
</form>
@endsection