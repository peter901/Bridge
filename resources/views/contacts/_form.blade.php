@csrf
<div class="row">
    <div class="col-2"></div>

    <div class="col-6">
        
        <div class="form-group row">
            <label for="contact_type" class="col-sm-2 col-form-label">Contact Type</label>
            <div class="col-sm-10">
                <select name="contact_type" class="form-control" id="contact_type">
                    <option value=""> Select Contact Type </option>
                    <option @if(old('contact', $contact->contact_type) == "EMAIL") selected @endif value="EMAIL"> Email </option>
                    <option @if(old('contact', $contact->contact_type) == "PHONE") selected @endif value="PHONE"> Phone </option>
                </select>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="Contact" class="col-sm-2 col-form-label">Contact</label>
            <div class="col-sm-10">
                <input name="contact" type="text" value="{{ old('contact', $contact->contact) }}" class="form-control" id="contact">
            </div>
        </div>

        <input name="users_id" type='hidden' value="{{ $user->id }}" />
      
        <a href="{{ route('user.show',$user->id) }}" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-primary">{{$button}}</button>

    </div>

    <div class="col"></div>
</div>
