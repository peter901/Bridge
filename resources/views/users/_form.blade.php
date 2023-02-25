@csrf
<div class="row">
    <div class="col-2"></div>

    <div class="col-6">

        {{-- @foreach ($errors->all() as $error)
            <div class="alert alert-danger"> 
                <ul>
                    <li>{{ $error }}</li>
                </ul> 
            </div>
        @endforeach --}}
        
        <div class="form-group row">
            <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
            <div class="col-sm-10">
                <input name="first_name" type="text" value="{{ old('first_name', $user->first_name) }}" class="form-control" id="first_name">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-sm-10">
                <input name="last_name" type="text" value="{{ old('last_name', $user->last_name) }}" class="form-control" id="last_name">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input name="email" type="email" value="{{ old('email', $user->email) }}" class="form-control" id="email">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="date_of_birth" class="col-sm-2 col-form-label">Date of Birth</label>
            <div class="col-sm-10">
                <input name="date_of_birth" type="date" value="{{ old('date_of_birth', $user->date_of_birth) }}" class="form-control" id="date_of_birth">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="country" class="col-sm-2 col-form-label">Country</label>
            <div class="col-sm-10">
                <input name="country" type="text" value="{{ old('country', $user->country) }}" class="form-control" id="country">
            </div>
        </div>
        
        
        <a href="{{ route('user.index') }}" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-primary">{{$button}}</button>

    </div>

    <div class="col"></div>
</div>
