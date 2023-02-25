@extends('layouts.main')

@section('title', "Edit Contact - ({$user->first_name} {$user->last_name})")

@section('content')
@include('partials._messages')

<form action="{{ route('contact.update',[$user->id, $contact->id]) }}" method="POST">
    @method('put')
    @include('contacts._form',['button'=>'Edit'])
    
</form>
@endsection