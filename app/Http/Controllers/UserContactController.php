<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_Contact;
use App\Models\User;

class UserContactController extends Controller
{
    public function create($user_id)
    {
        $user = User::findOrFail($user_id);
        $contact = new User_Contact();

        return view('contacts.add_contact',compact('contact', 'user'));
    }

    public function store(Request $request, $user_id)
    {
        User::findOrFail($user_id);

        $request->validate([
            'contact_type' =>['required'],
            'contact' =>['required'],
        ]);

        User_Contact::create($request->all());
    
        return redirect()->route('user.show',$user_id)->with('success','Contact successfully created!');
    }

    public function edit($user_id, $contact_id)
    {
        $user = User::findOrFail($user_id);
        $contact = User_Contact::findOrFail($contact_id);

        return view('contacts.edit_contact',compact('contact', 'user','contact'));
    }

    public function update(Request $request, $user_id, $contact_id)
    {
        User::findOrFail($user_id);
        $contact = User_Contact::findOrFail($contact_id);

        $request->validate([
            'contact_type' =>['required'],
            'contact' =>['required'],
        ]);

        $contact->contact_type = $request->input('contact_type');
        $contact->contact = $request->input('contact');

        $contact->save();

        return redirect()->route('user.show',$user_id)->with('success','Contact successfully Update!');

    }
}
