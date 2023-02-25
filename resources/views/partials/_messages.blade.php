@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@foreach ($errors->all() as $error)
    <div class="alert alert-danger"> 
        <ul>
            <li>{{ $error }}</li>
        </ul> 
    </div>
@endforeach
