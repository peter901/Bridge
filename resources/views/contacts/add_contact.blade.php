@extends('layouts.main')

@section('title', "Add contact - ({$user->first_name} {$user->last_name}) ")

@section('content')
@include('partials._messages')

<form action="{{ route('contact.store',$user->id) }}" method="POST">
    @include('contacts._form',['button'=>'Save'])
    
</form>
@endsection