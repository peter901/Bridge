<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $auth_user;

    public function __construct()
    {
        if (auth()->check()) {
            dd(Auth::user());
        } else {
            echo 'User is not authenticated.';
        }
        
    }
    public function index(){

        $auth_user = $this->auth_user;
        
        $users = User::get();

        foreach($users as $user){
            $date_of_birth =  Carbon::parse($user->date_of_birth);
            $user->age = $date_of_birth->age;
        }

        return view('users.index', compact('users'));
    }

    public function create(){

        $user = new User();
        return view('users.add_user', compact('user'));
    }

    public function store(Request $request){

        $request->validate([
            'first_name' =>['required'],
            'last_name' =>['required'],
            'email' =>['required','email'],
            'date_of_birth' =>['required'],
            'country' => ['required']
        ]);

        $user = User::create($request->all());

        return redirect()->route('user.index')->with('success', 'User successfully created!');
    }

    public function edit(Request $request,$id){
      
        $user = User::findOrFail($id);
        return view('users.edit_user', compact('user','id'));
    }

    public function update(Request $request, $id){
        $user = User::findOrFail($id);

        $request->validate([
            'first_name' =>['required'],
            'last_name' =>['required'],
            'email' =>['required','email'],
            'date_of_birth' =>['required'],
            'country' => ['required']
        ]);

        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->country = $request->input('country');

        $user->save();

        return redirect()->route('user.index')->with('success', 'User successfully updated!');
    }

    public function show($id){
        $user = User::findOrFail($id);
        
        $date_of_birth =  Carbon::parse($user->date_of_birth);
        $user->age = $date_of_birth->age;

        return view('users.show_user',compact('user'));
    }
}
